<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function biodataku()
    {
        $this->load->view('biodata');
    }
}