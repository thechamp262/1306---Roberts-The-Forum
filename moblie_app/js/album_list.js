$(function(){
	/*gathering album artwork from the last fm api, it also links them to the album info pag of last fm if they click on the photo*/
	var getArt = function(){
		var art = "http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist="+$("#favArtist").text()+"&limit=25&api_key=0346c4a41800d372d38538c0a24bfb6a";
		$.getJSON(art,{
			format: "json"
		})
		.done(function(data){
			data = data.topalbums.album;
			//console.log(data);
			var i = 0;
			while(i < data.length){
				$("#albums").append("<section class='all_albums'><a href='"+data[i].url+"'><img id='album_artwork' src='"+data[i].image[2]["#text"]+"'></a></section>");
				i++;
			};
			//console.log(data[0]);
		});
	}
	getArt();	
})
