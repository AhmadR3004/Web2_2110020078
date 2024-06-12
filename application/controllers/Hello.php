<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello Nama Saya Ahmad Rosyad";
    }

    public function hello_2110020078()
    {
        $this->load->model('hello_model');
        $data = $this->hello_model->hello_2110020078();
        echo $data;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('hello_model');
        $data['mvc'] = $this->hello_model->hello_mvc();
        $data['nama'] = 'Ahmad Rosyad';
        $data['npm'] = '2110020078';
        $this->load->view('hello_view', $data);
    }
}
