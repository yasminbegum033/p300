<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		
		    $this->load->view('include/header3');
			$this->load->view('login');
			$this->load->view('include/footer');
	}
	
	
	public function check_login($email="",$password="")
	{


		$email=urldecode($email);
		$password=urldecode($password);
		

		 $user=$this->db->where('Email',$email)->where('Password',$password)->get('tbl_user')->result_array();


		 if($user){

			if($user[0]['Type']=='Admin'){

				echo 'YesA';
			}else if($user[0]['Type']=='Company'){

				echo 'YesB';
			}
			else if($user[0]['Type']=='User'){

				echo 'YesC';
			}

			$s_data['Name']=$user[0]['Name'];
			$s_data['ID']=$user[0]['ID'];
			$s_data['Email']=$user[0]['Email'];
			$s_data['Type']=$user[0]['Type'];

			$this->session->set_userdata($s_data);  


		 }else{

			echo 'No';
		 }
				 
		 

	}

}
