<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

    public function check_user($username,$password)
    {
        $sql = 'select * from cp_user where username = ? and password = md5(CONCAT(md5(?),salt))';
        $query = $this->db->query($sql,array($username,$password));
        return $query->first_row('array');
    }
}