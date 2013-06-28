$(function(){
		
	var artist = $('#userTopArtist').text();
	
	/* The grabPics function will gathers top artist photos from the echonet api to be placed 
	on the home screen */
	var grabPics = function(){
		var Images = $.getJSON("http://developer.echonest.com/api/v4/artist/images?api_key=HOYPYS9L91ACFQXGM&name="+artist+"&format=json&results=10&start=0&license=unknown", function(data){
			var data = data.response.images;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#topPics").append("<img length='70px' width='70px' class='samplePics' src='"+data[i].url+"'</img>");
				i++;
			};
		});
	}; //ends grabpics
	
	/* the grabNews function grabs all of the news info from the api based on a random artist being selected in the artist function */
	var grabNews = function(){
		
		var theNews = $.getJSON("http://developer.echonest.com/api/v4/artist/news?api_key=HOYPYS9L91ACFQXGM&name="+artist+"&format=json&results=3&start=0", function(data){
			var data = data.response.news;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#topNews").append("<article class='headline'> <h3 id='headlineTitle'>"+data[i].name+"</h3><p>"+data[i].summary+"</p><p><a href='"+data[i].url+"'>Read More!</a></p></article>");
				i++;
			};

		});//ends theNews	
	};//ends grabNews function
	
	/* the grabReviews function grabs the lastest review from the echonest api*/
	
	var grabReviews = function(){//might get it's own page 
		
		var review = $.getJSON("http://developer.echonest.com/api/v4/artist/reviews?api_key=HOYPYS9L91ACFQXGM&name="+artist+"&format=json&results=1&start=0", function(data){
		
			var data = data.response.reviews;
			//console.log(data[0]);
			var i = 0;
			while(i < data.length){
				$("#latestReviews").append("<article class='headline'><h4 class='reviewHeadline'>"+data[i].name+"</h4><p class='reviewExample'>"+data[i].summary+"</p> <p><a href='"+data[i].url+"'>Read More!</a></p></article>");
	i++;
			};

			
		});
	};


	grabPics();
	grabNews();
	grabReviews();
})