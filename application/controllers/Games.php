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

    public function edit($id=1)
    {
        $sql = '
        select
        *
        from
        game_info
        WHERE 
        id = ?
        ';
        $game_info = $this->db->query($sql,array($id))->first_row('array');

        $this->load->view('games_edit',$game_info);
    }

    public function do_create()
    {
        $params = $this->input->post();
        $logo = $gamepic = $lb1 = $lb2 = $lb3 = $lb4 = $lb = array();

        $name = $params['gamename'];
        $gametype = $params['gametype'];
        $size = $params['gamesize'];
        $downnum = $params['downnum'];
        $type = $params['tj'];
        $about = $params['about'];
        $url = $params['url'];

        $insert_arr = array(
            'name' => $name,
            'gametype' => $gametype,
            'size' => $size,
            'downnum' => $downnum,
            'type' => $type,
            'about' => $about,
            'url' => $url,
            'addtime' => date('Y-m-d H:i:s',time()),
        );
        $this->db->insert('game_info', $insert_arr);
        $gameid = $this->db->insert_id();

        foreach($_FILES as $key => $f)
        {
            if($f['size']>0)
            {
                $$key = $this->get_pic($key,$gameid);
            }
        }

        $logo = '/upload/'.$gameid.'/'.$logo['upload_data']['file_name'];

        for($i=1;$i<=4;$i++)
        {
            $tempname = 'lb'.$i;
            if(isset($$tempname) && !empty($$tempname))
            {
                $tname = $$tempname;
                $lb[] = '/upload/'.$gameid.'/'.$tname['upload_data']['file_name'];
            }
        }

        $pic = json_encode($lb);

        $update_arr = array(
            'logo' => $logo,
            'pic' => $pic,
        );

        $this ->db->update('game_info',$update_arr,array('id'=>$gameid));

        header('location: /games/');

    }

    public function do_edit()
    {
        $params = $this->input->post();
        var_dump($params);exit;
    }

    public function get_list()
    {
        $params = $this->input->get();
        $limit1 = $params['iDisplayStart'];
        $limit2 = $params['iDisplayLength'];
        $limit = " limit $limit1,$limit2";

        $where = ' 1 = 1 ';

        $sql = "
        SELECT
            *
        FROM
            `game_info`
        WHERE
        $where
        ";
        $query = $this->db->query($sql.$limit);
        $result = $query->result_array();

        $count = $this->db->query($sql)->result_array();
        $count = count($count);

        $return = array();
        $return['aaData'] = $result;
        $return['iTotalDisplayRecords'] = $count;
        $return['iTotalRecords'] = $count;
        echo json_encode($return);exit;
    }

    private function get_pic($filename,$id='temp')
    {

        if (!is_dir('./upload/'.$id.'/'))
        {
            mkdir('./upload/' . $id . '/', 0777, true);
        }
        $config['upload_path']      = './upload/'.$id.'/';
        $config['allowed_types']    = 'gif|jpg|png|jepg';
        $config['max_size']     = 100000;
        $config['file_name'] = $filename;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload($filename);
        $pic = array('upload_data' => $this->upload->data());

        return $pic;
    }


}