<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Website Resmi DPRD Kabupaten Banggai Laut";

        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }
}
