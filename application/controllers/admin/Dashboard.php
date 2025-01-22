<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('adid'))
            redirect('admin/login');
    }

    public function index()
    {
        $this->load->model('Admin_Dashboard_Model');
        $totalcount = $this->Admin_Dashboard_Model->totalcount();
        $sevendayscount = $this->Admin_Dashboard_Model->countlastsevendays();
        $thirtydayscount = $this->Admin_Dashboard_Model->countthirtydays();
        $this->load->view('admin/dashboard', ['tcount' => $totalcount, 'tsevencount' => $sevendayscount, 'tthirycount' => $thirtydayscount]);
    }
}
