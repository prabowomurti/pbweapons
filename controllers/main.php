<?php

class Main extends Controller {

	function Main()
	{
		parent::Controller();
		$this->load->helper('url');
		$this->load->database();
	}
	
	function index()
	{
		$this->load->library('table');
		$this->load->model('Weapon_model');
		$data['weapons'] = $this->Weapon_model->get_all_weapons();

		$this->load->view('main_view', $data);
	}

	function image() {
		$this->load->model('weapon_model');
		$weapon_id = (int) substr($this->uri->segment(3), 0, -4);//get the number of image, instead of including the .jpg part
//		$image = $this->weapon_model->get_image($weapon_id);
//		if (empty($image))
//			die('no image');
		header("Content-type: image/jpeg");
		echo $this->weapon_model->get_image($weapon_id);
		
	}

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
