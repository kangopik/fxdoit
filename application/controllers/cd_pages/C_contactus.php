<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_contactus extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
          /* if ( IS_MAINTENANCE() == 1 )
           redirect('maintenance'); */
       
    }
  
    public function index()
    {
       	$Ctrl_data['page'] = 'contactus';
       	$Ctrl_data['title'] = 'Hubungi Kami' ;
      	//$this->load->view('v_play',$data) ;
      	$this->load->view('vd_pages/v_contactus',$Ctrl_data);
    }
    
}