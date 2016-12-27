<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');
class View extends CI_Controller {
        function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('product');  
    }
    public function index()
    {
        $data['message']='';
        $this->load->helper('form');
        $this->load->helper('url');
        $data['products']=$this->product->view_multi();
		$this->load->view('listing',$data);
    }
}
?>