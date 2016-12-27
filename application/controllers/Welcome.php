<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    var $url;
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
        $data['products']=$this->product->get_contents();
		$this->load->view('welcome_message',$data);
	}
    public function submit()
    {
            $this->load->helper('url');
            $this->load->library('form_validation');
            $url=$this->save(); 
            $data = array(
            'type' => $this->input->post('p_type'),
            'name' => $this->input->post('p_name'),
            'price' => $this->input->post('p_price'),
            'discount' => $this->input->post('p_disc'),
            'avail' => $this->input->post('p_quan'),
            'description' => $this->input->post('p_desc'),
            'status' => $this->input->post('p_stat'),
            'src' => $url
            
            );
            //echo $data['name'];
            $this->product->add_product($data);
            $data['message'] = 'Data Inserted Successfully';
            $data['products']=$this->product->get_contents();
            $this->load->view('welcome_message', $data);
            
    }
    public function remove($id)
    {
        print_r($id);
        $this->load->helper('url');
       
        $this->product->remove($id);
        $data['message'] = 'Data Deleted Successfully';
        $data['products']=$this->product->get_contents();
        $this->load->view('welcome_message', $data);
    }
    public function edit_product()
    {
        $data  = array();
        $this->load->helper('url');
        $data['products']=$this->product->get_contents();
        $this->load->view('welcome_message',$data);
    }
    public function alter($id)
    {
        $this->load->helper('url');
        $data['id']=$id;
        $this->load->view('edit',$data);
    }
    public function submit_alter($id)
    {
        $this->load->helper('url');
        
        $data = array(
            'type' => $this->input->post('p_type'),
            'name' => $this->input->post('p_name'),
            'price' => $this->input->post('p_price'),
            'discount' => $this->input->post('p_disc'),
            'avail' => $this->input->post('p_quan'),
            'description' => $this->input->post('p_desc'),
            'status' => $this->input->post('p_stat')
            );
        $this->product->alter_product($data,$id);
        $data['products']=$this->product->get_contents();
        $this->load->view('welcome_message', $data);
    }
    public function view_products()
    {
        $data  = array();
        $this->load->helper('url');
        $data['products']=$this->product->get_contents();
        $this->load->view('welcome_message',$data);
    }
    public function save()
    {
        $url=$this->do_upload();
        return $url;
        
    }
    public function do_upload()
    {
        $type=explode('.',$_FILES["pic"]["name"]);
        //$type1=$type;
        $type=$type[count($type)-1];
        $url1=uniqid(rand()).'.'.$type;
        $url="./assets/images/".$url1;
        if(in_array($type,array("jpg","jpeg","gif","png")))
            if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
                move_uploaded_file($_FILES["pic"]["tmp_name"],$url);
        return $url1;
        return "";   
    }
}
?>
