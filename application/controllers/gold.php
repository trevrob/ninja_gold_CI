<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gold extends CI_Controller {

	public $total_gold = 0;
 	public $activity = array();

	public function index()
	{
		$this->load->view('gold_view');
	}

 	public function __construct()
 	{
 		parent::__construct();
 		$this->total_gold = $this->session->userdata('total_gold');
 		if($this->total_gold === false)
 		$this->total_gold = 0;
 		$this->activity = $this->session->userdata('activity');
 	}

 	public function farm()
 	{
		$click = rand(10,20);
 		$this->total_gold += $click;
 		
 		$this->session->set_userdata('total_gold', $this->total_gold);
 		$this->activity[] = "You entered a farm and earned ". $click. " pieces of gold (". date('F-d-Y H:i:s'). ")";
 		$this->session->set_userdata('activity', $this->activity);
		
		redirect(base_url());
 	}
 	 public function cave()
 	{
		$click = rand(5,10);
 		$this->total_gold += $click;
 		
 		$this->session->set_userdata('total_gold', $this->total_gold);
 		$this->activity[] = "You entered a cave and earned ". $click. " pieces of gold (". date('F-d-Y H:i:s'). ")";
 		$this->session->set_userdata('activity', $this->activity);
		redirect(base_url());
 	}
 	 public function house()
 	{
 		$click = rand(2,5);
 		$this->total_gold += $click;
 		
 		$this->session->set_userdata('total_gold', $this->total_gold);
 		$this->activity[] = "You entered a house and earned ". $click. " pieces of gold (". date('F-d-Y H:i:s'). ")";
 		$this->session->set_userdata('activity', $this->activity);
		redirect(base_url());
	}
 	 public function casino()
 	{
 		$click = rand(-50,50);
 		$this->total_gold += $click;
 		
 		$this->session->set_userdata('total_gold', $this->total_gold);
 		$this->activity[] = "You entered a casino and earned ". $click. " pieces of gold (". date('F-d-Y H:i:s'). ")";
 		$this->session->set_userdata('activity', $this->activity);
		redirect(base_url());
	}

	public function reset()
	{
 		$this->total_gold = 0;
 		
		$this->session->set_userdata('total_gold', $this->total_gold);
		// $this->session->unset_userdata('activity', $this->activity);
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */