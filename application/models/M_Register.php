<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Register extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $table_user = 'tb_user';
    public $id_user = 'user_id';
    public $order_user = 'ASC';

    function get_all_user()
    {
        $this->db->order_by($this->id_user, $this->order_user);
        return $this->db->get($this->table_user)->result();
    }
    function get_by_id_user($id)
    {
        $this->db->where($this->id_user, $id);
        return $this->db->get($this->table_user)->row();
    }

    function insert_user($data)
    {
        $this->db->insert($this->table_user, $data);
    }
    function update_user($id, $data)
    {
        $this->db->where($this->id_user, $id);
        $this->db->update($this->table_user, $data);
    }
    function delete_user($id)
    {
        $this->db->where($this->id_user, $id);
        $this->db->delete($this->table_user);
    }

    function update_password($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tb_user', $data);
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    

}