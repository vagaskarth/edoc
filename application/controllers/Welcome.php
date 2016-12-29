<?php
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

	public function __construct(){
		parent::__construct();
		$this->load->model('Physician_model');
		 // $this->load->model('user','',TRUE);
		 $this->load->library('session');
	}
	public function index()
	{
		

		$this->load->library('form_validation');
 
		   $this->form_validation->set_rules('username', 'Username', 'trim|required');
		   $this->form_validation->set_rules('password', 'Password', 'trim|required');
		   if(!$this->form_validation->run())
		   {
			 $errors = array_values($this->form_validation->error_array());
			 
		   }
		   else
		   {
				$this->load->model('User_model');
				$user = $this->User_model->login($this->input->post('username'), $this->input->post('password'));
				if($user){
				
					$this->session->set_userdata($user);
					redirect('Welcome/main_menu');
				}
				$errors = ['Invalid username or password'];
		   }

		    $this->load->view('welcome_message', compact('errors'));
		 
	}

		function sign_up()
	{	
		$this->load->view('sign_up');
	}

		function main_menu()
	{	
		$role = $this->session->userdata('user_type');
		if($role === 'patient'){
			$page = 'patient_menu';
		}elseif ($role === 'physician'){
			$page = 'main_menu';
		}
		$this->show_page($page);
		$this->load->view($page);
		
		
	}

		function admin_manage()
	{	
		$this->show_page('admin_manage');
		$this->load->view('admin_manage');
	}


		function search_patient()
	{	
		$patients = [];
		$patient_search= $this->input->get('q');
		$this->load->model('patient_model', 'patient');

		if(strlen(trim($patient_search))){
			$physician_id = $this->session->userdata("id");

			$patients = $this->patient->all($patient_search, $physician_id);
		}
		// die($this->db->last_query());

		$this->show_page('Search_Patient/search_patient', compact('patients'));
		$this->load->view('Search_Patient/search_patient', compact('patients'));
	}

		function search_physician()
	{	
		$this->show_page('search_physician');
		$this->load->view('search_physician');
	}

		function manage_clinic()
	{
		$this->show_page('Physician_Menu/manage_clinic');	
		$this->load->view('Physician_Menu/manage_clinic');
	}

		function add_clinic()
	{
		$this->show_page('Manage_Clinic/add_clinic');	
		$this->load->view('Manage_Clinic/add_clinic');
	}

		function clinic_list()
	{
		$this->show_page('Manage_Clinic/clinic_list');	
		$this->load->view('Manage_Clinic/clinic_list');
	}

		function add_new_patient()
	{
		$this->show_page('Add_Patient/add_new_patient');	
		$this->load->view('Add_Patient/add_new_patient');
	}	

		function add_new_patient_page2()
	{
		$this->session->set_userdata('patient_data', $this->input->post());
		// print_r( $this->input->post());
		// return;
		$this->show_page('add_new_patient_page2');	
		$this->load->view('add_new_patient_page2');
	}

	function confirm_form()
	{
		print_r($this->input->post('medical_hist'));
		// $patient_form = ($this->session->userdata('patient_data') + $this->input->post());
		// $this->session->set_userdata('patient_data', $patient_form);

		// $this->load->view('confirm-patient-data', [
		// 	'data' => $patient_form
		// ]);

		// echo "<table>";
		// foreach($patient_form  As $name => $val){
		// 	echo "<tr><td>{$name}</td><td>{$val}</td></tr>";
		// }
		// echo "</table>";
	}
		function profile()
	{
		
		$user_type = $this->session->userdata("user_type");
		if ($user_type == "physician") {

			$id = $this->session->userdata("physician_id");

			$this->load->model('Physician_model', 'physician');

			$physician = $this->physician->fetch($id);

			$this->show_page('physician_profile');	
		 	$this->load->view('physician_profile', compact('physician'));

		}
		else if($user_type == "patient"){
			$id = $this->session->userdata("patient_id");

			$this->load->model('patient_model', 'patient');

			$patient = $this->patient->fetch($id);
			
			// die(json_encode($patient));

			$this->show_page('patient_profile');	
		     $this->load->view('patient_profile', compact('patient'));


		}

		
	}

		function view_patient_profile()
	{
		$id = $this->input->get('id');
		$this->load->model('patient_model', 'patient');

		$patient = $this->patient->fetch($id);

		$this->show_page('Patient_Profile/patient_profile');	
		$this->load->view('Patient_Profile/patient_profile', compact('patient'));
	}

		function add_appointment()
	{
		$this->show_page('Schedule_and_Appointments/add_appointment');	
		$this->load->view('Schedule_and_Appointments/add_appointment');
	}

		function manage_appointments()
	{
		$this->show_page('Schedule_and_Appointments/manage_appointments');	
		$this->load->view('Schedule_and_Appointments/manage_appointments');
	}

		function schedule_n_appointments()
	{
		$this->show_page('Physician_Menu/schedule_n_appointments');	
		$this->load->view('Physician_Menu/schedule_n_appointments');
	}

		function contact()
	{
		$this->show_page('Physician_Menu/contact');	
		$this->load->view('Physician_Menu/contact');
	}


		function composemsg()
	{
		$this->show_page('Contact/composemsg');	
		$this->load->view('Contact/composemsg');
	}

		function sent()
	{
		$this->show_page('Contact/sent');	
		$this->load->view('Contact/sent');
	}

		function trash()
	{
		$this->show_page('Contact/trash');	
		$this->load->view('Contact/trash');
	}

		function inbox()
	{
		$this->show_page('Contact/inbox');	
		$this->load->view('Contact/inbox');

	}

		function personal_schedule()
	{	
		$this->show_page('Schedule_and_Appointments/personal_schedule');	
		$this->load->view('Schedule_and_Appointments/personal_schedule');
	}


		function daily_appointments()
	{	
		$this->show_page('Schedule_and_Appointments/daily_appointments');	
		$this->load->view('Schedule_and_Appointments/daily_appointments');
	}

		function patient_profile()
	{
		$this->show_page('Patient_Profile/patient_profile');	
		$this->load->view('Patient_Profile/patient_profile');
	}

		function notes()
	{	
		$this->show_page('Patient_Profile/notes');
		$this->load->view('Patient_Profile/notes');
	}

		function eprescription()
	{	
		$this->show_page('Patient_Profile/eprescription');
		$this->load->view('Patient_Profile/eprescription');
	}

		function medical_record()
	{	
		$this->show_page('Patient_Profile/medical_record');
		$this->load->view('Patient_Profile/medical_record');
	}

		function recent_visits()
	{	
		$this->show_page('Patient_Profile/recent_visits');
		$this->load->view('Patient_Profile/recent_visits');
	}

		function physician_profile()
	{
		$this->show_page('physician_profile');	
		$this->load->view('physician_profile');
	}

		function edit_password()
	{
		$this->show_page('edit_password');	
		$this->load->view('edit_password');
	}

		function messaging()
	{
		$this->show_page('Contact/messaging');	
		$this->load->view('xattr_get(filename, name)messaging');
	}

		function show_page()
	{
		$this->load->view('default_page');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

	function save_patient(){
	
	$this->load->library('form_validation');

	 $this->form_validation->set_rules('fname', 'First name', 'trim|required');
	 $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
	 $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
	 $this->form_validation->set_rules('address', 'Address', 'trim|required');
	 $this->form_validation->set_rules('contact', 'Contact ', 'trim|required');
	 $this->form_validation->set_rules('height', 'Height ', 'trim|required|numeric');
	 $this->form_validation->set_rules('weight', 'Weight ', 'trim|required|numeric');
	 $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
	 $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
	 $this->form_validation->set_rules('confirm', 'Password Confirmation', 'required|matches[password]');

	 if($this->form_validation->run()){
			$this->load->model('patient_model');
	 		$this->load->model('User_model');


	 		$account = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'user_type' => 'patient',
			);

	 		$user_id = $this->User_model->create($account);
		
			$patient = array(
				// 'TABLE_COLUMN' => $this->input->post('FORM_NAME')
				'fname' => $this->input->post('fname'),
				'mname' => $this->input->post('mname'),
				'lname' => $this->input->post('lname'),
				'gender' => $this->input->post('gender'),
				'bloodtype' => $this->input->post('btype'),
				'status' => $this->input->post('cstatus'),
				'nationality' => $this->input->post('nationality'),	
				'religion' => $this->input->post('religion'),		
				'height' => $this->input->post('height'),
				'weight' => $this->input->post('weight'),			
				'address' => $this->input->post('address'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('contact'),
				//'bday' => $this->input->post('bday'),
				'occupation' => $this->input->post('occupation'),
				'e_name' => $this->input->post('Employername'),
				'e_address' => $this->input->post('employeraddress'),
				'e_num' => $this->input->post('employernumber'),
				'emergency_name' => $this->input->post('Emergencyname'),
					'relationship' => $this->input->post('relationship'),
				'emergency_num' => $this->input->post('Emergencynum'),
				// 'hmo' => $this->input->post('HMO')
				'patient_id' => $this->session->userdata("id"),
				'user_id' => $user_id 


			);

			$this->patient_model->create($patient);
			redirect('welcome/add_new_patient_page2');

		}else{
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('validation_errors', $errors);
			redirect('welcome/add_new_patient');
		}

	 
		//die(var_dump($tempData));

	}

	function new_clinic() {

		$this->load->library('form_validation');

		$this->form_validation->set_rules('clinic_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('clinic_add', 'Address', 'trim|required');
		$this->form_validation->set_rules('clinic_desc', 'Description', 'trim|required');
		$this->form_validation->set_rules('clinic_email', 'Email Address ', 'trim|required');
		$this->form_validation->set_rules('clinic_phone', 'Phone', 'trim|required|numeric');
		$this->form_validation->set_rules('clinic_mobile', 'Mobile', 'trim|required|numeric');

		if($this->form_validation->run()){
			$this->load->model('clinic_model');
	 		$this->load->model('User_model');

	 	$clinic = array(
				// 'TABLE_COLUMN' => $this->input->post('FORM_NAME')
				'clinic_name' => $this->input->post('clinic_name'),
				'clinic_add' => $this->input->post('clinic_add'),
				'clinic_desc' => $this->input->post('clinic_desc'),
				'clinic_img' => $this->input->post('clinic_img'),
				'clinic_contactpers' => $this->input->post('clinic_contactpers'),
				'clinic_email' => $this->input->post('clinic_email'),
				'clinic_phone' => $this->input->post('clinic_phone'),
				'clinic_mobile' => $this->input->post('clinic_mobile'),
				// 'hmo' => $this->input->post('HMO')

			);

			$this->clinic_model->create($clinic);

		}else{
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('validation_errors', $errors);
			redirect('welcome/add_clinic');
		}

	}

	function New_Physician(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'required|matches[password]');

		if($this->form_validation->run()){
			$this->load->model('Physician_model');
			$this->load->model('User_model');
		
			

			$account = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'user_type' => 'physician',
			);

			$user_id = $this->User_model->create($account);

			$physician = array(
				// 'TABLE_COLUMN' => $this->input->post('FORM_NAME')
				'Fname' => $this->input->post('fname'),
				'Mname' => $this->input->post('mname'),
				'Lname' => $this->input->post('lname'),
				'Bday' => $this->input->post('dob'),
				'Gender' => $this->input->post('gender'),
				'contact' => $this->input->post('contact'),	
				'Address' => $this->input->post('address'),		
				'Specialization' => $this->input->post('Specialization'),
				'License_num' => $this->input->post('License_num'),						
				'Email' => $this->input->post('email'),
				'user_id' => $user_id 
			);

			$this->Physician_model->create($physician);
			
			//die(var_dump($tempData));
		}else{
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('validation_errors', $errors);
			redirect('welcome/sign_up');
		}
	
	 

	}
	 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
 
   //query the database
   $result = $this->user->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->P_ID,
         'username' => $row->Username
       );
      // $this->session->set_userdata('main_menu', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
	

}

