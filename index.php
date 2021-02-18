<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display Webcam Stream</title>
 
<style>
#container {
	margin: 0px auto;
	width: 500px;
	height: 375px;
	border: 10px #333 solid;
}
#videoElement {
	width: 500px;
	height: 375px;
	background-color: #666;
}
</style>
</head>
 
<body>
<div id="container">
	<video autoplay="true" id="videoElement">
		
	</video>
	<button onclick="snap()">snap</button>
	<img src="" id="snapped">
</div>



<script>
	if ('mediaDevices' in navigator && 'getUserMedia' in navigator.mediaDevices) {
	  alert("Let's get this party started")
	}

	var video = document.querySelector("#videoElement");
	if (navigator.mediaDevices.getUserMedia) {
	  	navigator.mediaDevices.getUserMedia({ video: true })
	    .then(function (stream) {
	      video.srcObject = stream;
	    })
	    .catch(function (err0r) {
	      console.log("Something went wrong!");
	    });
	}

	function snap(){
		var vid = document.getElementById("videoElement");
		alert(vid.videoWidth );

		var canvas = document.createElement('canvas');
		canvas.width = vid.videoWidth;
		canvas.height = vid.videoHeight;
		var ctx = canvas.getContext('2d');
		ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
		var dataURI = canvas.toDataURL('image/jpeg');
		alert(dataURI);

		var imgSnap = document.getElementById("snapped");
		imgSnap.src = dataURI;
	}


</script>
</body>
</html>
