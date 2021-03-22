<?php
    class Redirect_controller extends CI_Controller {

        public function index() {

            $this->load->helper('url');

            redirect('/home');
        }
    }
?>