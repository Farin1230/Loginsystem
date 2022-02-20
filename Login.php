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
		//$pic = $this->input->post('pic');
		
		//$this->db->where('login_oauth_uid', $id);
		//$this->db->where('name',$name, 'mail',$mail , 'dob',$dob , 'education',$education , 'address',$address, 'country',$country , 'city',$city , pincode='$pincode' AND status='$status' AND pic='$pic');
		
		//$array = array('name' => $name, 'email' => $email, 'dob' => $dob, 'education' => $education, 'address' => $address, 'country' => $country, 'state' => $state, 'city' => $city, 'pincode' => $pincode, 'status' => $status, 'pic' => $pic);
		
		//$this->db->where($array); 
        //$user = $this->db->get('user');
		
		//$user = $this->db->select("user","*","name='$name' AND mail='$mail' AND dob='$dob' AND education='$education' AND address='$address' AND country='$country' AND city='$city' AND pincode='$pincode' AND status='$status' AND pic='$pic'");
		
		@$image=$_FILES['file']['name'];
        $up_img_name=$name.'_'.time();
        $fileExt = pathinfo( $image, PATHINFO_EXTENSION);
        $final_image=$up_img_name;

        $config['upload_path'] = './assets/profile_pic/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|msword|bmp';
        $config['max_size'] = '2048000000';
        $config['overwrite'] = TRUE;
        $config['file_name'] =$final_image;
        
	    $this->load->library('upload',$config);
	    $this->upload->initialize($config);
	    $this->load->library('upload', $config); 
				 
				 
	    $data = $this->upload->data();  
	    $data = array('upload_data' => $this->upload->data());    
	    $uploadData = $this->upload->data();
	    $image = $uploadData['file_name'];
	    $ext=$uploadData['file_ext'];
	    $new_name = $name . '_' . time() . $uploadData['file_ext'];
		
		
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
				'pic' => $new_name
				
			);
			$this->db->insert('user', $field);
			
			$json = array('processed'=>'Y');
	   	    echo json_encode($json);
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
