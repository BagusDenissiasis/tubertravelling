<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_user()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('user_id','DESC');

        $query = $this->db->get('users');
        return $query->result();
    }

    public function create_user()
    {
        $data = array(
                'level'        => $this->input->post('level'),
                'nama'          => $this->input->post('nama'),
                'email'          => $this->input->post('email'),
                'username'          => $this->input->post('username'),
                'password'          => $this->input->post('password'),
            );
        return $this->db->insert('users', $data);
    }

    // Dapatkan kategori berdasar ID
    public function get_user_by_id($id)
    {
        $query = $this->db->get_where('users', array('user_id' => $id));
        return $query->row();
    }

    public function update_user($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'users', $data, array('user_id'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

    public function hapus_user($id)
    {
        if ( !empty($id) ){
            $delete = $this->db->delete('users', array('user_id'=>$id) );
            return $delete ? true : false;
        } else {
            return false;
        }
    }
}
