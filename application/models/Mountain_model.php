<?php
class Mountain_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_mountains($name = FALSE)
    {
        if ($name === FALSE)
        {
            $query = $this->db->get('mountain');
            return $query->result_array();
        }

        $query = $this->db->get_where('mountain', array('Name' => $name));
        return $query->row_array();
    }
}
