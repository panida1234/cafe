<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cafe extends CI_Controller {

	public function index(){
		$this->load->view('welcome_1');
	}
	public function tem(){
		$this->load->view('tem');
	}
	public function show(){
		$sql ="select * from buy";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->result_array();
		$this->load->view('show',$data);

	}
	public function buy(){
		$this->load->view('buy');
	}
	public function add() {
		
		$this->load->view('order');
	}
	public function show_order(){
		$sql ="select * from b_order";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->result_array();
        $this->load->view('buy',$data);
	}
	public function edit(){
		$this->load->view('edit');
}
	public function customer(){
		$sql ="select * from buy";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->result_array();
		$this->load->view('customer',$data);
}
	public function upstatus(){
		$this->load->view('upstatus');
	}
	
	public function menu(){
		$sql ="select * from b_order";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->result_array();
        $this->load->view('menu',$data);
	}
	public function del($id) {
        $this->db->delete('b_order',array('bam_id' => $id));
        redirect("cafe/menu","refresh");
        exit();
	}
	public function delete($id) {
        $this->db->delete('member',array('id' => $id));
        redirect("cafe/users_edit","refresh");
        exit();
    }
	public function users(){
		$this->load->view('users');
	}
	public function add_users() {
		$data=array(
			'name'=>$this->input->get('name'),
			'password'=>$this->input->get('password'),
			'status'=>$this->input->get('status'),
			'phone'=>$this->input->get('phone'),
		);
		$this->db->insert("member",$data);
		redirect("cafe/users_edit","refresh");
		exit();    
	}
	public function add_menu() {
		$data=array(
			'name'=>$this->input->get('name'),
			'price_hot'=>$this->input->get('price_hot'),
			'price_cool'=>$this->input->get('price_cool'),
			'price_spin'=>$this->input->get('price_spin'),
		);
		$this->db->insert("b_order",$data);
		redirect("cafe/menu","refresh");
		exit();    
	}
	public function add_order() {
		$data=array(
			'name_order'=>$this->input->get('name_order'),
			'price'=>$this->input->get('price'),
			'status'=>$this->input->get('status'),
		);
		$this->db->insert("buy",$data);
		redirect("cafe/show","refresh");
		exit();    
	}
	public function users_edit(){
		$sql ="select * from member";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->result_array();
        $this->load->view('users_edit',$data);
	}
	public function users_edit_1(){
		$this->load->view('users_edit_1');
	}
	public function editedit_1($id){
		$sql ="select * from member where id=$id";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->row_array();
		$this->load->view('users_edit_1',$data);
	}
	public function upusers($id){
		$data=array(
			'name'=>$this->input->post('name'),
			'password'=>$this->input->post('password'),
			'status'=>$this->input->post('status'),
			'phone'=>$this->input->post('phone'),
		);
			$this->db->where('id',$id);
			$this->db->update('member', $data);
			redirect("cafe/users_edit","refresh");
			exit();
	}
	public function editedit($id){
		$sql ="select * from b_order where bam_id=$id";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->row_array();
		$this->load->view('edit',$data);
	}
	public function uporder($id){
		$data=array(
			
			'name'=>$this->input->post('name'),
			'price_hot'=>$this->input->post('price_hot'),
			'price_cool'=>$this->input->post('price_cool'),
			'price_spin'=>$this->input->post('price_spin'),
		);
			$this->db->where('bam_id',$id);
			$this->db->update('b_order', $data);
			redirect("cafe/menu","refresh");
			exit();
	}
	public function editedit_status($id){
		$sql ="select * from buy where id_buy=$id";
		$rs = $this->db->query($sql);
		$data['rs'] = $rs->row_array();
		$this->load->view('upstatus',$data);
	}
	public function upstatus_1($id){
		$data=array(
			'status'=>$this->input->post('status'),
		);
			$this->db->where('id_buy',$id);
			$this->db->update('buy', $data);
			redirect("cafe/show","refresh");
			exit();
	}
	public function login_regiter(){
        $this->load->view('login');
	}
	public function login_1(){//echo "login 1";
        $name=$this->input->post('name');
        $password=$this->input->post('password');
        $que=$this->db->query("select * from member where name='".$name."' and password='".$password."'");
      $this->load->view('welcome_1');
    }
}
