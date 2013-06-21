<?php

class ForumModel{
	
	private $db;

	public function __construct(){
	
		$this->db = mysql_connect("127.0.0.1", "root", "root");
		
		if(!$this->db){
			echo ("Cannot Connect:");
		};
		
	}//ends __construct
	
	/*********** the join site function gathers info being inputed by the user and sends it to the database.**********/
	
	public function joinSite($userName,$email,$pass,$favArtist, $firstName){
	
		mysql_select_db("theforum", $this->db);
		$sql = " INSERT INTO userInfo(userName,userEmail,userPass,favArtist,firstName) VALUES ('$userName', '$email', MD5('$pass'), '$favArtist', '$firstName')";
		
		mysql_query($sql, $this->db);

		
	}//ends the joinsite function 
	
	/*************the user login function gathers the pass and username of the user and checkd to see if it matches a username and pass in the database if it does the users is authenticated and logged in**************/
	
	public function userLogin($userN, $password){
	
		mysql_select_db("theforum", $this->db);
		
		$sql = "SELECT * FROM userInfo WHERE userName = '$userN' AND userPass = MD5('$password')";
		
		$dataQuery = mysql_query($sql, $this->db);
		
		$row = mysql_num_rows($dataQuery);	
		$success = $_SESSION["username"] = $userN;
		$success_pass = $_SESSION["password"] = MD5($password);
		
		if($row != 0){
			return $success;
			return $success_pass;
		}	
	}//ends userLogin function 
	
	/***************the checkUserNameID function checks to makesure the username that the user is inputing is not already taken by another user***************/
	
	public function checkUserNameID($userCheck){
		mysql_select_db("theforum", $this->db);
		$sql = "SELECT userName AND userPass FROM userInfo WHERE userName = '$userCheck'";
		$dataQuery = mysql_query($sql, $this->db);
		$theCheck = mysql_num_rows($dataQuery);
		
		if($theCheck != 0){
			return false;	
		}else{
			return true;
		}
		
	}
	
	public function obtainProfileInfo($session){
		mysql_select_db("theforum", $this->db);
		
		$sql = "SELECT * FROM userInfo WHERE userName = '$session'";
		
		$dataQuery = mysql_query($sql, $this->db);
		
		$row = mysql_num_rows($dataQuery);
		
		$info = mysql_fetch_assoc($dataQuery);
		
		return $info;
	}
	
	public function updateProfile($userEmail, $userBio, $favArtist, $ID){
	
		mysql_select_db("theforum", $this->db);
		
		$sql = "UPDATE userInfo SET userEmail= '$userEmail', userBio= '$userBio', favArtist= '$favArtist' Where userID= '$ID' ";
		
		$query = mysql_query($sql, $this->db);
		
		if(!$query){
			return (mysql_error());
		}
	}
	
}

?>
