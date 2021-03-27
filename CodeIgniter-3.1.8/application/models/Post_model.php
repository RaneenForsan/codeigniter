<?php

class Post_model extends CI_Model{
	public function get_Posts(){
	$query=$this->db->get('posts');
	return $query->result_array();
	}

	public function show_Post($id){
		$query=$this->db->get_where('posts', array('id'=>$id));
		return $query->row_array();
 

	}
	public function create_post(){
		$data=[
			'title'=>$this->input->post('title'),
			'body'=>$this->input->post('body')

		      ];
			  return $this->db->insert('posts',$data);
	}
	public function delete_post($id){
     $this->db->delete('posts',array('id'=>$id));
	 return true;

	 
	} 
	public function post_update(){
		$id=$this->input->post('id');
		$data=[
			'title'=>$this->input->post('title'),
			'body'=>$this->input->post('body')

		      ];
			  $this->db->where('id',$id);
			  return $this->db->update('posts',$data);
	}

}
?>
