<?php

class PageView{
	public function showHeader(){
		include("views/header.inc");
	}
	public function showFooter(){
		include("views/footer.inc");
	}
	public function showArtistInfo(){
		include("views/artistInfo.inc");
	}
	public function showHome(){
		include("views/home.inc");
	}
	public function showLogin(){
		include("views/login.inc");
	}
	public function showLogout(){
		include("views/logout.inc");
	}
}


?>