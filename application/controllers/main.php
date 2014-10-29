<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mainpage');
	}


	public function index() {	
		$data['title'] = 'PP Shop';
		$data['recent'] = $this->mainpage->getRecent();
		$data['featured'] = $this->mainpage->getFeatured();
		$this->load->view('main/template/header',$data);
		$this->load->view('main/index');
		$this->load->view('admin/template/footer');
	}

	function about(){
		$data['title'] = 'About PP Shop';
		$data['about'] = $this->mainpage->getAbout();
		$this->load->view('main/template/header',$data);
		$this->load->view('main/about');
		$this->load->view('admin/template/footer');
	}

	function contact(){
		$data['title'] = 'Contact PP Shop';
		$data['contact'] = $this->mainpage->getContact();
		$this->load->view('main/template/header',$data);
		$this->load->view('main/contact');
		$this->load->view('admin/template/footer');
	}

	function search(){
		$query = $this->input->post('searchquery');
		$data['title'] = 'Search Result | '.$query;
		$data['dataPP'] = $this->mainpage->searchPP($query);
		$this->load->view('main/template/header',$data);
		$this->load->view('main/searchresult');
		$this->load->view('admin/template/footer');
	}

	function AKB($index=null){	
		$this->paginationBase('AKB',$index);
	}

	function JKT($index=null){	
		$this->paginationBase('JKT',$index);
	}

	function SKE($index=null){	
		$this->paginationBase('SKE',$index);
	}

	function NMB($index=null){	
		$this->paginationBase('NMB',$index);
	}

	function HKT($index=null){	
		$this->paginationBase('HKT',$index);
	}

	function SNH($index=null){	
		$this->paginationBase('SNH',$index);
	}

	function Others($index=null){	
		$this->paginationBase('Others',$index);
	}

	function paginationBase($group,$index){
		$data['title'] = 'Category | '.$group;
		$this->load->library('pagination');
		$jml = $this->mainpage->getData($group);
		$config['total_rows'] = $jml->num_rows();
	    $config['per_page'] = '5';
	    $config['first_page'] = 'Awal';
	    $config['last_page'] = 'Akhir';
	    $config['base_url'] = base_url().'index.php/main/'.$group;
    	$config['uri_segment'] = 3;
    	$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
    	$this->pagination->initialize($config);
    	$query = $this->mainpage->getCategory($group, $config['per_page'], $index);
    	$data['halaman'] = $this->pagination->create_links();
    	$data['dataPP'] = $query;
    	$this->load->view('main/template/header',$data);
		$this->load->view('main/category');
		$this->load->view('admin/template/footer');
	}

	function view($id){
		$this->load->model('adminmodel');
		$data['detailpp'] = $this->adminmodel->getDetailPP($id);
		$data['title'] = 'PP Shop';
		$this->load->view('main/template/header',$data);
		$this->load->view('main/singleview',$data);
		$this->load->view('admin/template/footer');
	}
}
