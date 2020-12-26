<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
        

       
	   
			if(($this->session->userdata('ID')) && ($this->session->userdata('Type')=="Company")){
                  
			}
				
			else{
				$message='<div class="alert alert-info">You need to Log In as Company first</div>';
				$this->session->set_flashdata('message',$message);
				redirect('login');
			}
		}
	
	

		public function index()
		
		{
			$data['header'] =$this->db->where('Type','Company')->where('ID',$this->session->userdata('ID'))->get('tbl_user')->result_array();
			$this->load->view('company/include/header',$data);
			$this->load->view('company/home');
			$this->load->view('company/include/footer');
		}
		
		
		
		public function add_details()
		{


			$this->form_validation->set_rules('company_details', 'Service_Details', 'required');
			$this->form_validation->set_rules('event_type', 'Event_Type', 'required');
			$this->form_validation->set_rules('service_charge', 'Service_Charge', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['header'] =$this->db->where('Type','Company')->where('ID',$this->session->userdata('ID'))->get('tbl_user')->result_array();
			$this->load->view('company/include/header',$data);
			$this->load->view('company/add_details');
			$this->load->view('company/include/footer');

		}else{
			
			
			
			if(!empty($_FILES) && ($_FILES['Service_Image']['name'])){


					$config['upload_path'] = 'images/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('Service_Image')) {
						$this->session->set_flashdata('message', $this->upload->display_errors());

						redirect('company/add_company');
					} 
					else {
						$avatar = $this->upload->data();
						$Service_Image = $avatar['file_name'];

						$idata['Service_Image']=$Service_Image;
					}
				
				

				}
				
				else{
			
					$message='<div class="alert alert-danger">Please Add Image first</div>';

					$this->session->set_flashdata('message',$message);

					redirect('company/add_details');

				}

			
			
			

				$idata['Company_Name']=$this->session->userdata('Name');
				$idata['Service_Details']=$this->input->post('company_details');
				$idata['Event_Type']=$this->input->post('event_type');
				$idata['Service_Charge']=$this->input->post('service_charge');
				$idata['User_id']=$this->session->userdata('ID');

				$this->db->insert('tbl_service',$idata);

				$message='<div class="alert alert-success">New Service Added Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('company/add_details');

			}

		 

		}
	
	
	
	public function view_details()
		{

			$data['header'] =$this->db->where('Type','Company')->where('ID',$this->session->userdata('ID'))->get('tbl_user')->result_array();
			$edata['users']=$this->db->where('User_id',$this->session->userdata('ID'))->get('tbl_service')->result_array();

			$this->load->view('company/include/header',$data);
			$this->load->view('company/view_details',$edata);
			$this->load->view('company/include/footer');

		}


		public function edit_service($id="")
		{

			$this->form_validation->set_rules('event_type', 'Event_Type', 'required');
			$this->form_validation->set_rules('company_details', 'Service_Details', 'required');
			$this->form_validation->set_rules('service_charge', 'Service_Charge', 'required');
			

			if ($this->form_validation->run() == FALSE)
			{

				$data['header'] =$this->db->where('Type','Company')->where('ID',$this->session->userdata('ID'))->get('tbl_user')->result_array();
				$edata['user']=$this->db->where('ID',$id)->where('User_id',$this->session->userdata('ID'))->get('tbl_service')->result_array();
				$this->load->view('company/include/header',$data);
				$this->load->view('company/edit_service',$edata);
				$this->load->view('company/include/footer');

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

				$message='<div class="alert alert-success">Details Edited Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('company/view_details');

			}
		}


		public function delete_service($id)
		{

			$this->db->where('ID',$id)->where('User_id',$this->session->userdata('ID'))->delete('tbl_service');
 			
            $message='<div class="alert alert-danger">Service Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);
 			redirect('company/view_details');

		}


		public function view_booking()
		{
			
			$data['header'] =$this->db->where('Type','Company')->where('ID',$this->session->userdata('ID'))->get('tbl_user')->result_array();

			$edata['booking']=$this->db->select('*')->from('tbl_booking,tbl_user,tbl_service')->where('tbl_booking.User_ID=tbl_user.ID')->where('tbl_booking.Service_id=tbl_service.ID')->where('Company_id',$this->session->userdata('ID'))->get()->result_array();

			$this->load->view('company/include/header',$data);
			$this->load->view('company/view_booking',$edata);
			$this->load->view('company/include/footer');

		}


		public function delete_booking($id)
		{

			$this->db->where('Booking_ID',$id)->where('Company_id',$this->session->userdata('ID'))->delete('tbl_booking');
 			
			$message='<div class="alert alert-danger">Booking Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);
 			redirect('company/view_booking');

		}

		
		

}
