<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   $checked="checked";
		$rating=3;
		$offer=0;
		$this->mainlogo();
		$this->load->database();
		$data["slides"]=($this->db->order_by("id","desc")->get("slider"))->result();
		$data["logo"]=($this->db->get("admin_table"))->result();
		$data["blocks"]=($this->db->get("blocks_list"))->result();
		$data["deals"]=($this->db->get("deal_table"))->result();
		$data["newproducts"]=($this->db->order_by("id","desc")->get("product_table"))->result();
		$this->db->where("offer  >",$offer);
		$data["offerproducts"]=($this->db->get("product_table"))->result();
		
		$this->db->where("priority",$checked);
		$data["products"]=($this->db->get("product_table"))->result();
		$this->db->where("rating >=",$rating);
		$data["rateingproducts"]=($this->db->get("product_table"))->result();
		$this->db->select('id');
			$this->db->from('login_table');
			$this->db->where('username',$this->session->user);
			$reault_array = $this->db->get()->result_array();
			$customer_id=1;
			$this->db->where("customer_id",$customer_id);
			$data["productids"]=($this->db->get("cart_table"))->result();
			
			
		
	
	   $this->load->view("shopping/index",$data);

	} 
	public function admin()
	{
		$this->mainlogo();
	   $this->load->view("admin/index");
	}

	public function userlogin()
	{
		$this->load->view("index");
	}
	
	public function adminlogin()
	{      $this->mainlogo();
			$admin=$this->input->post("admin");
			$password=$this->input->post("password");
			$this->load->database();
			$this->db->where('admin', $admin);  
			$this->db->where('password', $password);  
			$query = $this->db->get('admin_table');  
			//SELECT * FROM users WHERE username = '$username' AND password = '$password'  
			if($query->num_rows() > 0)  
			{  
				$data["details"]=($this->db->get("admin_table"))->result();
                $this->mainlogo();
				$this->load->view("nav");
				$this->load->view("admin",$data);
				$this->session->admin=$admin;
				
				}  
			else  
			{  $this->mainlogo();
				$this->load->view("admin/index"); 
				$this->session->set_flashdata('adminerror', 'Invalid Username and Password');     
			}
		


	}
	public function check()
	{ 
		$this->mainlogo();
		if($this->input->post('login'))
		{
			$username=$this->input->post("username");
			$password=$this->input->post("password");
		   		$this->load->library('form_validation'); 
		   		$this->load->database();
           		$this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           { 
			$query = $this->db->get_where('login_table',array('username'=>$username,'password'=>$password));
			$query1=$query->row();  
			//SELECT * FROM users WHERE username = '$username' AND password = '$password'  
			if($query->num_rows()>0)  
			{  
				$this->session->user=$username;
			   $this->session->userid=$query1->id;
				if(isset($this->session->token))
				{
					$token=$this->session->token;
					redirect("./productdetail?token=$token");
					unset($this->session->token); 

				}else
				{
					redirect("./index");
				//	$this->session->user=$username;	
				//	$this->session->userid=$query1->id;
			
				}
					
			}  
			else  
			{  
				$this->userlogin(); 
				$this->session->set_flashdata('error', 'Invalid Username and Password');     
			}  

		   
		} 
       }
	}
	public function signup()
	{$this->mainlogo();
		$this->load->view("register");
	}
	public function register()
	{
			$username=$this->input->post("username");
			$password=$this->input->post("password");
			$type=$this->input->post("type");
			$date =date("Y-m-d");
			$contact=$this->input->post("contact");
			$mail=$this->input->post("mail");
			$address=$this->input->post("address");	
			$pincode=$this->input->post("pincode");
            $this->load->database();
			$this->db->where('username', $username);
	        $query = $this->db->get('login_table');
        	$this->db->where('e_mail',$mail);
        	$query1=$this->db->get('login_table');
        	$this->db->where('contact',$contact);
        	$query2=$this->db->get('login_table');
	if($query->num_rows() >= 1)
	{
		$this->session->set_flashdata('username', 'Username Is Already Taken');     
		$this->load->view("register");
	}
	elseif($query1->num_rows() >= 1){
	
		$this->session->set_flashdata('mail', 'Email Is Already Taken');     
		$this->load->view("register");
	}elseif($query2->num_rows() >= 1)
	{
		$this->session->set_flashdata('contact', 'Contact Is Already Taken');     
		$this->load->view("register");

	}
	
	else{
            $insert=array(
				"username"=>$username,
				"password"=>$password,
				"type"=>$type,
				"contact"=>$contact,
				"e_mail"=>$mail,
				"address"=>$address,
				"pincode"=>$pincode
			);
		  $this->load->database();
			$this->db->insert("login_table",$insert);
			$this->load->view('index');

	    	}
	}

		




public function upload()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
		$this->load->database();
		$data["types"]=($this->db->get("type"))->result();		
	$this->load->view("nav");
	$this->load->view("upload",$data);
	}
	else{
		$this->load->view("admin/index");
	}
}


public function view()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("view",$data);
}
else{
	$this->load->view("admin/index");
}
}

public function update()
{$this->mainlogo();
	if(isset($this->session->admin))
	{

	$this->load->view("nav");
	$this->load->view("update");
}
else{
	$this->load->view("admin/index");
}
}
public function delete()
{if(isset($this->session->admin))
	{
	$this->load->view("nav");
	$this->load->view("delete");
}
else{
	$this->load->view("admin/index");
}
}
public function mainlogo()
{
		$this->load->database();
	$data["details"]=($this->db->get("admin_table"))->result();
    $this->load->view("logo",$data);
}
public function main()
{if(isset($this->session->admin))
	{
	$this->load->database();
	$data["details"]=($this->db->get("admin_table"))->result();
    $this->mainlogo();
	$this->load->view("nav",$data);
	$this->load->view("admin",$data);
}
else{
	$this->load->view("admin/index");
}
}
public function stock()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("stock",$data);
}
else{
	$this->load->view("admin/index");
}
}
public function report()
{
	$this->mainlogo();
	 if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("report",$data);
}
else{
	$this->load->view("admin/index");
}
}
public function search()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("search",$data);
}
else{
	$this->load->view("admin/index");
}
}
public function deals()
{ $this->mainlogo();
	  if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("deals",$data);
}
else{
	$this->load->view("admin/index");
}
}
public function offer()
{  $this->mainlogo();
	 if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("offer",$data);
}
else{
	$this->load->view("admin/index");
}
}
public function announcement()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("announcement",$data);
}
else{
	$this->load->view("admin/index");
}
}
public function deal()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("deal_table"))->result();
	$this->load->view("nav");
	$this->load->view("deal",$data);
}
else{
	$this->load->view("admin/index");
}
}


public function announcementview()
{ $this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["products"]=($this->db->get("announcement"))->result();
	$this->load->view("nav");
	$this->load->view("announcementview",$data);
}
else{
	$this->load->view("admin/index");
}
}

public function logout()
{$this->mainlogo();
	unset($_SESSION['admin']);
	
	$this->load->view("admin/index");
	
}
public function admindetails()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["details"]=($this->db->get("admin_table"))->result();
	$this->load->view("nav");
	$this->load->view("admindetails",$data);
	
}
else{
	$this->load->view("admin/index");
}
}
public function adminpassword()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$this->load->database();
	$data["details"]=($this->db->get("admin_table"))->result();
	$this->load->view("nav");
	$this->load->view("adminpassword",$data);
	
} 
else{
	$this->load->view("admin/index");
}
}
public function product_upload()
	{$this->mainlogo();
		if(isset($this->session->admin))
	{		
	$flag=0;
	$filesCount = count($_FILES['files']['name']);
    $product_id=$this->input->post("product_id");
    $title=$this->input->post("title");
	$type=$this->input->post("type1");
	if($type!=null)
	{
		$typedata=array("type"=>$type);
		$this->load->database();
		$this->db->where('type', $type);  
		$query = $this->db->get('type');  
		//SELECT * FROM users WHERE username = '$username' AND password = '$password'  
		if($query->num_rows() <= 0)  
		{  
		$this->db->insert("type",$typedata);
		}
		}
	else{
	
		$type=$this->input->post("type");
	}
	$color=$this->input->post("color");
	$features=$this->input->post("features");
	$additional_information=$this->input->post("additional_information");
	$description=$this->input->post("description");
	$cost=$this->input->post("cost");	
	$offer=$this->input->post("offer");
    $additional_offer=$this->input->post("additional_offer");
	$quantity=$this->input->post("quantity");
	$folder_path="null";
	$gender=$this->input->post("gender");
	$category=$this->input->post("category");	
	$size=$this->input->post("size");
	$stone=$this->input->post("stone");
	$priority=$this->input->post("priority");
	$company_details=$this->input->post("company_details");
	$supplier_details=$this->input->post("supplier_details");
	$contact=$this->input->post("contact");	
	if($offer==0)
	{
		$offer_price=0;
	}
	else{
	$offer_amount=($cost*$offer)/100;
	$offer_price=$cost-$offer_amount;
	}
	
	$data=array(
		"product_id"=>$product_id,
		"title"=>$title,
		"type"=>$type,
		"color"=>$color,
		"features"=>$features,
		"cost"=>$cost,
		"offer"=>$offer,
		"additional_offer"=>$additional_offer,
		"quantity"=>$quantity,
		"folder_path"=>$folder_path,
		"additional_information"=>$additional_information,
		"description"=>$description,
		"gender"=>$gender,
		"category"=>$category,
		"size"=>$size,
		"stone"=>$stone,
		"priority"=>$priority,
		"company_details"=>$company_details,
		"supplier_details"=>$supplier_details,
		"contact"=>$contact,
		'offer_price'=>$offer_price
	);
	
	$this->load->database();
	$this->db->where('product_id', $product_id);
	$query = $this->db->get('product_table');
if($query->num_rows() >= 1)
{
    $this->session->set_flashdata('product_id_error', 'product ID Is Already Taken');     
	$this->session->set_flashdata('product_id', $product_id);     
	$data["details"]=($this->db->get("product_table																																																																																												"))->result();
	$this->load->view("nav");
	$this->load->view("upload",$data);

}
			else
			{
			$this->load->database();	
			$this->db->insert("product_table",$data);
			$id = $this->db->insert_id();
			if(mkdir("./assets/events/".$id)){
			for($i = 0; $i < $filesCount; $i++){
				
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
				$uploadPath = './assets/events/'.$id;
			    $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
					$flag++;
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					if($flag==1)
					{
					$this->db->query("UPDATE `product_table` SET `view_image`='". $uploadData[$i]['file_name']."' WHERE `id`=$id ");
				  	}
				}
				else{
					echo "err";
				}
			}
			}
			if($flag > 0)
			{

				echo "<br><br><br><br><center><h1>PRODUCT UPLOADED SUCCESSFULLY</h1><br><br><a href='./upload'>BACK</a></center>"; 
			
				
			}
		

		}

	}
	else{
		$this->load->view("admin/index");
	}
	}


	public function edit_data( ){
		$this->mainlogo();
		if(isset($this->session->admin))
	{	
		$encodeid=$_GET["token"];
		$id=base64_decode($encodeid);
	
		$this->load->database();
		$this->db->where("id",$id);
	    $data=$this->db->get("product_table");
		$site["product"]=$data->row();
		$this->load->view("nav");
		$this->load->view("update",$site);
		
   } 
   else
   {
	$this->load->view("admin/index");
}
}  
   public function product_edit()
   {$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
    
	if($this->input->post('login')){
    $product_id=$this->input->post("product_id");
    $title=$this->input->post("title");
    $type=$this->input->post("type");
	$color=$this->input->post("color");
	$features=$this->input->post("features");
	$additional_information=$this->input->post("additional_information");
	$description=$this->input->post("description");
	$cost=$this->input->post("cost");	
	$offer=$this->input->post("offer");
    $additional_offer=$this->input->post("additional_offer");
	$quantity=$this->input->post("quantity");
	$folder_path="null";
	$gender=$this->input->post("gender");
	$category=$this->input->post("category");	
	$size=$this->input->post("size");
	$priority=$this->input->post("priority");
	$stone=$this->input->post("stone");
	$company_details=$this->input->post("company_details");
	$supplier_details=$this->input->post("supplier_details");
	$contact=$this->input->post("contact");	
	if($offer==0)
	{
		$offer_price=0;
	}
	else{
	$offer_amount=($cost*$offer)/100;
	$offer_price=$cost-$offer_amount;
	}
	$data=array(
		"product_id"=>$product_id,
		"title"=>$title,
		"type"=>$type,
		"color"=>$color,
		"features"=>$features,
		"additional_information"=>$additional_information,
		"description"=>$description,
		"cost"=>$cost,
		"offer"=>$offer,
		"additional_offer"=>$additional_offer,
		"quantity"=>$quantity,
		"folder_path"=>$folder_path,
		"gender"=>$gender,
		"category"=>$category,
		"size"=>$size,
		"stone"=>$stone,
		"priority"=>$priority,
		"company_details"=>$company_details,
		"supplier_details"=>$supplier_details,
		"contact"=>$contact,
		"offer_price"=>$offer_price
	);
	
	$this->load->database();
	$this->db->where('id', $id);
	$this->db->update('product_table',$data);
	echo "<br><br><br><br><center><h1>PRODUCT UPDATED SUCCESSFULLY</h1><br><br><a href='./view'>BACK</a></center>"; 
		
	}
	else{
		echo "<br><br><br><br><center><h1>ERROR ON UPDATEING PRODUCT </h1><br><br><a href='./view'>BACK</a></center>"; 
			
	}
   }
   else{
	$this->load->view("admin/index");
}
}   

   public function delete_data(){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode($encodeid);
	$this->load->database();
	$this->db->where('id', $id);
	//$data=($this->db->get("product_table"))->result();
	$this->db->delete('product_table');

	echo "<br><br><br><br><center><h1>PRODUCT DELETED SUCCESSFULLY</h1><br><br><a href='./view'>BACK</a></center>"; 
	
}
else{
	$this->load->view("admin/index");
}
}    
		
public function stockadd( ){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode($encodeid);
	$this->load->database();
	$this->db->where('id', $id);
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("stockadd",$data);
	
}
else{
	$this->load->view("admin/index");
}
}  
public function stockupdate()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->load->database();
$this->db->select('quantity');
$this->db->from('product_table');
$this->db->where('id',$id);
$reault_array = $this->db->get()->result_array();
$quantity= $reault_array[0]['quantity'];
	if($this->input->post('login')){
	$delete=$this->input->post("quantity");
	 $data=array(
		"quantity"=>$quantity+$delete
		);
		$this->load->database();
		$this->db->where('id', $id);
		$this->db->update('product_table',$data);
	echo "<br><br><br><br><center><h1>STOCK ADDED SUCCESSFULLY</h1><br><br><a href='./stock'>BACK</a></center>"; 
	}

 else{
	 echo "<br><br><br><br><center><h1>ERROR ON UPDATEING PRODUCT </h1><br><br><a href='./stock'>BACK</a></center>"; 
		 
 }
}
else{
	$this->load->view("admin/index");
}
}
public function deletestock ( ){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode($encodeid);
	$this->load->database();
	$this->db->where('id', $id);
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("deletestockupdate",$data);
	
} 
else{
	$this->load->view("admin/index");
}
} 

public function deletestockupdate( ){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->load->database();
$this->db->select('quantity');
$this->db->from('product_table');
$this->db->where('id',$id);
$reault_array = $this->db->get()->result_array();
$quantity= $reault_array[0]['quantity'];
	if($this->input->post('login')){
	$delete=$this->input->post("quantity");
	//$delete= $quantity-$quantity1;
	 $data=array(
		"quantity"=>$quantity-$delete
		);
		$this->load->database();
		$this->db->where('id', $id);
		$this->db->update('product_table',$data);
	echo "<br><br><br><br><center><h1>STOCK DELETED SUCCESSFULLY</h1><br><br><a href='./stock'>BACK</a></center>"; 
	}
}
else{
	$this->load->view("admin/index");
}
} 




public function delete_deal( ){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->load->database();
	$this->db->where('product_id', $id);
	$this->db->delete("deal_table");
	echo "<br><br><br><br><center><h1>STOCK DELETED SUCCESSFULLY</h1><br><br><a href='./deal'>BACK</a></center>"; 
	
}
else{
	$this->load->view("admin/index");
}
}   
public function dealupdate()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	if($this->input->post('login')){
		
		$deal_type=$this->input->post("deal_type");
		$deal_starting=$this->input->post("deal_starting");
		$deal_ending=$this->input->post("deal_ending");
		$offer=$this->input->post("offer");
	     $data=array(
			 "offer"=>$offer,
			 "deal_type"=>$deal_type,
			"deal_starting"=>$deal_starting,
			"deal_ending"=>$deal_ending
		   );
		
		$this->load->database();
		$this->db->where('product_id', $id);
		$this->db->update('product_table',$data);
		$this->mainlogo();
		echo "<br><br><br><br><center><h1>DEAL UPDATED SUCCESSFULLY</h1><br><br><a href='./deals'>BACK</a></center>"; 
			
		}
		else{
			$this->mainlogo();
			echo "<br><br><br><br><center><h1>ERROR ON UPDATEING </h1><br><br><a href='./deals'>BACK</a></center>"; 
				
		}
}
else{
	$this->load->view("admin/index");
}
} 

public function offeredit(){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode($encodeid);
	$this->load->database();
	$this->db->where('id', $id);
	$data["products"]=($this->db->get("product_table"))->result();
	$this->load->view("nav");
	$this->load->view("offeredit",$data);
	
}  
else{
	$this->load->view("admin/index");
}
} 
public function offerupdate()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	if($this->input->post('login')){
		$offer=$this->input->post("offer");
		
		$this->load->database();
		$this->db->where('product_id', $id);
		$reault_array = $this->db->get('product_table')->result_array();
        $cost=$reault_array[0]['cost'];
        

		if($offer==0)
	{
		$offer_price=0;
	}
	else{
	$offer_amount=($cost*$offer)/100;
	$offer_price=$cost-$offer_amount;
	}
	
	     $data=array(
			"offer"=>$offer,
			
			"offer_price"=>$offer_price
		   );
		
	
		$this->db->where('product_id', $id);
		$this->db->update('product_table',$data);
		echo "<br><br><br><br><center><h1>OFFER UPDATED SUCCESSFULLY</h1><br><br><a href='./offer'>BACK</a></center>"; 
			
		}
		else{
			echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./offer'>BACK</a></center>"; 
				
		}
} 
else{
	$this->load->view("admin/index");
}
} 

public function uploadannouncement()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	if($this->input->post("upload"))
	{
	$announcement_name=$this->input->post("announcement_name");
	$content=$this->input->post("content");

	$insert=array(
		"announcement_name"=>$announcement_name,
		"content"=>$content
	);
  $this->load->database();
	$this->db->insert("announcement",$insert);
	echo "<br><br><br><br><center><h1>ANNOUNCEMENTS	UPDATED SUCCESSFULLY</h1><br><br><a href='./announcement'>UPLOAD MORE</a> &nbsp &nbsp &nbsp &nbsp  <a href='./announcementview'>BACK</a></center>"; 
}
else{
	echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./announcement'>BACK</a></center>"; 
			
}	

	}
	else{
		$this->load->view("admin/index");
	}
	} 

	public function announcementedit( ){
		$this->mainlogo();
		if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
		$id=base64_decode($encodeid);
		$this->load->database();
		$this->db->where('id', $id);
		$data["products"]=($this->db->get("announcement"))->result();
		$this->load->view("nav");
		$this->load->view("announcementupdate",$data);
		
	}
	else{
		$this->load->view("admin/index");
	}
	} 
	public function updateannouncement()
	{$this->mainlogo();
		if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
		if($this->input->post('upload')){
			$content=$this->input->post("content");
			 $data=array(
				"content"=>$content
			   );
			
			$this->load->database();
			$this->db->where('id', $id);
			$this->db->update('announcement',$data);
			echo "<br><br><br><br><center><h1> UPDATED SUCCESSFULLY</h1><br><br><a href='./announcementview'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./announcementview'>BACK</a></center>"; 
					
			}
	} 
	else{
		$this->load->view("admin/index");
	}
	}
	


	public function announcementdelete( ){
		$this->mainlogo();
		if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
		$id=base64_decode($encodeid);
		$this->load->database();
		$this->db->where('id', $id);
		$this->db->delete('announcement');
	
		echo "<br><br><br><br><center><h1> DELETED SUCCESSFULLY</h1><br><br><a href='./announcementview'>BACK</a></center>"; 
		
	}
	else{
		$this->load->view("admin/index");
	}
	}

	
	public function updateadmindetails()
	{$this->mainlogo();
		if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
		if($this->input->post('upload')){
			$admin=$this->input->post("admin");
			$gmail=$this->input->post("gmail");
			$contact=$this->input->post("contact");
			 $data=array(
				"admin"=>$admin,
				"gmail"=>$gmail,
				"contact"=>$contact
			   );
			
			$this->load->database();
			$this->db->where('id', $id);
			$this->db->update('admin_table',$data);
			echo "<br><br><br><br><center><h1> UPDATED SUCCESSFULLY</h1><br><br><a href='./main'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./admindetails'>BACK</a></center>"; 
					
			}
	}
	else{
		$this->load->view("admin/index");
	}
	} 
 
public function updateadminpassword()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$adminpassword=$this->input->post("adminpassword");
	$newadminpassword=$this->input->post("newadminpassword");
	$confirmnewadminpassword=$this->input->post("confirmnewadminpassword");
			$this->load->database();
			$this->db->where("password",$adminpassword);
			$query = $this->db->get('admin_table');  
			//SELECT * FROM users WHERE username = '$username' AND password = '$password'  
			if($query->num_rows() > 0)  
			{  
				if($newadminpassword==$confirmnewadminpassword)
				{
					$data=array(
						"password"=>$newadminpassword
					   );
					   $this->load->database();
					   $this->db->where('id', $id);
					   $this->db->update('admin_table',$data);
				echo "<br><br><br><br><center><h1> UPDATED SUCCESSFULLY </h1><br><br><a href='./main'>BACK</a></center>"; 
			
				}
			   else
			   {
				$this->load->database();
				$data["details"]=($this->db->get("admin_table"))->result();
				$this->load->view("nav");
				$this->load->view("adminpassword",$data);
				$this->session->set_flashdata('adminnewpasswordcheck', 'NEW PASSWORD AND CONFIRM PASSWORD NOT MATCHING ');     
		
			   }
			   
			}  
			else  
			{  
				$this->load->view("admin/index"); 
				$this->session->set_flashdata('adminpassworderror', 'Invalid Password');     
			}
		}
			else{
				$this->load->view("admin/index");
			}
	 




}

public function logo()

{$this->mainlogo();
	if(isset($this->session->admin))
	{
	$id=2;
	$config['upload_path']   ="./assets/events"; 
	$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
	$this->load->library('upload');  
	$this->load->helper("url"); 
	$this->upload->initialize($config); 
	if ( ! $this->upload->do_upload('userfile')) {
	   $error = array('error' => $this->upload->display_errors()); 
	   echo $error["error"]; 
	   echo base_url()."assets/events/";
	}
	   
	else { 
	   $data =$this->upload->data();
		$data["file_name"];
		 
		$data["file_path"];
		$this->load->database();
		if($this->input->post("updatelogo"))
		{
	    	$data=$this->db->query("UPDATE `admin_table` SET `logo`='".base_url()."/assets/events/".$data["file_name"]."' WHERE `id`='$id' ");
	
			echo "<br><br><br><br><center><h1> UPDATED SUCCESSFULLY</h1><br><br><a href='./main'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./main'>BACK</a></center>"; 
					
			}

}}
else{
	$this->load->view("admin/index");
}
}

PUBLIC function dealupload()	
{$this->mainlogo();
	if(isset($this->session->admin))
	{
	if($this->input->post("upload"))
	{
		$deal_type=$this->input->post("deal_type");
		$deal_starting=$this->input->post("deal_starting");
		$deal_ending=$this->input->post("deal_ending");
		$deal_name=$this->input->post("deal_name");
		$offer=$this->input->post("offer");
	   $deal_id=$this->input->post("deal");
	   if($deal_id==null)
	   {
		echo "<br><br><br><br><center><h1> NO PRODUCT IS SELECTED</h1><br><br><a href='./deals'>BACK</a></center>"; 
	   }
	   else{
	   foreach ($deal_id as $id ){
		$data=array(
			"type"=>$deal_type,
			"deal_starting"=>$deal_starting,
			"deal_ending"=>$deal_ending,
			"deal_name"=>$deal_name,
			"offer"=>$offer,
			"product_id"=>$id
		);
		$this->load->database();
		$this->db->insert('deal_table',$data);
		}	
		echo "<br><br><br><br><center><h1> UPDATED SUCCESSFULLY</h1><br><br><a href='./deals'>BACK</a></center>"; 
	}
}
}
else{
	$this->load->view("admin/index");
}
}

	
public function deleteproductimage()
{$this->mainlogo();
	if(isset($this->session->admin))
	{   

$imagepath=  base64_decode( $_GET["imagepath"]);
$this->load->helper("url");
$file="assets/events/".$imagepath;	
if(unlink($file))
{
	$str=explode("/",$file);
$this->load->database();
		$this->db->where("id",$str[2]);
	    $data=$this->db->get("product_table");
		$site["product"]=$data->row();
		$this->load->view("nav");
		$this->load->view("update",$site);
}
 }
 else{
	$this->load->view("admin/index");
}
}	
public function mainproductimage()
{$this->mainlogo();
	if(isset($this->session->admin))
	{   

$imagepath=  base64_decode( $_GET["imagepath"]);
$this->load->helper("url");
$file="assets/events/".$imagepath;	
	$str=explode("/",$file);
	$data=array(
		"view_image"=>$str[3]
	);
	  $this->load->database();
		$this->db->where("id",$str[2]);
		$this->db->update("product_table",$data);
		$this->db->where("id",$str[2]);
	    $data=$this->db->get("product_table");
		$site["product"]=$data->row();
		$this->load->view("nav");
		$this->load->view("update",$site);

 }
 else{
	$this->load->view("admin/index");
}
}	
	
	
                                                    /* HOME FUNTIONS START */
public function slider()
{   
	if(isset($this->session->admin))
	{
	$this->mainlogo();
	$this->load->view("nav");
	$this->load->view("site_edit/slider");
}else{
	$this->load->view("admin/index");
}}

public function sliderview()
{   if(isset($this->session->admin))
	{
	$this->mainlogo();
	$this->load->database();
	$data["sliders"]=($this->db->get("slider"))->result();
	$this->load->view("nav");
	$this->load->view("site_edit/slider_view",$data);
}else{
	$this->load->view("admin/index");
}}
public function sliderupload()
{ if(isset($this->session->admin))
	{
	$this->mainlogo();
	$slider_name=$this->input->post("name");
	$link=$this->input->post("link");
	$quotation=$this->input->post("quotation");
	$slider_data=array(
		   "slider_name"=>$slider_name,
		   "link"=>$link,
		   "quotation"=>$quotation
	);
	$this->load->database();
	$this->db->insert("slider",$slider_data);
	$id = $this->db->insert_id();
	$config['upload_path']   ="./assets/slider"; 
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$this->load->library('upload');  
	$this->load->helper("url"); 
	$this->upload->initialize($config); 
	if ( ! $this->upload->do_upload('userfile')) {
	   $error = array('error' => $this->upload->display_errors()); 
	   echo $error["error"]; 
	   echo base_url()."assets/events/";
	}
	   
	else { 
	   $data =$this->upload->data();
		$data["file_name"];
		 
		$data["file_path"];
		$this->load->database();
		if($this->input->post("submit"))
		{
	    	$data=$this->db->query("UPDATE `slider` SET `image`='".base_url()."/assets/slider/".$data["file_name"]."' WHERE `id`='$id' ");
	
			echo "<br><br><br><br><center><h1> UPLOADED SUCCESSFULLY</h1><br><br><a href='./slider'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./slider'>BACK</a></center>"; 
					
			}

}	
}
else{
	$this->load->view("admin/index");
}

}
public function sliderloader( ){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->load->database();
	$this->db->where('id', $id);
	$data["sliders"]=($this->db->get("slider"))->result();
	$this->load->view("nav");
	$this->load->view("site_edit/slideredit",$data);
	
}
else{
	$this->load->view("admin/index");
}
}  

public function slider_edit()
{
	$this->mainlogo();
	if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->mainlogo();
	if($this->input->post("submit")){
	$slider_name=$this->input->post("name");
	$link=$this->input->post("link");
	$quotation=$this->input->post("quotation");
	$slider_data=array(
		   "slider_name"=>$slider_name,
		   "link"=>$link,
		   "quotation"=>$quotation
	);
	$this->load->database();
	$this->db->where("id",$id);
	$this->db->update("slider",$slider_data);

	$config['upload_path']   ="./assets/slider"; 
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$this->load->library('upload');  
	$this->load->helper("url"); 
	$this->upload->initialize($config); 
	if ($this->upload->do_upload('userfile')) { 
	   $data =$this->upload->data();
		$data["file_name"];
		 
		$data["file_path"];
		$this->load->database();
	    	$data=$this->db->query("UPDATE `slider` SET `image`='".base_url()."/assets/slider/".$data["file_name"]."' WHERE `id`='$id' ");
	}
			echo "<br><br><br><br><center><h1> UPLOADED SUCCESSFULLY</h1><br><br><a href='./sliderview'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./slider'>BACK</a></center>"; 
					
			}	
}
	
	else{
		$this->load->view("admin/index");
	}
}

public function slider_delete()
{	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->mainlogo();
	$this->load->database();
	$this->db->where("id",$id);
	$this->db->delete("slider");
	$this->sliderview();
}

public function blog()
{
	$this->mainlogo();
	
	$name="block";
	$this->load->database();
	$this->db->where("name",$name);
	$data["images"]=($this->db->get("top_images"))->result();
	$this->load->view("shopping/blog",$data);
	
	
	$this->load->view("shopping/blog");
} 
public function about()
{
	$this->mainlogo();
	$name="about";
	$this->load->database();
	$data["content"]=($this->db->get("about_us"))->result();
	$data["images"]=($this->db->get("top_images"))->result();
	$data["logo"]=($this->db->get("admin_table"))->result();
	$this->db->where("name",$name);
	$data["images"]=($this->db->get("top_images"))->result();
	$this->load->view("shopping/about",$data);
	
} 

public function contact()
{
	$name="contact";
	$this->mainlogo();
	$this->load->database();
	$this->db->where("name",$name);
	$data["images"]=($this->db->get("top_images"))->result();
	$data["logo"]=($this->db->get("admin_table"))->result();	
	$this->load->view("shopping/contact",$data);
} 


public function viewblock()
{ if(isset($this->session->admin)){
	$this->mainlogo();
	$this->load->database();
	$data["sliders"]=($this->db->get("blocks_list"))->result();
	$this->load->view("nav");
	$this->load->view("site_edit/list",$data);

}else{
	$this->load->view("admin/index");
}}
public function blocklist()
{ if(isset($this->session->admin)){
	$this->mainlogo();
	$this->load->view("nav");
	$this->load->view("site_edit/addlist");

}else{
	$this->load->view("admin/index");
}}


public function blockupload()
{ if(isset($this->session->admin))
	{
	$this->mainlogo();
	$block_name=$this->input->post("name");
	$link=$this->input->post("link");
	$block_data=array(
		   "block_name"=>$block_name,
		   "link"=>$link,
		 );
	$this->load->database();
	$this->db->insert("blocks_list",$block_data);
	$id = $this->db->insert_id();
	$config['upload_path']   ="./assets/slider"; 
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$this->load->library('upload');  
	$this->load->helper("url"); 
	$this->upload->initialize($config); 
	if ( ! $this->upload->do_upload('userfile')) {
	   $error = array('error' => $this->upload->display_errors()); 
	   echo $error["error"]; 
	   echo base_url()."assets/events/";
	}
	   
	else { 
	   $data =$this->upload->data();
		$data["file_name"];
		 
		$data["file_path"];
		$this->load->database();
		if($this->input->post("submit"))
		{
	    	$data=$this->db->query("UPDATE `blocks_list` SET `image`='".base_url()."/assets/slider/".$data["file_name"]."' WHERE `id`='$id' ");
	
			echo "<br><br><br><br><center><h1> UPLOADED SUCCESSFULLY</h1><br><br><a href='./blocklist'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./blocklist'>BACK</a></center>"; 
					
			}

}	
}
else{
	$this->load->view("admin/index");
}

}

public function listloader( ){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->load->database();
	$this->db->where('id', $id);
	$data["sliders"]=($this->db->get("blocks_list"))->result();
	$this->load->view("nav");
	$this->load->view("site_edit/listedit",$data);
	
}
else{
	$this->load->view("admin/index");
}
}  


public function blocklist_edit()
{
	$this->mainlogo();
	if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->mainlogo();
	if($this->input->post("submit")){
	$block_name=$this->input->post("name");
	$link=$this->input->post("link");
	$slider_data=array(
		   "block_name"=>$block_name,
		   "link"=>$link,
		  
	);
	$this->load->database();
	$this->db->where("id",$id);
	$this->db->update("blocks_list",$slider_data);

	$config['upload_path']   ="./assets/slider"; 
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$this->load->library('upload');  
	$this->load->helper("url"); 
	$this->upload->initialize($config); 
	if ($this->upload->do_upload('userfile')) { 
	   $data =$this->upload->data();
		$data["file_name"];
		 
		$data["file_path"];
		$this->load->database();
	    	$data=$this->db->query("UPDATE `blocks_list` SET `image`='".base_url()."/assets/slider/".$data["file_name"]."' WHERE `id`='$id' ");
	}
			echo "<br><br><br><br><center><h1> UPLOADED SUCCESSFULLY</h1><br><br><a href='./viewblock'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./viewblock'>BACK</a></center>"; 
					
			}	
}
	
	else{
		$this->load->view("admin/index");
	}
}
public function delete_list()
{	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->mainlogo();
	$this->load->database();
	$this->db->where("id",$id);
	$this->db->delete("blocks_list");
	$this->viewblock();
}
public function top_images()
{$this->mainlogo();
	if(isset($this->session->admin))
	{
		
	$this->load->database();
	$data["images"]=($this->db->get("top_images"))->result();
	$this->load->view("nav");
	$this->load->view("site_edit/top_images",$data);

	}
	else{
		$this->load->view("admin/index");
	}
}


public function topimageedit(){
	$this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->load->database();
	$this->db->where('id', $id);
	$data["sliders"]=($this->db->get("top_images"))->result();
	$this->load->view("nav");
	$this->load->view("site_edit/topimages_edit",$data);
	
}
else{
	$this->load->view("admin/index");
}
}  
public function eitedtopimage()
{
	$this->mainlogo();
	if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->mainlogo();
	if($this->input->post("submit")){
	$name=$this->input->post("name");
	$text=$this->input->post("text");
	$sub_text=$this->input->post("sub_text");
	
	$slider_data=array(
		   "name"=>$name,
		   "text"=>$text,
		  "sub_text"=>$sub_text
	);
	$this->load->database();
	$this->db->where("id",$id);
	$this->db->update("top_images",$slider_data);

	$config['upload_path']   ="./assets/slider"; 
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$this->load->library('upload');  
	$this->load->helper("url"); 
	$this->upload->initialize($config); 
	if ($this->upload->do_upload('userfile')) { 
	   $data =$this->upload->data();
		$data["file_name"];
		 
		$data["file_path"];
		$this->load->database();
	    	$data=$this->db->query("UPDATE `top_images` SET `image`='".base_url()."/assets/slider/".$data["file_name"]."' WHERE `id`='$id' ");
	}
			echo "<br><br><br><br><center><h1> UPLOADED SUCCESSFULLY</h1><br><br><a href='./top_images'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./top_images'>BACK</a></center>"; 
					
			}	
}
	
	else{
		$this->load->view("admin/index");
	}
}

public function children()
{
	$gender="children";
	$this->mainlogo();
	$this->load->database();
	$data["logo"]=($this->db->get("admin_table"))->result();
	$this->db->where("name",$gender);
	$data["images"]=($this->db->get("top_images"))->result();
	$sql="SELECT * FROM `product_table` WHERE `gender`='$gender'";
	if($this->input->post("typesorting")||$this->input->post("rangesorting")||$this->input->post("pricesorting")||$this->input->post("search-product"))
	{
		$type=$this->input->post("typesorting");
		$rangesorting=$this->input->post("rangesorting");
		$pricesorting=$this->input->post("pricesorting");
		$search=$this->input->post("search-product");
		if($type!="")
		{
			$sql=$sql." AND `type`='$type' ";
		}
		if($search!="")
		{
			$sql=$sql." AND `title` LIKE '%".$search."%' ";
		}
		if($pricesorting!="")
		{
			$sql=$sql." AND `cost` BETWEEN ".$pricesorting." ";
		}
		if($rangesorting!="")
		{
			if($rangesorting=="ltoh")
			{
				$sql=$sql." ORDER BY `product_table`.`cost` ASC ";
			}
			else if($rangesorting=="htol")
			{
				$sql=$sql." ORDER BY `product_table`.`cost` DESC ";
			}
		}
	}
	//echo $sql;
	//$data["query"]=$sql;
	$data["products"]=($this->db->query($sql))->result();
		
	
	
	$data["gender"]=$gender;
	
	
	
	$data["types"]=($this->db->query("SELECT DISTINCT `type` FROM  product_table WHERE `gender`='CHILDREN'"))->result();
	$this->load->view("shopping/product",$data);

}
public function women()
{
	$gender="women";
	$name="women";
	$this->mainlogo();
	$data["logo"]=($this->db->get("admin_table"))->result();
	$this->db->where("name",$name);
	$data["images"]=($this->db->get("top_images"))->result();
	$sql="SELECT * FROM `product_table` WHERE `gender`='$gender'";
	if($this->input->post("typesorting")||$this->input->post("rangesorting")||$this->input->post("pricesorting")||$this->input->post("search-product"))
	{
		$type=$this->input->post("typesorting");
		$rangesorting=$this->input->post("rangesorting");
		$pricesorting=$this->input->post("pricesorting");
		$search=$this->input->post("search-product");
		if($type!="")
		{
			$sql=$sql." AND `type`='$type' ";
		}
		if($search!="")
		{
			$sql=$sql." AND `title` LIKE '%".$search."%' ";
		}
		if($pricesorting!="")
		{
			$sql=$sql." AND `cost` BETWEEN ".$pricesorting." ";
		}
		if($rangesorting!="")
		{
			if($rangesorting=="ltoh")
			{
				$sql=$sql." ORDER BY `product_table`.`cost` ASC ";
			}
			else if($rangesorting=="htol")
			{
				$sql=$sql." ORDER BY `product_table`.`cost` DESC ";
			}
		}
	}
	//echo $sql;
	//$data["query"]=$sql;
	$data["products"]=($this->db->query($sql))->result();
	$data["gender"]=$gender;
	$data["types"]=($this->db->query("SELECT DISTINCT `type` FROM  product_table WHERE `gender`='WOMEN'"))->result();
	$this->load->view("shopping/product",$data);
}
public function men()
{
	$gender="MALE";
	$name="MEN";
	$this->mainlogo();
	$this->load->database();
	$data["logo"]=($this->db->get("admin_table"))->result();
	$this->db->where("name",$name);
	$data["images"]=($this->db->get("top_images"))->result();
    $data["types"]=($this->db->query("SELECT DISTINCT `type` FROM  product_table WHERE `gender`='MALE'"))->result();
	$sql="SELECT * FROM `product_table` WHERE `gender`='$gender'";
	if($this->input->post("typesorting")||$this->input->post("rangesorting")||$this->input->post("pricesorting")||$this->input->post("search-product"))
	{
		$type=$this->input->post("typesorting");
		$rangesorting=$this->input->post("rangesorting");
		$pricesorting=$this->input->post("pricesorting");
		$search=$this->input->post("search-product");
		if($type!="")
		{
			$sql=$sql." AND `type`='$type' ";
		}
		if($search!="")
		{
			$sql=$sql." AND `title` LIKE '%".$search."%' ";
		}
		if($pricesorting!="")
		{
			$sql=$sql." AND `cost` BETWEEN ".$pricesorting." ";
		}
		if($rangesorting!="")
		{
			if($rangesorting=="ltoh")
			{
				$sql=$sql." ORDER BY `product_table`.`cost` ASC ";
			}
			else if($rangesorting=="htol")
			{
				$sql=$sql." ORDER BY `product_table`.`cost` DESC ";
			}
		}
	}
	//echo $sql;
	//$data["query"]=$sql;
	$data["products"]=($this->db->query($sql))->result();
	$data["gender"]=$gender;
	//$this->load->view("shopping/header");
	$this->load->view("shopping/product",$data);
}


public function productdetail(){
	if(!(isset($this->session->user)))
	{
		$this->session->token=$_GET["token"];
	}
	$this->mainlogo();
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->load->database();
	$site["logo"]=($this->db->get("admin_table"))->result();
	$this->db->where("product_id",$id);
	$data=$this->db->get("product_table");
	$site["product"]=$data->row();
	$this->db->select('type');
    $this->db->from('product_table');
    $this->db->where('product_id',$id); 
    $reault_array = $this->db->get()->result_array();
    $type= $reault_array[0]['type'];
    $this->db->where("type",$type);
    $site["products"]=($this->db->get("product_table"))->result();
	 $this->db->where('product_id',$id);
	 $site["reviews"]=($this->db->get("review_table"))->result();
	$this->load->view("shopping/product-detail",$site);
	
}

public function productpage()
{
	$this->mainlogo();
	$encodeid=$_GET["token"];
	$id=$encodeid;
	$this->load->database();
	$data["logo"]=($this->db->get("admin_table"))->result();
	
	$this->db->where("type",$id);
	$data["products"]=($this->db->get("product_table"))->result();
	
    $this->load->view("shopping/productpage_type",$data);
}


public function cart()
{    if(isset($this->session->user))
	{   $name="cart";
	    $this->mainlogo();
		$this->load->database();
		$data["logo"]=($this->db->get("admin_table"))->result();
     	$this->db->where("name",$name);
	    $data["images"]=($this->db->get("top_images"))->result();
	   	$this->db->select('id');
		$this->db->from('login_table');
		$this->db->where('username',$this->session->user);
		$reault_array = $this->db->get()->result_array();
		$customer_id= $reault_array[0]['id'];
		$this->db->where("customer_id",$customer_id);
		$data["productids"]=($this->db->get("cart_table"))->result();
		
		$this->load->view("shopping/cart",$data);
	}
		else{

			redirect("./userlogin");
		}
}

public function cartproductadd(){
	$this->mainlogo();
	if(isset($this->session->user))
	{
		$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$count=1;
	$this->load->database();
	$this->db->select('id');
	$this->db->from('login_table');
	$this->db->where('username',$this->session->user);
	$reault_array = $this->db->get()->result_array();
	$customer_id= $reault_array[0]['id'];
	$this->db->where('customer_id',$customer_id);
	$this->db->where('product_id',$id);  
	$query = $this->db->get('cart_table');  
	if($query->num_rows() >=1)  
	{ 
		$this->cart();	 
	}
	else{
	$data=array(
		"customer_id"=>$customer_id,
		"product_id"=>$id,
		"quantity"=>$count
	);
	$this->db->insert("cart_table",$data);
	$this->cart();
}
	}
	else{
		$this->userlogin();
		
	}
	
}
public function updatecart()
{
	if(isset($this->session->user))
	{
		$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
		$quantity=$this->input->post("quantity");
		$this->load->database();
		$this->db->where('id',$id);
		$data=array("quantity"=>$quantity);
		$this->db->update("cart_table",$data);
		$this->cart();
		
	
		
	}
	else{
		$this->userlogin();	
	}
}
public function deletecartproduct()
{
	if(isset($this->session->user))
	{
		$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
		$this->load->database();
		$this->db->where('id',$id);
		$this->db->delete("cart_table");
		$this->cart();
	}
		else{
			$this->userlogin();	
		}
	
	
		
	}


public function checkout()
{	$encodeid=$_GET["token"];
	$sum=base64_decode($encodeid);
	$this->load->database();
	$this->db->from('login_table');
	$this->db->where('username',$this->session->user);
	$reault_array = $this->db->get()->result_array();
	$customer_id= $reault_array[0]['id'];
	$customer_mailid=$reault_array[0]['e_mail'];
	 $this->db->where('customer_id', $customer_id);  
	$query = $this->db->get('cart_table');  
	if(isset($this->session->user))
	{ 
		
		if($query->num_rows() > 0)  
			{  
	   $address=$this->input->post("address");
	   $pincode=$this->input->post("pincode");
	   $phonenumber=$this->input->post("phonenumber");
	   $this->load->database();
	 
	   $this->db->from('login_table');
	   $this->db->where('username',$this->session->user);
	   $reault_array = $this->db->get()->result_array();
	   $customer_id= $reault_array[0]['id'];
		$customer_mailid=$reault_array[0]['e_mail'];
	   $orderdate=date('Y-m-d H:i:s');   
     $data=array("customer_id"=>$customer_id,
		 "customer_name"=>$this->session->user,
		 "ordered_date"=>$orderdate,
		 "address"=>$address,
		 "pincode"=>$pincode,
		 "contact"=>$phonenumber,
		 "e_mail"=>$customer_mailid,
		 "track_status"=>"start",
		 "total"=>$sum	
	);
	$this->db->insert("order_table",$data);

	$this->db->select("id");
	$this->db->from("order_table");
	$this->db->where("customer_name",$this->session->user);
	$reault_array = $this->db->order_by("id","desc")->get()->result_array();
	$order_id= $reault_array[0]['id'];
	
//$this->db->
	foreach($query->result_array() AS $row) {
		$product_id = $row['product_id'];
		$quantity=$row['quantity'];
		$this->db->from('product_table');
		$this->db->where('product_id',$product_id);
		$reault_array = $this->db->get()->result_array();
	
	    $offer_price=$reault_array[0]['offer_price'];
		$cost1= $reault_array[0]['cost'];
		if($offer_price==0)
		{
			$cost=$cost1;
		}
		else{
			$cost= $offer_price;
		}
		$product_quantity=$reault_array[0]['quantity'];
		$total=$cost*$quantity;
		$offer="";
		$quantity_delete=$product_quantity-$quantity;
		$data_quantity=array(
			'quantity'=>$quantity_delete
		);
		$this->load->database();
	    
		$this->db->from('login_table');
		$this->db->where('username',$this->session->user);
		$reault_array = $this->db->get()->result_array();
		$customer_id= $reault_array[0]['id'];
		$data=array("order_id"=>$order_id,
		"product_id"=>$product_id,
		"quantity"=>$quantity,
		"actual_cost"=>$cost,
		"offer"=>$offer,
		"total_price"=>$total);
		$this->db->insert("order_item_table",$data);
		$this->db->where('customer_id',$customer_id);
		$this->db->delete("cart_table");
		$this->db->where('product_id',$product_id);
		$this->db->update('product_table',$data_quantity);
	    redirect('./my_orders');
}
	}
else{
		$this->session->set_flashdata('carterror', 'NO PRODUCTS IN CART');     
		$this->cart();
	}
	}

else{
			$this->userlogin();	
		}

}



public function orders()
{
	$this->mainlogo();
	if(isset($this->session->admin))
	{		$data["orders"]=($this->db->get("order_table"))->result();
			$this->load->view("nav");
		$this->load->view("orders",$data);

	}
	else{
		$this->load->view("admin/index");
	}
	
}


public function orderedproducts()
{
	$this->mainlogo();	
	$encodeid=$_GET["token"];
		$id=base64_decode($encodeid);
	if(isset($this->session->admin))
	{
			$this->load->database();
			$this->db->where("order_id",$id);
		$data["orders"]=($this->db->get("order_item_table"))->result();
			$this->load->view("nav");
		$this->load->view("orders_view",$data);

	}
	else{
		$this->load->view("admin/index");
	}
}
public function start()
{
	$this->mainlogo();
	$encodeid=$_GET["token"];
	$id=base64_decode($encodeid);
	if(isset($this->session->admin))
	{		
		 $this->load->database();
		 $this->db->where("id",$id);
		 $reault_array = $this->db->get('order_table')->result_array();
         $status= $reault_array[0]['track_status'];
         if($status=="start"){
		 $data=array("track_status"=>"started");
		 }
		 if($status=="started")
		 {
		    $data=array("track_status"=>"DELIVERED");	 
		 }
		 $this->db->where("id",$id);
         $this->db->update("order_table",$data);
	     $this->orders();
	}
	else{
		$this->load->view("admin/index");
	}
}

public function buy_know()
{$this->mainlogo();
	if(isset($this->session->user))
	{$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
	
		   $name="cart";
	    $this->mainlogo();
		$this->load->database();
		$data["logo"]=($this->db->get("admin_table"))->result();
     	$this->db->where("name",$name);
	    $data["images"]=($this->db->get("top_images"))->result();
	   	$this->db->select('id');
		$this->db->from('login_table');
		$this->db->where('username',$this->session->user);
		$reault_array = $this->db->get()->result_array();
		$customer_id=$reault_array[0]['id'];
		$this->db->where("product_id",$id);
		$data["productids"]=($this->db->get("product_table"))->result();
		
		$this->load->view("shopping/buy_know",$data);
	}
		else{

			redirect("./userlogin");
		}

}	



public function aboutus()

{ $this->mainlogo();
	$this->load->database();
	$data["about"]=($this->db->get("about_us"))->result();
	$this->load->view("nav");
    $this->load->view("site_edit/about_us_view",$data);
}



public function edit_about()

{ $this->mainlogo();
	if(isset($this->session->admin))
	{
	$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
	
	$this->load->database();
	$this->db->where("id",$id);
	$data["about"]=($this->db->get("about_us"))->result();
	
	$this->load->view("site_edit/aboutus",$data);
	}
	else{
		$this->load->view("admin/index");

	}
}
public function update_aboutus()
{
	$this->mainlogo();
	if(isset($this->session->admin))
	{
		$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$this->mainlogo();
	if($this->input->post("submit")){
	$text=$this->input->post("text");
	$data=array(
		
		   "text"=>$text,
		  
	);
	$this->load->database();
	$this->db->where("id",$id);
	$this->db->update("about_us",$data);

	$config['upload_path']   ="./assets/slider"; 
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$this->load->library('upload');  
	$this->load->helper("url"); 
	$this->upload->initialize($config); 
	if ($this->upload->do_upload('userfile')) { 
	   $data =$this->upload->data();
		$data["file_name"];
		 
		$data["file_path"];
		$this->load->database();
	    	$data=$this->db->query("UPDATE `about_us` SET `image`='".base_url()."/assets/slider/".$data["file_name"]."' WHERE `id`='$id' ");
	}
			echo "<br><br><br><br><center><h1> UPLOADED SUCCESSFULLY</h1><br><br><a href='./aboutus'>BACK</a></center>"; 
				
			}
			else{
				echo "<br><br><br><br><center><h1>ERROR ON UPDATEING</h1><br><br><a href='./aboutus'>BACK</a></center>"; 
					
			}	
}
	
	else{
		$this->load->view("admin/index");
	}
}

public function my_orders()
{$this->mainlogo();
	if(isset($this->session->user))
	{
	    $this->mainlogo();
		$this->load->database();
		$data["logo"]=($this->db->get("admin_table"))->result();
      	$this->db->select('id');
		$this->db->from('login_table');
		$this->db->where('username',$this->session->user);
		$reault_array = $this->db->get()->result_array();
		$customer_id= $reault_array[0]['id'];
		$this->db->where('customer_id', $customer_id);  
		$data['orderids'] = $this->db->order_by('id', 'DESC')->get('order_table')->result();
		
	    	$this->load->view("shopping/my_orders",$data);
	}
		else{

			redirect("./userlogin");
		}

}	


public function my_orders_view()
{
	$this->mainlogo();
	if(isset($this->session->user))
	{   
		$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
		$this->load->database();
		$data["logo"]=($this->db->get("admin_table"))->result();
		$this->db->where("id",$id);
		$data['product_status']=$this->db->get('order_table')->result();
		$this->db->where("order_id",$id);
		$data['productids'] = $this->db->get('order_item_table')->result();
        $this->load->view("shopping/my_orders_view",$data);

	}

		else{

			redirect("./userlogin");
		}

}
public function user_details()
{
	$this->mainlogo();
	if(isset($this->session->user))
	{
	$this->load->database();
	$this->db->where('username',$this->session->user);
	$data['information']=($this->db->get('login_table'))->result();
	$this->load->view("shopping/user_details",$data);
	}
	
	else{

		redirect("./userlogin");
	}

}
public function user_details_edit()
{
	$this->mainlogo();
	if(isset($this->session->user))
	{
	$this->load->database();
	$this->db->where('username',$this->session->user);
	$data['information']=($this->db->get('login_table'))->result();
	$this->load->view("shopping/user_details_edit",$data);
	}
	
	else{

		redirect("./userlogin");
	}

}
public function uptade_user_details()
{
	$this->mainlogo();
	if(isset($this->session->user))
	{$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
		
		//$username=$this->input->post('username');
		$password=$this->input->post('old_password');
		$new_password=$this->input->post('new_password');
		$confirm_new_password=$this->input->post('confirm_new_password');
		$checking=array('username'=>$this->session->user,
		"password"=>$password);
		$this->load->database();
		$this->db->where($checking);
		$query=$this->db->get('login_table');
		if($query->num_rows()<=0)  
			{ 
				$this->session->set_flashdata('user_detail_password1', 'password  NOT Matching ');     
				redirect('./user_details');
			  
			}
     else if($new_password!=$confirm_new_password)
	   {
		$this->session->set_flashdata('user_detail_password', 'password  NOT Matching ');     
		redirect('./user_details');
       }
	 else{
		$insert=array(
			"password"=>$new_password
		);
	  $this->db->where('id',$id);
		$this->db->update("login_table",$insert);
		redirect("./userlogin");
	}
	
	}
	else{

		redirect("./userlogin");
	}
}



public function uptade_user_details_edit()
{
	$this->mainlogo();
	if(isset($this->session->user))
	{$encodeid=$_GET["token"];
		$id=base64_decode(base64_decode(base64_decode($encodeid)));
		
		$username=$this->input->post('username');
		$password=$this->input->post('old_password');
		$new_password=$this->input->post('new_password');
		$confirm_new_password=$this->input->post('confirm_new_password');
		$type=$this->input->post('type');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$address=$this->input->post('address');
		$pincode=$this->input->post('pincode');
		$this->load->database();
		$this->db->where('username', $username);
		$query = $this->db->get('login_table');
	
	if($query->num_rows()<=0)
	{
		$this->session->set_flashdata('user_detail_name', 'User Name is Already Taken ');     
		redirect('./user_details_edit');
	
	}
	else{
		$insert=array(
			"username"=>$username,
			"type"=>$type,
			"contact"=>$contact,
			"e_mail"=>$email,
			"address"=>$address,
			"pincode"=>$pincode
		);
	  $this->db->where('id',$id);
		$this->db->update("login_table",$insert);
		redirect("./user_details_edit");
	}
	
	}
	else{

		redirect("./userlogin");
	}
}






public function userlogout()
{
	if($this->session->user)
	{
		unset($_SESSION["user"]);
		redirect("./index");
	}

}


public function buynow()
{$this->mainlogo();
	$this->load->database();
	$encodeid=$this->input->get("token");
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	$product["logo"]=$this->db->get("admin_table")->result();
	$product["thisproduct"]=($this->db->get_where("product_table",array("product_id"=>$id)))->row();
	$product["quantity"]=$this->input->post("quantity");
	$this->load->view("shopping/buy_now",$product);
}

public function buy_now_checkout()
{ $this->mainlogo();
	if($this->session->user){
	$encodedata=$this->input->post("data");
	$data=base64_decode(base64_decode(base64_decode(base64_decode($encodedata))));
	$string=explode("|-|",$data);
	$quantity=$string[0];
	$cost=$string[1];
	$pid=$string[2];
	$totalquantity=$string[3]; 
	echo $this->session->userid;
	if(is_numeric($quantity)&& is_numeric($cost))
	{
		$totalcost=$cost*$quantity;
		$dbdata=array("customer_id"=>$this->session->userid,
		"customer_name"=>$this->session->user,
		"ordered_date"=>date("Y-m-d"),
		"pincode"=>$this->input->post("pincode"),
		"contact"=>$this->input->post("phonenumber"),
		"address"=>$this->input->post("address"),
		"track_status"=>"start",
		"total"=>$totalcost,
	);
	$this->load->database();
	$this->db->insert("order_table",$dbdata);
	$lastid=$this->db->insert_id();
	$dbdata2=array(
		"order_id"=>$lastid,
		"product_id"=>$pid,
		"quantity"=>$quantity,
		"actual_cost"=>$cost,
		"total_price"=>$totalcost,
	);
	$this->db->insert("order_item_table",$dbdata2);
	$actualquantity=$totalquantity-$quantity;
	$this->db->set("quantity",$actualquantity);
	$this->db->where("product_id",$pid);
	if($this->db->update("product_table"))
	{
		redirect("./my_orders");
	}
	}
}
else{
	redirect("./userlogin");

}
}



public function review()
{
	$this->mainlogo();
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	
	if($this->session->user){
	   $review=$this->input->post('review');
	  $user=$this->session->user;
	   $data=array('product_id'=>$id,
	   'user'=>$user,
	   'review_text'=>$review);
	   $this->load->database();
	   $this->db->insert('review_table',$data);
	   redirect("./my_orders");
	}
	else{
		redirect("./my_orders");
	}
}
public function viewuserfeedback()
{
	$this->mainlogo();
	$encodeid=$_GET["token"];
	$id=base64_decode(base64_decode(base64_decode($encodeid)));
	
	if($this->session->admin)
	{
		$this->load->database();
		$this->db->where('product_id',$id);
		$data['userfeed_back']=($this->db->get('review_table'))->result();
        $this->load->view('user_feedback',$data);

	}
	else{
		$this->load->view("admin/index");
		}
	
}
















}