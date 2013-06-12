<?php

class ForumModel{
	
	private $db;

	public function __construct($dsn, $user, $pass){
	
		$this->db = mysql_connect("127.0.0.1", "root", "root");
		
		if(!$this->db){
			echo ("Cannot Connect:");
		};
		
	}//ends __construct
	
	public function joinSite($userName,$email,$pass){
	
		mysql_select_db("theforum", $this->db);
		$sql = " INSERT INTO userInfo(userName,userEmail,userPass) VALUES ('$userName', '$email', MD5('$pass'))";
		
		mysql_query($sql, $this->db);

		
	}
}

?>
