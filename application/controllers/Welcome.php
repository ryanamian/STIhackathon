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
		public function index()
		{
			$this->load->model('display_model');
			
			$data['results_level1'] = $this->display_model->display_level(1);
			$data['results_level2'] = $this->display_model->display_level(2);
			$data['results_level3'] = $this->display_model->display_level(3);
			$data['product_category'] = $this->display_model->get_category();
			$check_login = $this->session->userdata('renee_salud');
			if(isset($check_login)){
				$this->load->model('user_model');
				$s = $this->session->userdata('renee_salud');
				$data['name'] =  $s['fname'] . ' ' . $s['lname'];
				$this->load->model('display_model');
				$data['product_category'] = $this->display_model->get_category();
				$data['color'] = $this->display_model->get_color();
				$this->load->view('layouts/header_login', $data);
			
			}else{
				$this->load->view('layouts/header', $data);
			}
			$this->load->model('display_model');
			$data['product_category'] = $this->display_model->get_category();
			$data['color'] = $this->display_model->get_color();
			$this->load->view('layouts/carousel_view');
			$this->load->view('layouts/filter_view', $data);
			$this->load->view('layouts/main',$data);
			$this->load->view('layouts/footer');
		}

		public function view(){

			
			$this->load->view('layouts/header');

			$this->load->view('layouts/footer');
		}

		public function register(){
			
		}
	}
