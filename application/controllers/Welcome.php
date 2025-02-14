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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['keywords'] = "MA Ma'arif NU Musi Rawas";
		$data['description'] = "MA Ma'arif NU Musi Rawas adalah salah satu satuan pendidikan dengan jenjang MA di Marga Sakti, Kecamatan Muara Kelingi, Kabupaten Musi rawas";
		$data['page'] = 'home';
		$data['record'] = $this->model_app->view_where('berita',array('status'=>1))->row();
		$data['prestasi'] = $this->model_app->view_where('prestasi',array('tingkat'=>1))->result_array();
		$data['prof'] = $this->model_app->view_where('prestasi',array('tingkat'=>2))->result_array();
		$data['nas'] = $this->model_app->view_where('prestasi',array('tingkat'=>3))->result_array();
		$data['btr'] = $this->model_app->view_limit_data('berita','3')->result_array();
		//print_r($data['btr']);die();
		$this->template->load('template','main',$data);
	}
	
	public function sejarah()
	{
		$data['keywords'] = "MA Ma'arif NU Musi Rawas";
		$data['description'] = "MA Ma'arif NU Musi Rawas adalah salah satu satuan pendidikan dengan jenjang MA di Marga Sakti, Kecamatan Muara Kelingi, Kabupaten Musi rawas";
		$data['page'] = 'home';
		$data['record'] = $this->model_app->view_where('berita',array('status'=>1))->row();
		$data['prestasi'] = $this->model_app->view_where('prestasi',array('tingkat'=>1))->result_array();
		$data['prof'] = $this->model_app->view_where('prestasi',array('tingkat'=>2))->result_array();
		$data['nas'] = $this->model_app->view_where('prestasi',array('tingkat'=>3))->result_array();
		$data['btr'] = $this->model_app->view_limit_data('berita','3')->result_array();
		//print_r($data['btr']);die();
		$this->template->load('template','sejarah',$data);
	}
	
	public function berita()
	{
		$data['keywords'] = "MA Ma'arif NU Musi Rawas";
		$data['description'] = "MA Ma'arif NU Musi Rawas adalah salah satu satuan pendidikan dengan jenjang MA di Marga Sakti, Kecamatan Muara Kelingi, Kabupaten Musi rawas";
		$data['page'] = 'home';
		$data['record'] = $this->model_app->view_where('berita',array('status'=>1))->row();
		$data['prestasi'] = $this->model_app->view_where('prestasi',array('tingkat'=>1))->result_array();
		$data['prof'] = $this->model_app->view_where('prestasi',array('tingkat'=>2))->result_array();
		$data['nas'] = $this->model_app->view_where('prestasi',array('tingkat'=>3))->result_array();
		$data['btr'] = $this->model_app->view_limit_data('berita','3')->result_array();
		//print_r($data['btr']);die();
		$this->template->load('template','berita',$data);
	}
	
	
	public function kontak()
	{
		$data['keywords'] = "MA Ma'arif NU Musi Rawas";
		$data['description'] = "MA Ma'arif NU Musi Rawas adalah salah satu satuan pendidikan dengan jenjang MA di Marga Sakti, Kecamatan Muara Kelingi, Kabupaten Musi rawas";
		$data['page'] = 'home';
		$data['record'] = $this->model_app->view_where('berita',array('status'=>1))->row();
		$data['prestasi'] = $this->model_app->view_where('prestasi',array('tingkat'=>1))->result_array();
		$data['prof'] = $this->model_app->view_where('prestasi',array('tingkat'=>2))->result_array();
		$data['nas'] = $this->model_app->view_where('prestasi',array('tingkat'=>3))->result_array();
		$data['btr'] = $this->model_app->view_limit_data('berita','3')->result_array();
		//print_r($data['btr']);die();
		$this->template->load('template','kontak',$data);
	}
}
 