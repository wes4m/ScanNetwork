<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();

	}
		public function index($error = '')
	{

		 $this->load->view('scanner',$this->data);
	}

	public function results($hash)
	{
		
			$this->data['hash'] = $hash;
			$this->load->view('results',$this->data);

		
	}

	public function scanner()
	{

		 $this->load->view('home',$this->data);
	}


	public function register()
	{

		 $this->load->view('register',$this->data);
	}

	public function shit()
{

	$this->load->view('shit');
}


}


/* End of file main.php */
/* Location: ./application/controllers/main.php */
