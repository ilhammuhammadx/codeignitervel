<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# This controller for testing Blade Template
class Blade extends CI_Controller {
    
	public function index()
	{
		$data['jenis_barang'] = ['Gunting', 'Sepatu', 'Kabel'];
		return view('welcome', $data);
	}
}