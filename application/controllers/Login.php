<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
 {
  parent::__construct();
  $this->load->Helper('url');
  $this->load->model('google_login_model');
 }
	
	public function index()
	{
		$this->db->where('user_status', 'Y');
		$data['user_data'] = $this->db->get('user')->result();
		
		$this->load->view('user_list',$data);
	}
	
	public function add_user()
	{
		$this->load->view('user');
	}
	
	public function save()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$dob = $this->input->post('dob');
		$education = $this->input->post('education');
		$address = $this->input->post('address');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$pincode = $this->input->post('pincode');
		$status = $this->input->post('status');
		
		$imgList = array();
		for($i=0; $i<count($_FILES['file']['name']); $i++){
			if(!empty($_FILES['file']['name'][$i])){
			$image              = $_FILES['file']['name'][$i]; 
			$expimage           = explode('.',$image);
			$count              = count($expimage);
			$image_ext          = $expimage[$count-1];
			$image_name         = strtotime('now'). rand() .'.'.$image_ext;
			$imagepath          = "assets/profile_pic/".$image_name;
			
			move_uploaded_file($_FILES["file"]["tmp_name"][$i],$imagepath);
			$imgList[] = $imagepath;
			}else{
				$imagepath  = '';
			}
		}
		
		
			$field = array(
				'name' => $name,
				'email' => $email,
				'dob' => $dob,
				'education' => $education,
				'address' => $address,
				'country' => $country,
				'state' => $state,
				'address' => $address,
				'city' => $city,
				'pincode' => $pincode,
				'status' => $status,
				'pic' => $imagepath
				
			);
			$this->db->insert('user', $field);
			
	}
	
	public function del()
	{
	  $id = $this->input->post('id');
	  $field = array(
	  	'user_status' => 'N'
	  );
	  
	  $this->db->update('user',$field,"id='$id'");
	  $this->load->view('user_list');
   } 
   
   public function edit($id)
	{
		
		$this->db->where('id', $id);
		$data['user_data'] = $this->db->get('user')->result();
		
		$this->load->view('edit_user',$data);
  }
  
  public function update()
	{
		$upd_id = $this->input->post('upd_id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$dob = $this->input->post('dob');
		$education = $this->input->post('education');
		$address = $this->input->post('address');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$pincode = $this->input->post('pincode');
		$status = $this->input->post('status');
		
		
		$field = array(
				'name' => $name,
				'email' => $email,
				'dob' => $dob,
				'education' => $education,
				'address' => $address,
				'country' => $country,
				'state' => $state,
				'address' => $address,
				'city' => $city,
				'pincode' => $pincode,
				'status' => $status,
				//'pic' => $new_name
				
			);
			$this->db->where('id', $upd_id);
            $this->db->update('user', $field);
			
			$json = array('processed'=>'Y');
	   	    echo json_encode($json);
	}
  
}
