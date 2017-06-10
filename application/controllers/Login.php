<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller{

    function __construct() {
        $this->is_login = false;
        parent::__construct ();

        $this->load->model('user_model');
    }

    public function index()
    {
        $this->load->view('login_soft');
    }

    public function login()
    {
        $this->load->driver('cache',array('adapter' => 'redis'));

        $params = $this->input->post();

        if((empty($params['username']) || is_null($params['username']) ) || (empty($params['password']) || is_null($params['password']) ))
        {
            $this->Output(array(
                'code' => '201',
                'msg' => 'params_err',
            ));
        }

        $username = $params['username'];
        $password = $params['password'];

        //$username = 'admin';
        //$password = 'qwe123';

        $user = $this->user_model->check_user($username,$password);
        if(is_null($user))
        {
            $this->Output(array(
                'code' => '201',
                'msg' => 'username or password is error',
            ));
            exit;
        }

        $mark = uniqid();//防止多次登录
        //$mark = 0;


        $user['login_time'] = time();
        $user['mark'] = $mark;

        $cache_key = $this->config->config['redis_prefix'].'cp_user_'.$user['id'].'_'.$mark;
        $cache_value = $user;
        $this->cache->save($cache_key,$cache_value,$this->config->config['cp_user_cache_min_active']);

        $cp_cookie_value = $this->encryptions(serialize($user));

        $cp_user_cookie_arr = array(
            'name' => $this->config->config['cp_user_cookie_name'],
            'value'  => $cp_cookie_value,
            'expire' => $this->config->config['cp_user_cookie_expire'],
            'domain' => $this->config->config['cp_user_cookie_domain'],
            'path'   => $this->config->config['cp_user_cookie_path'],
            //'prefix' => '',
            //'secure' => TRUE
        );

        $this->input->set_cookie($cp_user_cookie_arr);

        $this->Output(array(
            'code' => '200',
            'msg' => 'login success',
        ));
    }

    private function encryptions($plain)
    {
        $this->load->library('encryption');
        $this->encryption->initialize(
            array(
                'cipher' => $this->config->config['cryption_cipher'],
                'mode' => $this->config->config['cryption_mode'],
                'key' => $this->config->config['cryption_key']
            )
        );
        return $this->encryption->encrypt($plain);
    }

    private function decryptions($cipher)
    {
        $this->load->library('encryption');
        $this->encryption->initialize(
            array(
                'cipher' => $this->config->config['cryption_cipher'],
                'mode' => $this->config->config['cryption_mode'],
                'key' => $this->config->config['cryption_key']
            )
        );
        return $this->encryption->decrypt($cipher);
    }

}