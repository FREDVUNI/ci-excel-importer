<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    public function __construct() {
		parent::__construct();
		$this->table = 'db_items';
	}
    public function items($id = FALSE){
        if ($id  === FALSE) :
            $query  = $this->db->get('db_items');
            return $query->result_array();
        endif;
        $query =  $this->db->get_where('db_items', array('db_items.id' => $id));
        return $query->row_array();
    }
    public function save ($params)
    {
        $this->db->insert('db_items', $params);
        $id = $this->db->insert_id();
        return $id;
    }
}