<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
        
		}



		public function index()
		{
			
			$this->load->view('include/header1');
			$this->load->view('home');
			$this->load->view('include/footer');	 

		}
	
		public function events($id='')
		{
		   $data['events'] =$this->db->where('ID',$id)->get('tbl_service')->result_array();
			
			$this->form_validation->set_rules('Booking_Date','Booking Date','required');

				if($this->form_validation->run()== FALSE){
				
				 
				$this->load->view('include/header2');
				$this->load->view('events',$data);
				$this->load->view('include/footer');


				
				}
				else{

				$available =$this->db->where('Booking_Date',$this->input->post('Booking_Date'))->where('Service_id',$id)->get('tbl_booking')->num_rows();

				if($available>3){
				
				$message='<div class="alert alert-danger">Sorry Service Not Available</div>';

				$this->session->set_flashdata('message',$message);

				redirect('welcome/events/'.$id);

				}


				$is_user =$this->db->where('Booking_Date',$this->input->post('Booking_Date'))->where('User_id',$this->session->userdata('ID'))->get('tbl_booking')->num_rows();

				if($is_user>0){
				
				$message='<div class="alert alert-danger">Sorry You have already booked this Event</div>';

				$this->session->set_flashdata('message',$message);

				redirect('welcome/events/'.$id);

				}

				$idata['User_id']=$this->session->userdata('ID');
				$idata['Company_id']=$this->input->post('Company_id');
				$idata['Booking_Date']=$this->input->post('Booking_Date');
				$idata['Service_id']=$this->input->post('Service_id');
			 

				$this->db->insert('tbl_booking',$idata);

				$message='<div class="alert alert-success">Booking Done Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('welcome/events/'.$id);
				
				}

		}
	
		public function about()
		{
	
			$this->load->view('include/header2');
			$this->load->view('about');
			$this->load->view('include/footer');
	
		}
		
		public function gallery()
		{
           
		   
		   $data['gallery'] =$this->db->get('tbl_service')->result_array();
			$this->load->view('include/header2');
			$this->load->view('gallery',$data);
			$this->load->view('include/footer');

		}
		
		
		public function contact()
		{

			
			$this->load->view('include/header2');
			$this->load->view('contact');
			$this->load->view('include/footer');
	

		}
		
		
		
		public function Companies()
		{

				$this->form_validation->set_rules('events','Event_Type','required');

				if($this->form_validation->run()== FALSE){
				
				$data['companies']='';
				
				$this->load->view('include/header2');
				$this->load->view('companies',$data);
				$this->load->view('include/footer');
				
				}
				else{
					
				$data['companies'] =$this->db->where('Event_Type',$this->input->post('events'))->get('tbl_service')->result_array();

			
				$this->load->view('include/header2');
				$this->load->view('companies',$data);
				$this->load->view('include/footer');
				
				}
	

		}



		public function Bookings()
		{
		  	 $data['bookings'] =$this->db->select('*')->from('tbl_booking,tbl_service,tbl_user')->where('tbl_booking.Service_id=tbl_service.ID')->where('tbl_booking.Company_id=tbl_user.ID')->where('tbl_booking.User_id',$this->session->userdata('ID'))->get()->result_array();
			
			 
				$this->load->view('include/header2');
				$this->load->view('bookings',$data);
				$this->load->view('include/footer');


			 

		}
		
		
		
		

}