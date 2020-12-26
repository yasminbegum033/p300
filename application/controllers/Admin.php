<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
        

       
	   
			if(($this->session->userdata('ID')) && ($this->session->userdata('Type')=="Admin")){
                  
			}
				
			else{
				$message='<div class="alert alert-info">You need to Log In as Admin first</div>';
				$this->session->set_flashdata('message',$message);
				redirect('login');
			}
		}
	
	

		public function index()
		{
			$this->load->view('admin/include/header');
			$this->load->view('admin/home');
			$this->load->view('admin/include/footer');
		}
	
	
	
		public function view_service()
		{

			$data['users']=$this->db->get('tbl_service')->result_array();

			$this->load->view('admin/include/header');
			$this->load->view('admin/view_service',$data);
			$this->load->view('admin/include/footer');

		}
		
		
		public function delete_service($id)
		{

			$this->db->where('ID',$id)->delete('tbl_service');
 			$message='<div class="alert alert-danger">Service Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_service');

		}
		
		
		public function view_admin()
		{

			$data['users']=$this->db->where('Type','Admin')->get('tbl_user')->result_array();

			$this->load->view('admin/include/header');
			$this->load->view('admin/view_admin',$data);
			$this->load->view('admin/include/footer');

		}

	
		public function view_user()
		{

			$data['users']=$this->db->where('Type','User')->get('tbl_user')->result_array();

			$this->load->view('admin/include/header');
			$this->load->view('admin/view_user',$data);
			$this->load->view('admin/include/footer');

		}
		
		
		
		public function view_company()
		{

			$data['users']=$this->db->where('Type','Company')->get('tbl_user')->result_array();

			$this->load->view('admin/include/header');
			$this->load->view('admin/view_company',$data);
			$this->load->view('admin/include/footer');

		}
		
	
		public function delete_user($id)
		{

			$this->db->where('ID',$id)->delete('tbl_user');
 			
			$message='<div class="alert alert-danger">User Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);
 			redirect('admin/view_user');

		}
		
		
		public function delete_company($id)
		{

			$this->db->where('ID',$id)->delete('tbl_user');
 			
			$message='<div class="alert alert-danger">Company Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);
 			redirect('admin/view_company');

		}
		
		public function delete_admin($id)
		{

			$this->db->where('ID',$id)->delete('tbl_user');
 			
			$message='<div class="alert alert-danger">Admin Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);
 			redirect('admin/view_admin');

		}
	
	
	
		public function edit_user($id="")
		{


			$this->form_validation->set_rules('user_name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
			$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|check_is_popular');
			
			$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|regex_match[/^[+][0-9]*$/]|exact_length[14]');
			$this->form_validation->set_rules('user_type', 'Type', 'required');
			
			

			$this->form_validation->set_message('check_is_popular','Only gmail, Yahoo, Hotmail is Accepted');
	

			function check_is_popular($val){

				$new=explode ("@", $val);

				if($new['1']=='gmail.com'||$new['1']=='yahoo.com'||$new['1']=='hotmail.com'){

					return true;
				}
				
				else{

					return false;
				}

			}

			if ($this->form_validation->run() == FALSE)
			{


				$edata['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();
				$this->load->view('admin/include/header');
				$this->load->view('admin/edit_user',$edata);
				$this->load->view('admin/include/footer');

			}
			
			else{
				
				
				

				$idata['Name']=$this->input->post('user_name');
				$idata['Email']=$this->input->post('user_email');
				
				$idata['Mobile']=$this->input->post('user_mobile');
				$idata['Type']=$this->input->post('user_type');

				$this->db->where('id',$id)->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('admin/view_user');

			}
		}
		
		
		
		
		
		public function edit_company($id="")
		{


			$this->form_validation->set_rules('user_name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
			$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|check_is_popular');
			
			$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|regex_match[/^[+][0-9]*$/]|exact_length[14]');
			$this->form_validation->set_rules('user_type', 'Type', 'required');
			
			

			$this->form_validation->set_message('check_is_popular','Only gmail, Yahoo, Hotmail is Accepted');
	

			function check_is_popular($val){

				$new=explode ("@", $val);

				if($new['1']=='gmail.com'||$new['1']=='yahoo.com'||$new['1']=='hotmail.com'){

					return true;
				}
				
				else{

					return false;
				}

			}

			if ($this->form_validation->run() == FALSE)
			{


				$edata['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();
				$this->load->view('admin/include/header');
				$this->load->view('admin/edit_company',$edata);
				$this->load->view('admin/include/footer');

			}
			
			else{
				
				
				

				$idata['Name']=$this->input->post('user_name');
				$idata['Email']=$this->input->post('user_email');
				
				$idata['Mobile']=$this->input->post('user_mobile');
				$idata['Type']=$this->input->post('user_type');

				$this->db->where('id',$id)->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('admin/view_company');

			}
		}
		
		
		public function edit_admin($id="")
		{


			$this->form_validation->set_rules('user_name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
			$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|check_is_popular');
			
			$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|regex_match[/^[+][0-9]*$/]|exact_length[14]');
			$this->form_validation->set_rules('user_type', 'Type', 'required');
			
			

			$this->form_validation->set_message('check_is_popular','Only gmail, Yahoo, Hotmail is Accepted');
	

			function check_is_popular($val){

				$new=explode ("@", $val);

				if($new['1']=='gmail.com'||$new['1']=='yahoo.com'||$new['1']=='hotmail.com'){

					return true;
				}
				
				else{

					return false;
				}

			}

			if ($this->form_validation->run() == FALSE)
			{


				$edata['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();
				$this->load->view('admin/include/header');
				$this->load->view('admin/edit_admin',$edata);
				$this->load->view('admin/include/footer');

			}
			
			else{
				
				
				

				$idata['Name']=$this->input->post('user_name');
				$idata['Email']=$this->input->post('user_email');
				
				$idata['Mobile']=$this->input->post('user_mobile');
				$idata['Type']=$this->input->post('user_type');

				$this->db->where('id',$id)->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('admin/view_admin');

			}
		}
		
		
		
		
		
		public function edit_service($id="")
		{

			
			$this->form_validation->set_rules('event_type', 'Event_Type', 'required');
			$this->form_validation->set_rules('company_details', 'Service_Details', 'required');
			$this->form_validation->set_rules('service_charge', 'Service_Charge', 'required');
			

			if ($this->form_validation->run() == FALSE)
			{


				$edata['user']=$this->db->where('ID',$id)->get('tbl_service')->result_array();
				$this->load->view('admin/include/header');
				$this->load->view('admin/edit_service',$edata);
				$this->load->view('admin/include/footer');

			}
			
			else{
				
				
				
				
				
				if(!empty($_FILES) && ($_FILES['Service_Image']['name'])){


					$config['upload_path'] = 'images/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('Service_Image')) {
						$this->session->set_flashdata('message', $this->upload->display_errors());

						redirect('admin/view_company');
					} 
					else {
						$avatar = $this->upload->data();
						$Service_Image = $avatar['file_name'];

						$idata['Service_Image']=$Service_Image;
					}
				
				

				}
				

				
				
				
				
				

				
				$idata['Event_Type']=$this->input->post('event_type');
				$idata['Service_Charge']=$this->input->post('service_charge');
				$idata['Service_Details']=$this->input->post('company_details');
			

				$this->db->where('ID',$id)->update('tbl_service',$idata);

				$message='<div class="alert alert-success">Service Edited Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('admin/view_service');

			}
		}
		
		
		
		public function view_booking()
		{

			$data['booking']=$this->db->select('*')->from('tbl_booking,tbl_user,tbl_service')->where('tbl_booking.User_ID=tbl_user.ID')->where('tbl_booking.Service_id=tbl_service.ID')->get()->result_array();

			$this->load->view('admin/include/header');
			$this->load->view('admin/view_booking',$data);
			$this->load->view('admin/include/footer');

		}


		public function delete_booking($id)
		{

			$this->db->where('Booking_ID',$id)->delete('tbl_booking');
 			$message='<div class="alert alert-danger">Booking Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_booking');

		}
		
		
		

}
