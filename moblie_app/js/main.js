$(function(){
	
	console.log("ready");
		
	/* The grabPics function will gathers top artist photos from the echonet api to be placed 
	on the home screen */
	
	var grabPics = function(){
		var sampleImages = $.getJSON("http://developer.echonest.com/api/v4/artist/images?api_key=HOYPYS9L91ACFQXGM&name=AliciaKeys&format=json&results=8&start=0&license=unknown", function(data){
			var data = data.response.images;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#topArtist").append("<img length='50px' width='50px' class='topArtistPic' src='"+data[i].url+"'</img>");
				i++;
			};
		});
	}; //ends grabpics
	
	var grabNews = function(){
		var theNews = $.getJSON("http://developer.echonest.com/api/v4/artist/news?api_key=HOYPYS9L91ACFQXGM&name=AliciaKeys&format=json&results=3&start=0", function(data){
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
		var review = $.getJSON("http://developer.echonest.com/api/v4/artist/reviews?api_key=HOYPYS9L91ACFQXGM&name=AliciaKeys&format=json&results=2&start=0", function(data){
		
			var data = data.response.reviews;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#latestReviews").append("<article class='reviews'><h4>"+data[i].name+"</h4> <img width='#' height='#' class='reviewPic' src='"+data[i].image_url+"'/><p class='reviewExample'>"+data[i].summary+"</p> <p><a href='"+data[i].url+"'>Read More!</a></p></article>");
	i++;
			};

			
		});
	};
	grabReviews()
	grabPics();
	grabNews();
	
});