<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_programib extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
          /* if ( IS_MAINTENANCE() == 1 )
           redirect('maintenance'); */
       
    }
  
    public function index()
    {
       	$Ctrl_data['page'] = 'programib';
       	$Ctrl_data['title'] = 'Program IB' ;
      	//$this->load->view('v_play',$data) ;
      	$this->load->view('vd_pages/v_programib',$Ctrl_data);
    }
    
}