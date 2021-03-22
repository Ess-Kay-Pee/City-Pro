<?php
    class CityPro_model extends CI_Model {

        function __construct() {

            parent::__construct();
        }
        public function insert($data) {

            if($this->db->insert("learning_needs", $data)) {

                return true;
            }
        }
    }
?>