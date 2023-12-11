<?php

class Report extends Controller {


    public function __construct(){
        if( isset($_SESSION['usr']) ){}
        else {
            header('location:' .BASEURL);
        }
    }

    
    public function index(){
        $data['rdata'] = $this->model('Report_model')->reportList();
        $this->view('report/index', $data);
    }

}