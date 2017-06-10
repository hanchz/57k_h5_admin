<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Games extends MY_Controller{

    function __construct() {
        parent::__construct ();
    }

    public function index()
    {
        $this->load->view('games');
    }

    public function create()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->view('games_create');
    }

    public function do_create()
    {
        $params = $this->input->post();

        $config['upload_path']      = './public/';
        $config['allowed_types']    = 'gif|jpg|png|jepg';
        $config['max_size']     = 100000;
        //$config['max_width']        = 1024;
        //$config['max_height']       = 768;

        $this->load->library('upload', $config);

        $this->upload->do_upload('gamepic');
        //$error = array('error' => $this->upload->display_errors());
        $gamepic = array('upload_data' => $this->upload->data());

        $this->upload->do_upload('gamelogo');
        $gamelogo = array('upload_data' => $this->upload->data());
        var_dump($gamepic,$gamelogo);exit;


        var_dump($params);exit;
    }
}