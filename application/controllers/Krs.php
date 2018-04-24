<?php
Class Krs extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data dosen
    function index(){
        $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs'));
        $this->load->view('krs/list',$data);
    }

    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'kode_mk'      =>  $this->input->post('kode_mk'),
                'kode_jurusan'    =>  $this->input->post('kode_jurusan'));
            $insert =  $this->curl->simple_post($this->API.'/krs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            // redirect('krs');
        }else{
            $data['kode_mk'] = json_decode($this->curl->simple_get($this->API.'/krs'));
            $this->load->view('krs/create',$data);
        }
    }
    

    

    
    // delete data Dosen
    function delete($nim){
        if(empty($nim)){
            redirect('krs');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/krs', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('krs');
        }
    }
}
