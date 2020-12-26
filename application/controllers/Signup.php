<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	
	public function index()
	{


		$this->form_validation->set_rules('user_name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[tbl_user.Email]|check_is_popular');
		$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|regex_match[/^[+][0-9]*$/]|exact_length[14]');
		$this->form_validation->set_message('check_is_popular','Only gmail, Yahoo, Hotmail is Accepted');
		$this->form_validation->set_rules('user_password', 'Password', 'required');
		$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[user_password]');       
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		
		
		
		
		function check_is_popular($val){

			$new=explode ("@", $val);

			if($new['1']=='gmail.com'||$new['1']=='yahoo.com'||$new['1']=='hotmail.com'){

				return true;
			}else{

				return false;
			}

		}
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('include/header3');
			$this->load->view('signup');
			$this->load->view('include/footer');

		}else{

			$idata['Name']=$this->input->post('user_name');
			$idata['Email']=$this->input->post('user_email');
			$idata['Mobile']=$this->input->post('user_mobile');
			$idata['Password']=$this->input->post('user_password');
			$idata['Type']=$this->input->post('type');

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Signed Up Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('login');

		}

		 

	}
}

