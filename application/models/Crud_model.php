<?php

    class Crud_model extends CI_Model {


        public function get_entries()
        {
                $query = $this->db->get('to-do-list');
                if (count($query->result() ) > 0) {
                    return $query->result();
                }
        }

        public function insert_entry($data)
        {
                return  $this->db->insert('to-do-list', $data);
        }

        public function delete_entry($id){
            return $this->db->delete('to-do-list', array('id' => $id));
        }

        public function edit_entry($id){
            $this->db->select("*");
            $this->db->from("to-do-list");
            $this->db->where("id", $id);
            $query = $this->db->get();
            if(count($query->result()) > 0) {
                return $query->row();
            }
        }

        public function update_entry($data)
        {
            return $this->db->update('to-do-list', $data, array('id' => $data['id']));
        }

    }

?>