<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('crud');
		$this->load->library('blog');
		$this->lang->load('information', 'english');
	}
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['page'] = 'home';
		$data['title'] = 'The Creative wallls';
		$data['description'] = 'The Creative wallls offers the best online real estate management courses & executive programs';
		$this->load->view('website/index', $data);
		$this->lang->load('information', 'english');
	}

	public function blog_list(){
		$data['page'] = 'blog_list';
		$data['title'] = 'Blogs';
		$data['description'] = 'Explore our comprehensive Real Estate Broker Training Program, designed to elevate your skills & career prospects. Unlock the key to success in the dynamic world of real estate.
		';
		$this->load->view('website/index', $data);
	}
	public function blog()
	{
		$blogID = $_GET['id'];
		$blogData = $this->blog->getBlogFromId($blogID);

		$data['page'] = 'blog';
		$data['title'] = $blogData[0]['title'];
		
		$data['description'] = 'SIILC offers the best online real estate management courses & executive programs';
		$this->load->view('website/index', $data);
	}

	public function about_us()
	{
		$data['page'] = 'about_us';
		$data['title'] = 'About us';
		
		$data['description'] = 'The Creative wallls offers the best online real estate management courses & executive programs';
		$this->load->view('website/index', $data);
	}

	public function terms_and_conditions()
	{
		$data['page'] = 'terms_and_conditions';
		$data['title'] = 'Terms And Conditions';
		
		$data['description'] = 'The Creative walls';
		$this->load->view('website/index', $data);
	}

	public function why_creativewalls(){
		$data['page'] = 'why_creativewalls';
		$data['title'] = 'Why Creative Walls';
		
		$data['description'] = 'The Creative walls';
		$this->load->view('website/index', $data);
	}

	public function gallery()
	{
		$data['page'] = 'gallery';
		$data['title'] = 'Gallery';
		
		$data['description'] = 'SIILC offers the best online real estate management courses & executive programs';
		$this->load->view('website/index', $data);
	}

	public function contact()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'contact';
		$data['title'] = 'Contact';
		
		$data['description'] = 'SIILC offers the best online real estate management courses & executive programs';
		$this->load->view('website/index', $data);
	}
	
	public function recent_project_completed()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'recent_project_completed';
		$data['title'] = 'Recent Project Completed';
		
		$data['description'] = 'recent_project_completed';
		$this->load->view('website/index', $data);
	}

	public function site_services()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'site_services';
		$data['title'] = 'Site Services';
		
		$data['description'] = 'site_services';
		$this->load->view('website/index', $data);
	}

	public function dc_signature()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'dc_signature';
		$data['title'] = 'DC Signature';
		
		$data['description'] = 'dc_signature';
		$this->load->view('website/index', $data);
	}

	public function interior_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'interior_design';
		$data['title'] = 'Interior Design';
		
		$data['description'] = 'interior_design';
		$this->load->view('website/index', $data);
	}

	public function modular_kitchen_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'modular_kitchen_design';
		$data['title'] = 'Modular Kitchen Design';
		
		$data['description'] = 'modular_kitchen_design';
		$this->load->view('website/index', $data);
	}
	public function custom_modular_kitchens()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'custom_modular_kitchens';
		$data['title'] = 'Custome Modular Kitchen Design';
		
		$data['description'] = 'custom_modular_kitchens';
		$this->load->view('website/index', $data);
	}

	public function wardrobe_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'wardrobe_design';
		$data['title'] = 'Wardrobe Design';
		
		$data['description'] = 'wardrobe_design';
		$this->load->view('website/index', $data);
	}

	public function bedroom_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'bedroom_design';
		$data['title'] = 'Bedroom Design';
		
		$data['description'] = 'bedroom_design';
		$this->load->view('website/index', $data);
	}

	public function livingroom_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'livingroom_design';
		$data['title'] = 'Livingroom Design';
		
		$data['description'] = 'livingroom_design';
		$this->load->view('website/index', $data);
	}

	public function space_saving_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'space_saving_design';
		$data['title'] = 'Space Saving Design';
		
		$data['description'] = 'space_saving_design';
		$this->load->view('website/index', $data);
	}

	public function home_office_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'home_office_design';
		$data['title'] = 'Home Office Design';
		
		$data['description'] = 'home_office_design';
		$this->load->view('website/index', $data);
	}

	public function onebhk_interior_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = '1bhk_interior_design';
		$data['title'] = '1BHK Interior Design';
		
		$data['description'] = '1bhk_interior_design';
		$this->load->view('website/index', $data);
	}
	public function twobhk_interior_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = '2bhk_interior_design';
		$data['title'] = '2BHK Interior Design';
		
		$data['description'] = '2bhk_interior_design';
		$this->load->view('website/index', $data);
	}
	public function threebhk_interior_design()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = '3bhk_interior_design';
		$data['title'] = '3BHK Interior Design';
		
		$data['description'] = '3bhk_interior_design';
		$this->load->view('website/index', $data);
	}

	public function guides()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'guides';
		$data['title'] = 'Guides';
		
		$data['description'] = 'guides';
		$this->load->view('website/index', $data);
	}

	public function difference_modular_kitchen_and_civil_kitchen()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'difference_modular_kitchen_and_civil_kitchen';
		$data['title'] = 'Difference between modular kitchen and civil kitchen';
		
		$data['description'] = 'Difference between modular kitchen and civil kitchen';
		$this->load->view('website/guides/5_things_to_know_before_designing_a_modular_kitchen/index', $data);
	}

	public function enquiry()
	{
		$this->load->library('contact');
		$saveArray = array(
			'fullname' => $this->input->post('your-name'),
			'propertyType' => $this->input->post('PropertyType'),
			'mobile' => $this->input->post('your-mobilenumber'),
			'city' 	=> $this->input->post('your-city')
		);
		// save into database
		$save  = $this->contact->saveEnquiry($saveArray);
		if ($save) {
			$this->session->set_flashdata('success', 'Thankyou ' . $this->input->post('name') . '. We receive your request. We will connect you soon.');
			// redirect('/');
			$data['page'] = 'thank_you';
			$data['title'] = 'Thanks';
			
		$data['description'] = 'The creative walls get back to u soon';
			$this->load->view('website/index', $data);
		} else {
			$this->session->set_flashdata('errro', 'Oops Something went wrong. Please Try after some time.');
			redirect('/');
		}
	}

	public function enquiry_form()
	{
		$this->load->library('contact');
		$saveArray = array(
			'name' => $this->input->post('fullname'),
			'mobile' => $this->input->post('mobilenumber'),
			'email' => $this->input->post('email'),
			'location' => $this->input->post('yourcity'),
			'message' => $this->input->post('message'),
		);
		// save into database
		$save  = $this->contact->saveQuery($saveArray);
		if ($save) {
			$this->session->set_flashdata('success', 'Thankyou ' . $this->input->post('fullname') . '. We receive your request. We will connect you soon.');
			// redirect('/');
			$data['page'] = 'thank_you';
			$data['title'] = 'Thanks';
		    $data['description'] = 'The creative walls get back to u soon';
			$this->load->view('website/index', $data);
		} else {
			$this->session->set_flashdata('errro', 'Oops Something went wrong. Please Try after some time.');
			redirect('/');
		}
	}

	public function checkout()
	{
		$this->load->library('contact');
		$this->load->library('session');
	
		// Get the course ID from the form submission
		$course_id = $this->input->post('course_id');
		$service_id = $this->input->post('service_id');
		
		// Extract UTM parameters from form data
		$utmSource = $this->input->post('utm_source') ? $this->input->post('utm_source') : 'SIILC';
		$utmCampaign = $this->input->post('utm_campaign') ? $this->input->post('utm_campaign') : 'SIILC'; 
		 
	
		// Set default values for hidden fields when the course ID is 4
		$defaultBatch = $course_id == 4 ? "Offline(Saturday 10:30am to 5:00pm)" : "";
		$defaultAddress1 = $course_id == 4 ? "Sakal Nagar" : "";
		$defaultAddress2 = $course_id == 4 ? "Aundh" : "";
		$defaultCity = $course_id == 4 ? "Pune" : "";
		$defaultPincode = $course_id == 4 ? "411007" : "";
	
		$saveArray = array(
			'first_name' => $this->input->post('f_name'),
			'last_name' => $this->input->post('l_name'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
			'address_line1' => $this->input->post('address1'),
			'address_line2' => $this->input->post('address2')?$this->input->post('address2'):"Dummy",
			'city' => $this->input->post('city')?$this->input->post('city'):"Pune",
			'state' => "MH",
			'pincode' => $this->input->post('pincode'),
			'utm_source' => $utmSource,
        	'utm_campaign' => $utmCampaign,
			// 'birth_date' => $this->input->post('dob'),
			// 'refcode' => $refPrefix . $this->input->post('refcode'),
			//'course_id' => $this->input->post('course_id'),
			// 'sub_course_id' => $this->input->post('sub_course_id'),
			// 'sub_course_name' => $this->input->post('sub_course_name'),
			// 'course_name' => $this->input->post('course_name'),
			// 'course_price' => $this->input->post('course_price'),
		);
	
		//save user data into the database
		$save  = $this->contact->saveUserData($saveArray);

		$saveBatchArray = array(
			'batch' => $this->input->post('batch')?$this->input->post('batch'):"Wednesday",
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
		);
		$this->session->set_userdata('batch', $this->input->post('batch'));

		$savebatch  = $this->contact->saveUserBatchDataBase($saveBatchArray);
		$urls = base_url();
		
		$data['surl'] = $urls . 'easebuzz_pay/success';
		$data['furl'] = $urls . 'easebuzz_pay/failed';
		$data['course_id'] = $this->input->post('course_id')? $this->input->post('course_id'): 1;
		$data['sub_course_id'] = $this->input->post('sub_course_id')? $this->input->post('sub_course_id'): 1;
		$data['sub_course_name'] = $this->input->post('sub_course_name');
		$data['course_name'] = $this->input->post('course_name');
		$data['course_price'] = $this->input->post('course_price')? $this->input->post('course_price'):5000;
		$data['f_name'] = $this->input->post('f_name');
		$data['l_name'] = $this->input->post('l_name');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['batch'] = $this->input->post('batch')?$this->input->post('batch'):"Wednesday";
		$data['address1'] = $this->input->post('address1');
		$data['address2'] = $this->input->post('address2')?$this->input->post('address2'):"Dummy";
		$data['city_name'] = $this->input->post('city')?$this->input->post('city'):"Pune";
		$data['pincode'] = $this->input->post('pincode')?$this->input->post('pincode'):"411046";
		$data['state_name'] = $this->input->post('state')?$this->input->post('state'):"Maharashtra";
		
        $data['refcode'] = $this->input->post('refcode');
        
		$data['course_date'] = $this->input->post('course_date');
		$data['batch_hours'] = $this->input->post('batch_hours');
		$data['batch_time'] = $this->input->post('batch_time');

		$data['service_id'] = $this->input->post('service_id')? $this->input->post('service_id'): 1;
		$data['service_name'] = $this->input->post('service_name');
		$data['service_price'] = $this->input->post('service_price');
		$data['service_date'] = $this->input->post('service_date');		

		$data['page'] = 'checkout';
		$data['title'] = 'Checkout';
		
		$data['description'] = 'SIILC offers the best online real estate management courses & executive programs';
		$this->load->view('website/index', $data);
	}

	public function thank_you()
	{
		$data['page'] = 'thank_you';
		$data['title'] = 'Thanks';
		
		$data['description'] = 'The Creative wallls offers the best online real estate management courses & executive programs';
		$this->load->view('website/index', $data);
	}


}