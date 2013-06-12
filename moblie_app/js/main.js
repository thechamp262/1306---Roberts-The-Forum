$(function(){
	
	console.log("ready");
	console.log("Hello");
	
	var sampleImages = $.getJSON("http://developer.echonest.com/api/v4/artist/images?api_key=HOYPYS9L91ACFQXGM&id=ARH6W4X1187B99274F&format=json&results=8&start=0&license=unknown", function(data){
		var data1 = data.response.images;
		console.log(data1[1]);
		$.each(data1, function(){
		//$("#topArtist").append("");
		//console.log(data1)	
		});
	});
	//console.log(sampleImages);
	
});