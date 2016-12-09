<?php 

class Display extends CI_Controller{

	public function __construct(){

		parent::__construct();

	}

	public function display_category(){
		
		$query = $this->db->get('categorytbl');
		$result = $query->result();
		$this->output->set_output(json_encode($result));
	}

	public function display_filter_category(){
		
		$query = $this->db->get('categorytbl');
		$result = $query->result();
		$this->output->set_output(json_encode($result));
	}

	public function display_level1(){
		
		$query = $this->db->get_where('topsales',['level' => 1]);
		$result = $query->result();

		$this->output->set_output(json_encode($result));
	}

	public function display_level1_data($data){
		
		$query = $this->db->get_where('product',['prodID' => $data]);
		$result = $query->result();
		
		//$this->output->set_output(json_encode($result));
	}

	public function view_product(){
		$id = 'prod-0001';
		$query = $this->db->query('SELECT * FROM product WHERE prodID="'.$id.'"');
		$result = $query->result();
	}

}

?>