<?php

Class mata_kuliah extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data mata_kuliah
    function index(){
        $data['mata_kuliah'] = json_decode($this->curl->simple_get($this->API.'/mata_kuliah'));
        $this->load->view('mata_kuliah/list',$data);
    }
    
    // insert data mata_kuliah
   // insert data dosen
   function create(){
    if(isset($_POST['submit'])){
        $data = array(
            'kode_mk'       =>  $this->input->post('kode_mk'),
            'nama_mk'      =>  $this->input->post('nama_mk'),
            'sks'    =>  $this->input->post('sks'),
            'nip'    =>  $this->input->post('nip'));
        $insert =  $this->curl->simple_post($this->API.'/mata_kuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
        if($insert)
        {
            $this->session->set_flashdata('hasil','Insert Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Insert Data Gagal');
        }
        redirect('mata_kuliah');
    }else{
        $data['mata_kuliah'] = json_decode($this->curl->simple_get($this->API.'/mata_kuliah'));
        $this->load->view('mata_kuliah/create',$data);
    }
}
    
    // edit data mata_kuliah
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode_mk'       =>  $this->input->post('kode_mk'),
                'nama_mk'      =>  $this->input->post('nama_mk'),
                'sks'    =>  $this->input->post('sks'),
                'nip'    =>  $this->input->post('nip'));
            $update =  $this->curl->simple_put($this->API.'/mata_kuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('mata_kuliah');
        }else{
            $params = array('kode_mk'=>  $this->uri->segment(3));
            $data['mata_kuliah'] = json_decode($this->curl->simple_get($this->API.'/mata_kuliah',$params));
            $this->load->view('mata_kuliah/edit',$data);
        }
    }
    
    // delete data mata_kuliah
    function delete($kode_mk){
        if(empty($kode_mk)){
            redirect('mata_kuliah');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/mata_kuliah', array('kode_mk'=>$kode_mk), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('mata_kuliah');
        }
    }
}
