$(function(){
	
	//console.log("ready");
	
	var artistNum = "";//stores the artist name
	
	/* the artist function will randomly generate an artist to be displayed 
	on the home pages artist pics and Latest Reviews;*/	
	var artist = function(){
	
	var artNum = Math.floor((Math.random()*31)+1);/*this var will randomly calculate a num to be used in the if/else if statements below*/	

		if(artNum == 1){
			artistNum = "Eminem";
		}else if(artNum == 2){
			artistNum = "Brad Paisley";
		}else if(artNum == 3){
			artistNum = "Adele";
		}else if(artNum == 4){
			artistNum = "Lady GaGa";
		}else if(artNum == 5){
			artistNum = "Maroon 5";
		}else if(artNum == 6){
			artistNum = "Pit Bull";
		}else if(artNum == 7){
			artistNum = "Drake";
		}else if(artNum == 8){
			artistNum = "Kanye West";
		}else if(artNum == 9){
			artistNum = "Lil Wayne";
		}else if(artNum == 10){
			artistNum = "Fun";
		}else if(artNum == 11){
			artistNum = "Jay-z";
		}else if(artNum == 12){
			artistNum = "Kendrick Lamar";
		}else if(artNum == 13){
			artistNum = "justin timberlake";
		}else if(artNum == 14){
			artistNum = "Lupe Fiasco";
		}else if(artNum == 15){
			artistNum = "Selena Gomez";
		}else if(artNum == 16){
			artistNum = "Rihanna";
		}else if(artNum == 17){
			artistNum = "Miley Cyrus";
		}else if(artNum == 18){
			artistNum = "Bruno Mars";
		}else if(artNum == 19){
			artistNum = "Taylor Swift";
		}else if(artNum == 20){
			artistNum = "Tim Mcgraw";
		}else if(artNum == 21){
			artistNum = "Katy Perry";
		}else if(artNum == 22){
			artistNum = "James Blunt";
		}else if(artNum == 23){
			artistNum = "The Beatles";
		}else if(artNum == 24){
			artistNum = "Michael Jackson";
		}else if(artNum == 25){
			artistNum = "Pink Floyd";
		}else if(artNum == 26){
			artistNum = "Mariah Carey";
		}else if(artNum == 27){
			artistNum = "Alicia Keys";
		}else if(artNum == 28){
			artistNum = "Queen";
		}else if(artNum == 29){
			artistNum = "U2";
		}else if(artNum == 30){
			artistNum = "Bruce Springsteen";
		}else if(artNum == 31){
			artistNum = "Britney Spears";
		}
	};//ends artist function
			
	/* The grabPics function will gathers top artist photos from the echonet api to be placed 
	on the home screen */
	
	var grabPics = function(){
		artist();
		var sampleImages = $.getJSON("http://developer.echonest.com/api/v4/artist/images?api_key=HOYPYS9L91ACFQXGM&name="+artistNum+"&format=json&results=5&start="+Math.floor((Math.random()*30)+1)+"&license=unknown", function(data){
			var data = data.response.images;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#topArtist").append("<img class='samplePics' length='70px' width='70px' class='topArtistPic' src='"+data[i].url+"'</img>");
				$("#topArtist1").append("<img class='samplePics' length='70px' width='70px' class='topArtistPic' src='"+data[i].url+"'</img>");//appending pics on the sign-up page
				i++;
			};
		});
	}; //ends grabpics
	
	/* the grabNews function grabs all of the news info from the api based on a random artist being selected in the artist function */
	
	var grabNews = function(){
	
		$("#topNews").append("<h2 id='latestReviewsLabel'>Latest News Involving "+artistNum+":</h2>");
		
		var theNews = $.getJSON("http://developer.echonest.com/api/v4/artist/news?api_key=HOYPYS9L91ACFQXGM&name="+artistNum+"&format=json&results=3&start=0", function(data){
			var data = data.response.news;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#topNews").append("<article class='headline'> <h3>"+data[i].name+"</h3><p>"+data[i].summary+"</p><p><a href='"+data[i].url+"'>Read More!</a></p></article>");
				i++;
			};

		});//ends theNews	
	};//ends grabNews function
	
	grabPics();
	grabNews();
});