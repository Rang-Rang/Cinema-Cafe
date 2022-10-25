<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->model("food_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["food"] = $this->food_model->getAll();
		$this->load->view('index', $data);
	}

	public function simpan()
	{
		$food = $this->food_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($food->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $food->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
		if($insert) {
			echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("food").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("food/simpan").'";</script>';
		}
	}
		$this->load->view("tambah_food");
}

	public function ubah($id_food = null)
	{ // menentukan parameter id_food menjadi null / kosong
		if(!isset($id_food)) redirect('food'); // logika jika id_food masih belum ada

		$food = $this->food_model; // menentukan objek model
		$validasi = $this->form_validation; // menentukan objek validasi form
		$validasi->set_rules($food->rules()); // menentukan rules yang ada pada model

		if ($validasi->run()){ // menjalankan validasi form
			$updates = $food->update(); // menjalankan data form update ke db
			$this->session->set_flashdata('success', "Data berhasil diubah!");
			// if($updates) {
			// 	echo '<script>alert("Data Berhasil Diubah"); window.location.href="'.site_url("food").'";</script>';
			// } else {
			// 	echo '<script>alert("Data Gagal Diubah"); window.location.href="'.site_url("food/simpan").'";</script>';
			// }
			
			// menampilkan pesan data berhasil diubah
		}

		$data['food'] = $food->getID($id_food); // memanggil data berdasarkan id_food yang dipilih
		if(!$data['food']) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / 404
		$this->load->view('ubah_food', $data); // memanggil data food ke halaman ubah food berdasarkan id_food
	}

	public function hapus($id_food = null){

		$food = $this->food_model; // menentukan objek model

		if(!isset($id_food)) show_404(); // logika menampilkan halaman error jika id_food null / kosong

		if($food->delete($id_food)) { // menghapus data berdasarkan id_food di db
			redirect(site_url()); // menampilkan halaman food
		}
	}
}
