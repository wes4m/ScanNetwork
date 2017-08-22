<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {

  public $data = array();

  public function __construct()
  {
    parent::__construct();
      $this->load->helper('download');

  }
    public function index($error = '')
  {

  }

  public function name($name)
  {
     $filepath =  "application/files/".$name;
     $data = file_get_contents($filepath);
     force_download($name, $data);
  }

}


/* End of file download.php */
/* Location: ./application/controllers/download.php */
