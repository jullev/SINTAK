<?php
Class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->icon = "fa-home";
    }

    function index(){
        $param['pageInfo'] = "Dashboard";
		$this->template->load("common/template", "pages/dashboard/view_dashboard", $param);
    }
}