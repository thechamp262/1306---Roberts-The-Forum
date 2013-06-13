<?php

class ForumModel{
	
	private $db;

	public function __construct($dsn, $user, $pass){
	
		$this->db = mysql_connect("127.0.0.1", "root", "root");
		
		if(!$this->db){
			echo ("Cannot Connect:");
		};
		
	}//ends __construct
	
	public function joinSite($userName,$email,$pass,$favArtist){
	
		mysql_select_db("theforum", $this->db);
		$sql = " INSERT INTO userInfo(userName,userEmail,userPass,favArtist) VALUES ('$userName', '$email', MD5('$pass'), '$favArtist')";
		
		mysql_query($sql, $this->db);

		
	}
	
	public function userLogin($userN, $password){
	
		mysql_select_db("theforum", $this->db);
		
		$sql = "SELECT * FROM userInfo WHERE userName = '$userN' AND userPass = MD5('$password')";
		
		$dataQuery = mysql_query($sql, $this->db);
		
		$row = mysql_num_rows($dataQuery);	
		$success = $_SESSION["username"] = $userN;
		if($row != 0){
			return $success;
		}	
	}
	
	public function showProfile(){
		
	}
	
	public function updateProfile($userName1, $userEmail, $userBio){
	
		mysql_select_db("theforum", $this->db);
	}
}

?>
