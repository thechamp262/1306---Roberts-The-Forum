$(function(){
	
	console.log("ready");
	
	/* the artist function will randomly generate an artist to be displayed 
	on the home pages artist pics and Latest Reviews;*/
	var artistNum = "";
	
	var artist = function(){
	
	var artNum = Math.floor((Math.random()*10)+1);	
		
		if(artNum == 1){
			artistNum = "Eminem";
		}
		if(artNum == 2){
			artistNum = "Queen";
		}
		if(artNum == 3){
			artistNum = "Adele";
		}
		if(artNum == 4){
			artistNum = "Lady GaGa";
		}
		if(artNum == 5){
			artistNum = "Maroon 5";
		}
		if(artNum == 6){
			artistNum = "Andrew LLoyd Webber";
		}
		if(artNum == 7){
			artistNum = "Drake";
		}
		if(artNum == 8){
			artistNum = "Kanye West";
		}
		if(artNum == 9){
			artistNum = "Blink182";
		}
		if(artNum == 10){
			artistNum = "Fun";
		}
	};//ends artist function
			
	/* The grabPics function will gathers top artist photos from the echonet api to be placed 
	on the home screen */
	
	var grabPics = function(){
		artist();
		var sampleImages = $.getJSON("http://developer.echonest.com/api/v4/artist/images?api_key=HOYPYS9L91ACFQXGM&name="+artistNum+"&format=json&results=4&start=0&license=unknown", function(data){
			var data = data.response.images;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#topArtist").append("<img length='70px' width='70px' class='topArtistPic' src='"+data[i].url+"'</img>");
				i++;
			};
		});
	}; //ends grabpics
	
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
	
	var grabReviews = function(){
		
		var review = $.getJSON("http://developer.echonest.com/api/v4/artist/reviews?api_key=HOYPYS9L91ACFQXGM&name="+artistNum+"&format=json&results=2&start=0", function(data){
		
			var data = data.response.reviews;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#latestReviews").append("<article class='reviews'><h4>"+data[i].name+"</h4> <img width='#' height='#' class='reviewPic' src='"+data[i].image_url+"'/><p class='reviewExample'>"+data[i].summary+"</p> <p><a href='"+data[i].url+"'>Read More!</a></p></article>");
	i++;
			};

			
		});
	};
	grabPics();
	grabNews();
	grabReviews();

	
});