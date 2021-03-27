<?php
class Posts extends CI_Controller{
	public function index(){
    $data['title']='All Posts';
	$data['posts']=$this->post_model->get_Posts();
	$this->load->view('templates/header.php',$data);
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer.php');
	}
	public function show($id){
		$data['title']='Show Single Post';
		$data['post']=$this->post_model->show_Post($id);
		$this->load->view('templates/header.php',$data);
		$this->load->view('posts/show',$data);
		$this->load->view('templates/footer.php');
	}

	
	public function create(){
		$data['title']='Create post';
		//$data['posts']=$this->post_model->get_Posts();
        $this->form_validation->set_rules('title',"Title","required");
		$this->form_validation->set_rules('body',"Body","required");
        if($this->form_validation->run() === FALSE){
		$this->load->view('templates/header',$data);
		$this->load->view('posts/create',$data);
		$this->load->view('templates/footer');
		}
		else{
        $this->post_model->create_post();
		redirect('posts');
		}
}

    public function delete($id){
	$this->post_model->delete_post($id);
	//flash message
	redirect('posts');
}
    public function edit($id){
		$data['title']='Edit post';
		$data['post']=$this->post_model->show_Post($id);
		$this->load->view('templates/header',$data);
		$this->load->view('posts/edit',$data);
		$this->load->view('templates/footer');
}

public function update(){
	$data['title']='Edit post';
	$data['post']=$this->post_model->show_Post($this->input->post('id'));
	$this->form_validation->set_rules('title',"Title","required");
	$this->form_validation->set_rules('body',"Body","required");
	if($this->form_validation->run() === FALSE){
		$this->load->view('templates/header',$data);
		$this->load->view('posts/edit',$data);
		$this->load->view('templates/footer');
		}
		else{
			$this->post_model->post_update();
			//flash meassage
		   redirect('posts');
		}
	
	}
}




?>
