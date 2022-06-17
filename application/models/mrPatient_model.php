<?php
class mrPatient_model extends CI_Model{
  public function getBelumDitimbang(){
    $query = $this->db->query("SELECT * FROM `patient` WHERE status = 'Belum Ditimbang' ORDER by id limit 1");
    $row = $query->row();
    if($row){
      return $row->mr;
    }else{
      return'Tidak Ada Antrian';
    }
  }
  public function getSedangDitimbang(){
    $query = $this->db->query("SELECT * FROM `patient` WHERE status = 'Sedang Ditimbang' ORDER by id limit 1");
    $row = $query->row();
    if($row){
      return $row->mr;
    }else{
      return'Tidak Ada Antrian';
    }
  }
  public function getPasienBelumDipanggil(){
    $query = $this->db->query("SELECT * FROM `patient` WHERE status = 'Belum Dipanggil' ORDER by id");
    return $query->result_array();
  }
  public function getSedangDipanggil(){
    $query = $this->db->query("SELECT * FROM `patient` WHERE status = 'Sedang Dipanggil' ORDER by id limit 2");
    return $query->result_array();
  }
  public function getNamaSedangDipanggil(){
    $query = $this->db->query("SELECT * FROM `patient` WHERE status = 'Sedang Dipanggil' ORDER by id limit 1");
    $row = $query->row();
    return $row->nama;
  }
  public function getSudahDipanggil(){
    $query = $this->db->query("SELECT * FROM `patient` WHERE status = 'Sudah Dipanggil' ORDER by id");
    return $query->result_array();
  }
}
