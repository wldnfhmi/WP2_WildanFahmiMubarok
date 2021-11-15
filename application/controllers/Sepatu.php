<?php

class Sepatu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('view_form_sepatu');
  }

  public function proses()
  {
    $this->load->model(['Model_sepatu']);
    $data = [
      'nama' => $this->input->post('nama'),
      'nomor' => $this->input->post('nomor'),
      'merk' => $this->input->post('merk'),
      'ukuran' => $this->input->post('ukuran'),
      'harga' => $this->Model_sepatu->harga($this->input->post('merk'))
    ];

    $this->load->view('view_transaksi_sepatu', $data);
  }
}