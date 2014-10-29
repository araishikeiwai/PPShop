<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('adminmodel');
	}

	public function index(){
		if(($this->session->userdata('logged_in'))){
			redirect('admin/dashboard');
		}
		$data['title'] = 'Admin Login';
		$this->load->view('admin/adminlogin',$data);
	}

	function sessionCheck(){
		if(!($this->session->userdata('logged_in'))){
			redirect('admin');
		}
	}

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[30]|min_length[1]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[30]|min_length[1]|callback_doAuth');

		if($this->form_validation->run()== FALSE) {
			$this->form_validation->set_message('min_length[]', 'Username dan Password tidak boleh kosong!');
			$this->index();
		}
		else{
			redirect('admin/dashboard');
		}
	}

	function dashboard() {
		$this->sessionCheck();
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/footer');
	}

	function choose(){
		$this->sessionCheck();
		$data['title'] = 'Tambah PP';
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/choose');
		$this->load->view('admin/template/footer');
	}

	function add(){
		$this->sessionCheck();
		$data['title'] = 'Tambah PP';
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/add');
		$this->load->view('admin/template/footer');
	}

	function pages(){
		$this->sessionCheck();
		$data['arraypage'] = $this->adminmodel->getPages();
		$data['title'] = 'Atur Halaman';
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/pages');
		$this->load->view('admin/template/footer');
	}

	function addPage(){
		$this->sessionCheck();
		$data['title'] = 'Tambah Halaman';
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/addpage');
		$this->load->view('admin/template/footer');
	}

	function doAddPage(){
		$this->sessionCheck();
		$this->form_validation->set_rules('judul', 'Judul Halaman', 'required|max_length[50]|strip_tags|alphanumeric');
		$this->form_validation->set_rules('konten', 'Konten Halaman', 'required|alphanumeric');
        $this->form_validation->set_message('required', 'Informasi ini tidak boleh dikosongkan');
        if($this->form_validation->run() == TRUE) {
	        $data = array(
	            'title' => $this->input->post('judul'),
	            'text' => $this->input->post('konten')
	        );
	        $addcheck = $this->adminmodel->addPage($data);
	        if($addcheck){
	        	redirect('admin/pages');
	        }
	    }
	    else {
            $this->addPage();
        }
	}

	function editPage($id){
		$this->sessionCheck();
		$data['pagedetail'] = $this->adminmodel->getPageDetail($id);
		$data['title'] = 'Tambah Halaman';
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/editpage',$data);
		$this->load->view('admin/template/footer');
	}

	function doEditPage($id){
		$this->sessionCheck();
		$this->form_validation->set_rules('judul', 'Judul Halaman', 'required|max_length[50]|strip_tags|alphanumeric');
		$this->form_validation->set_rules('konten', 'Konten Halaman', 'required|alphanumeric');
        $this->form_validation->set_message('required', 'Informasi ini tidak boleh dikosongkan');
        if($this->form_validation->run() == TRUE) {
	        $data = array(
	        	'id' => $id,
	            'title' => $this->input->post('judul'),
	            'text' => $this->input->post('konten')
	        );
	        $editcheck = $this->adminmodel->editPage($data);
	        if($editcheck){
	        	redirect('admin/pages');
	        }
	    }
	    else {
            $this->addPage();
        }
	}

	function doDeletePage($id){
		$this->sessionCheck();
		$checkdelete = $this->adminmodel->deletePage($id);
        if ($checkdelete) {
            redirect('admin/pages');
        }
	}

	function doAddPP(){
		$this->sessionCheck();
		$nowsNama = str_replace(' ', '_', $this->input->post('nama'));
		$nowsType = str_replace(' ','_',$this->input->post('tipe'));
		$timestamp = time();
		$idPP = $nowsNama."_".$nowsType."_".$this->input->post('set')."_".$timestamp;
		$config = array(
            'upload_path' => "./images/PP/",
            'allowed_types' => 'gif|jpg|png|jpeg|ico',
            'max_size'  => '500',
            'max_width'  => '2000',
            'max_height' => '2000',
            'file_name' => $idPP.".jpg",
            'overwrite' => TRUE
        );
        $this->upload->initialize($config);
        if ($_FILES && $_FILES ['fotoPP']['name'] !== "") {       
            if ( $this->upload->do_upload('fotoPP')) {
                $data_array = $this->upload->data();
                $fotoPP = $data_array['file_name'];
            }
            else { 
                $error = $this->upload->display_errors();
            }
        }
        $this->form_validation->set_rules('nama', 'Nama PP', 'required|max_length[50]|strip_tags|alphanumeric');
        $this->form_validation->set_message('required', 'Informasi ini tidak boleh dikosongkan');
        if($this->form_validation->run() == TRUE) {
	        $datapp = array(
	        	'id'=> $idPP,
	            'name' => $this->input->post('nama'),
	            'group' => $this->input->post('group'),
	            'team'=> $this->input->post('team'),
	            'price'=> $this->input->post('harga'),
	            'type' => $this->input->post('tipe'),
	            'detailtype'=> $this->input->post('detail'),
	            'set'=> $this->input->post('set'),
	            'stock'=> 1,
	            'externalurl' => $this->input->post('externalurl'),
	            'timestamp' => $timestamp
	        );
	        $addcheck = $this->adminmodel->addPP($datapp);
	        if($addcheck){
	        	redirect('admin/dashboard');
	        }
	    }
	    else {
            $this->add();
        }
	}

	function doEditPP(){
		$this->sessionCheck();
		$nowsNama = str_replace(' ', '_', $this->input->post('nama'));
		$nowsType = str_replace(' ','_',$this->input->post('tipe'));
		$idPP = $this->input->post('id');
		$config = array(
            'upload_path' => "./images/PP/",
            'allowed_types' => 'gif|jpg|png|jpeg|ico',
            'max_size'  => '500',
            'max_width'  => '2000',
            'max_height' => '2000',
            'file_name' => $idPP.".jpg",
            'overwrite' => TRUE
        );
        $this->upload->initialize($config);
        if ($_FILES && $_FILES ['fotoPP']['name'] !== "") {       
            if ( $this->upload->do_upload('fotoPP')) {
                $data_array = $this->upload->data();
                $fotoPP = $data_array['file_name'];
            }
            else { 
                $error = $this->upload->display_errors();
            }
        }
        $this->form_validation->set_rules('nama', 'Nama PP', 'required|max_length[50]|strip_tags|alphanumeric');
        $this->form_validation->set_message('required', 'Informasi ini tidak boleh dikosongkan');
        if($this->form_validation->run() == TRUE) {
	        $datapp = array(
	        	'id'=> $idPP,
	            'name' => $this->input->post('nama'),
	            'group' => $this->input->post('group'),
	            'team'=> $this->input->post('team'),
	            'price'=> $this->input->post('harga'),
	            'type' => $this->input->post('tipe'),
	            'detailtype'=> $this->input->post('detail'),
	            'set'=> $this->input->post('set'),
	            'stock'=> $this->input->post('stock'),
	            'externalurl' => $this->input->post('externalurl'),
	            'timestamp' => $timestamp
	        );
	        $editcheck = $this->adminmodel->editPP($datapp);
	        if($editcheck){
	        	redirect('admin/manage');
	        }
	    }
	    else {
            $this->dashboard();
        }
	}

	function doDeletePP($id){
		$this->sessionCheck();
		$checkdelete = $this->adminmodel->deletePP($id);
        if ($checkdelete) {
            redirect('admin/manage');
        }
	}

	function addmany(){
		$this->sessionCheck();
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/addmany');
		$this->load->view('admin/template/footer');
	}

	function manage(){
		$this->sessionCheck();
		$data['title'] = 'Manage PP';
		$data['pparray'] = $this->adminmodel->getPP();
 		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/manage',$data);
		$this->load->view('admin/template/footer');
	}

	function editPP($pp){
		$this->sessionCheck();
		$data['title'] = 'Edit PP';
		$data['dataPP'] = $this->adminmodel->getDetailPP($pp);
 		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/edit',$data);
		$this->load->view('admin/template/footer');
	}

	function doAuth($password){
		$username = $this->input->post("username");
		$query = $this->adminmodel->login($username, $password);
		if ($query) {
			$this->session->set_userdata('logged_in',TRUE);
			return TRUE;
		}
		else {
			$this->form_validation->set_message('doAuth', 'Username atau Password yang anda masukkan salah');
			return FALSE;
		}
	}

	function slider($message=null){
		$this->sessionCheck();
		$data['title'] = 'Edit Slider';
		$data['message'] = $message;
 		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/slider');
		$this->load->view('admin/template/footer');
	}

	function uploadSlider($num){
		$this->sessionCheck();
		$config = array(
            'upload_path' => "./images/slider/",
            'allowed_types' => 'gif|jpg|png|jpeg|ico',
            'max_size'  => '500',
            'max_width'  => '2000',
            'max_height' => '2000',
            'file_name' => "slider_".$num.".jpg",
            'overwrite' => TRUE
        );
        $this->upload->initialize($config);
        if ($_FILES && $_FILES ['slider']['name'] !== "") {       
            if ( $this->upload->do_upload('slider')) {
                $data_array = $this->upload->data();
                $message = '<p class="bg-success text-center"> Foto Slider ke '.$num.' telah berhasil diupload</p>';
                $this->slider($message);
            }
            else { 
            	$message = '<p class="bg-danger text-center"> Foto Slider ke '.$num.' gagal diupload</p>';
                $this->slider($message);
            }
        }
	}

	function password($message=null){
		$this->sessionCheck();
		$data['title'] = 'Ubah Password';
		$data['message'] = $message;
 		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/password');
		$this->load->view('admin/template/footer');
	}

	function changePassword(){
		$username = 'admin';
		$password = $this->input->post('old');
		$query = $this->adminmodel->login($username, $password);
		if ($query) {
			if($this->input->post('new')==$this->input->post('confirmnew')){
				$data = array(
		        	'username'=> $username,
		            'password' => md5($this->input->post('new'))
	            );
				$this->adminmodel->editPassword($data);
				$message = '<p class="bg-success text-center"> Password telah berhasil diganti</p>';
            	$this->password($message);
			}
			else {
				$message = '<p class="bg-danger text-center"> Password baru dengan konfirmasinya tidak sesuai!</p>';
            	$this->password($message);
			}
		}
		else {
			$message = '<p class="bg-danger text-center"> Password lama salah!</p>';
            $this->password($message);
		}
	}

	function featured(){
		$this->sessionCheck();
		$data['title'] = 'Ubah Featured PP';
		$data['featured'] = $this->adminmodel->getFeatured();
 		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/featured');
		$this->load->view('admin/template/footer');
	}

	function editFeatured($sequence){
		$this->sessionCheck();
		$data['sequence'] = $sequence;
		$data['title'] = 'Ubah Featured PP';
		$data['pparray'] = $this->adminmodel->getPPInternal();
 		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/editfeatured');
		$this->load->view('admin/template/footer');
	}

	function doEditFeatured($sequence){
		$data = array(
        	'sequence'=> $sequence,
            'id_pp' => $this->input->post('pp')
        );
		$this->adminmodel->editFeatured($data);
		$this->dashboard();
	}

	function logout() {
		$this->session->sess_destroy();
		redirect("admin");
	}
}
