<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $is_login = true;

    function __construct()
    {
        parent::__construct();
        if( $this->is_login !== false ) {
            $this->load->driver('cache', array('adapter' => 'redis'));
            $this->load->helper('url');
            $user_info = $this->check_login(); //检测用户是否登录
            $this->automedia_session_user = $user_info;
        }
    }

    /**
     * check login
     */
    protected function check_login () {
        $this->load->driver('cache',array('adapter' => 'redis'));
        $request_info = $this->is_ajax_request();
        $ad_user_cookie = $this->input->cookie($this->config->config['cp_user_cookie_name']);
        if(is_null($ad_user_cookie))
        {
            if($request_info == false)
            {
                redirect(BASE_DMA_URL . '/login');
            }
            else
            {
                //$this->output('401' , 'login first',BASE_DMA_URL . '/login');
                $this->Output(array(
                    'code' => '401',
                    'msg' => 'login first',
                ));
            }
        }
        else
        {
            $user = unserialize($this->decryptions($ad_user_cookie));
            if($user)
            {
                $cache_key = $this->config->config['redis_prefix'].'cp_user_'.$user['id'].'_'.$user['mark'];
                $user_info = $this->cache->get($cache_key);
                if($user_info)
                {
                    if($user['id'] == $user_info['id'])
                    {
                        $this->cache->save($cache_key,$user_info,$this->config->config['cp_user_cache_min_active']);
                        return $user_info;
                    }
                    else
                    {
                        if($request_info == false)
                        {
                            redirect(BASE_DMA_URL . '/login');
                        }
                        else
                        {
                            //$this->output('401' , 'login first',BASE_DMA_URL . '/login');
                            $this->Output(array(
                                'code' => '401',
                                'msg' => 'login first',
                            ));
                        }
                    }
                }
                else
                {
                    if($request_info == false)
                    {
                        redirect(BASE_DMA_URL . '/login');
                    }
                    else
                    {
                        //$this->output('401' , 'login first',BASE_DMA_URL . '/login');
                        $this->Output(array(
                            'code' => '401',
                            'msg' => 'login first',
                        ));
                    }
                }
            }
            else
            {
                if($request_info == false)
                {
                    redirect(BASE_DMA_URL . '/login');
                }
                else
                {
                    //$this->output('401' , 'login first',BASE_DMA_URL . '/login');
                    $this->Output(array(
                        'code' => '401',
                        'msg' => 'login first',
                    ));
                }
            }
        }



    }


    /**
     * 判断是否为ajax请求
     */
    protected function is_ajax_request() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    /**
     * @param $paramArr
     * @param $secret
     * @return string   创建签名
     */
    private function createSign($paramArr) {
        $checkarr = array('model','method','timestamp','data');
        $sign = $this->config->config['secret'];
        ksort($paramArr);
        foreach ($paramArr as $key => $val) {
            if ($key !='' && !is_null($val) && in_array($key, $checkarr)) {
                $sign .= $key.$val;
            }
        }
        $sign .= $this->config->config['secret'];
        $sign = strtoupper(md5($sign));
        return $sign;
    }

    /**
     * AJAX输出
     * @param $array
     */
    public function Output($array){
        $response = array('code'=>isset($array['code'])?$array['code']:200,'msg'=>$array['msg']);
        if(isset($array['url'])){
            $response['url'] = $array['url'];
        }
        if( isset($_GET['debug']) ) {
            echo json_encode($response);
            $this->output->enable_profiler(TRUE);
            $this->output->_display();
            exit;
        }
        $this->output
            ->set_header('HTTP/1.0 '.$response['code'].' OK')
            ->set_header('HTTP/1.1 '.$response['code'].' OK')
            ->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s',time()-3600).' GMT')
            ->set_header('Cache-Control: no-store, no-cache, must-revalidate')
            ->set_header('Cache-Control: post-check=0, pre-check=0')
            ->set_header('Pragma: no-cache')
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response));
        $this->output->_display();
        exit;
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