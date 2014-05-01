<!DOCTYPE html>
<html>
  <head>
  <title>Traveling in Singapore</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  
    <script src="bootstrap.min.js"></script>
    <script src="holder.js"></script>
    <link href="bootstrap.css" rel="stylesheet">
 	<link href="bootstrap.min.css" rel="stylesheet">
 	<link href="carousel.css" rel="stylesheet">
  	<link href="586proj4.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdC7myLTe-_LtkvZRsgJlTM5tIknnBMxU&sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="jquery.tweet-linkify.js"></script>

    <script type="text/javascript">
    //Google API
    var map;
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(1.3000,103.8000),
          zoom: 11
        };
        map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
            
        var marker1 = new google.maps.Marker({
    	position: new google.maps.LatLng(1.3151,103.8162),
    	map: map,
   	 title:"Botanical Gardens"
    });

    var contentString1 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="#botanic">Botanic Gardens</a></h1>'+
      '</div>';


  var infowindow1 = new google.maps.InfoWindow({
      content: contentString1,
  });
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow1.open(map,marker1);
  });
  
    var marker2 = new google.maps.Marker({
    	position: new google.maps.LatLng(1.2836,103.8442),
    	map: map,
   	 title:"Chinatown"
    });
    var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="#chinatown">Chinatown</a></h1>'+
      '</div>';
  var infowindow2 = new google.maps.InfoWindow({
      content: contentString2,
  });
  google.maps.event.addListener(marker2, 'click', function() {
    infowindow2.open(map,marker2);
  });
  
  var marker3 = new google.maps.Marker({
    	position: new google.maps.LatLng(1.403782,103.79414),
    	map: map,
   	 title:"Singapore Zoo"
    });
    var contentString3 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="#zoo">Singapore Zoo</a></h1>'+
      '</div>';
  var infowindow3 = new google.maps.InfoWindow({
      content: contentString3,
  });
  google.maps.event.addListener(marker3, 'click', function() {
    infowindow3.open(map,marker3);
  });
  
  var marker4 = new google.maps.Marker({
    	position: new google.maps.LatLng(1.248,103.830),
    	map: map,
   	 title:"Sentosa"
    });
    var contentString4 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="#sentosa">Sentosa</a></h1>'+
      '</div>';
  var infowindow4 = new google.maps.InfoWindow({
      content: contentString4,
  });
  google.maps.event.addListener(marker4, 'click', function() {
    infowindow4.open(map,marker4);
  });
    }    
      google.maps.event.addDomListener(window, 'load', initialize);

function pageReady() { //Twitter
console.log("pageReady()");
$('p.tweet').tweetLinkify();
$('div.users').tweetLinkify();
};

  var html = "" //Flickr
    var apiurl = "http://api.flickr.com/services/feeds/photos_public.gne?tags=singapore&tagmode=any&format=json&jsoncallback=?"
    $(document).ready(function(){
            console.log("document ready")
            $.getJSON(apiurl,function(json){
                console.log(json);
                $.each(json.items,function(i,data){  
                    html += '<img src ="' + data.media.m + '">'
                    });
                console.log(html);
                $("#results").append(html);
            });   
    });
    </script>
  </head>
  <body>
<h1>Traveling in Singapore</h1>  
<br>
 <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle top-images" src="images/Sing_language.jpg" alt="Singapore Flag">
          <h3>Languages</h3>
          <p>The official languages of Singapore are English, Malay, Mandarin Chinese, and Tamil.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle top-images" src="images/Sing_location.jpg" alt="Singapore Location">
          <h3>Location</h3>
			<p>Singapore is located in Southeast Asia. It is close of Malaysia, Thailand, and Indonesia.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle top-images" src="images/sing_weather.JPG" alt="Singapore Climate">
          <h3>Climate</h3>
          <p>Singapore is hot and wet all year round, usually between 20 degrees and 30 degrees Celsius.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      </div>
        <hr class="featurette-divider">
<h2>Places to Go</h2> 
<br>       
<div id="map-canvas"></div>
 <div class="container marketing">
      <hr class="featurette-divider">
      <div class="row featurette" id="botanic">
        <div class="col-md-7">
          <h2 class="featurette-heading">Botanic Gardens</h2>
          <p class="lead">The Singapore Botanic Gardens is a 183 acre or 74 hectare botanical 
          garden. It is open daily from 5 am to midnight and the admission is free. The main
          attraction is the National Orchid Garden that contains a large collection of different 
          orchids. Other attractions are a small rainforest, the Evolution Garden and the Jacob
          Ballas Children's Garden.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive orchids" src="images/orchids_botanic.jpg" alt="Botanic Gardens">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette" id="chinatown">
        <div class="col-md-5">
          <img class="featurette-image img-responsive chinatown" src="images/Chinatown.JPG" alt="Chinatown">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Chinatown</h2>
          <p class="lead">The Chinatown neighborhood features many Chinese cultural elements
           parts of Chinatown are also national heritage sites. Chinatown is divided into 
           several areas. The Kreta Ayer area includes the Chinatown Heritage Centre, Chinatown
           Food Street, and the Chinatown Night Market. The Telok Ayer area contains many Chinese 
           temples and Muslim mosques. The Tanjong Pagar area is known for its bridal saloons. 
           The Bukit Pasoh area is the location of several past and present Chinese cultural and
           clan associations. The Ann Siang Hill area is a popular hangout for the younger generation
           and contains many shops and cafes.</p>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette" id="sentosa">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sentosa</h2>
          <p class="lead">Sentosa is a popular island resort. It is home to Universal Studios
          Singapore and has a number of attractions including beaches, the Tiger Sky Tower, and
          Underwater World, an oceanarium.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/sentosa_beach.jpg" alt="Sentosa">
        </div>
      </div>
      <hr class="featurette-divider">   
   	  <div class="row featurette" id="zoo">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/sing_zoo.jpg" alt="Singapore Zoo">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Singapore Zoo</h2>
          <p class="lead">The Singapore Zoo, locally known as the Mandai Zoo, is a 69 acre or 28 hectares zoo that contains
          about 315 species of animals including elephants, lions, and monkeys. It is known for being one of the most 
          beautiful wildlife parks in the world.</p>
        </div>
       </div>
       <hr class="featurette-divider">
    <div class="video">
		<iframe src="//www.youtube-nocookie.com/embed/P_q3BdrFsLI"></iframe>
    </div>
 <hr class="featurette-divider">
 <div class="bottom">
 	<div class="row">
 		<div class="col-md-4"> 
 			<h2>Tweets about Singapore</h2>    
				<div class="twitter">
					<?php
					require_once('TwitterAPIExchange.php');
					$settings = array(
   					 'oauth_access_token' => "21348390-cgfnFcfsrz5lM4ZHBifHdkyns6MOiuN1XqSTZNhMh",
    				 'oauth_access_token_secret' => "nDUmRjKGFPqiLWFBHJMwKT71ER1sYxpcAk6isIzQPx6kA",
    				 'consumer_key' => "8s94f8ezz8WnS4v8RtXe8U9F2",
    				 'consumer_secret' => "LM4kwWeMK2PqCkkqn9DSEGWuGQ8FY6fjUYRasVazpcLpan8xY5"
						);

					$url = 'https://api.twitter.com/1.1/search/tweets.json';
					$getfield = '?q=%23travel%20%23singapore&count=10';
					$requestMethod = 'GET';
					$twitter = new TwitterAPIExchange($settings);

					$string = json_decode($twitter->setGetfield($getfield)
						->buildOauth($url, $requestMethod)
						->performRequest(),$assoc = TRUE);
		
					foreach($string['statuses'] as $items)
					{
						$tweetText = $items['text'];
						$users = $items['user'];
						echo "<div class='1tweet'>";
						echo "<img class='tweetUser' src='" . $users['profile_image_url'] . "'>";
						echo "<p class='uname'> @ " .$users['screen_name']. ":</p><br>";
						echo "<p>" .$tweetText. "</p>";
						echo " ".$items['created_at']. "<br />";
						echo "</div>";
						echo "<hr>";
					}
					echo '<script>pageReady();</script>';
				?>
			</div>
		</div>
	<div class="col-md-8">
		<h2>Singapore Flickr Images</h2> 
		<div id="results"></div>
	</div>
</div>
</div>

<!--Sources
<p><a href="http://en.wikipedia.org/wiki/Singapore">Singapore Wikipedia</a></p>
<p><a href="http://www.lonelyplanet.com/singapore">Singapore Lonely Planet</a></p>
<p><a href="http://www.zoo.com.sg">Singapore Zoo</a></p>
<p><a href="http://www.sentosa.com.sg">Sentosa</a></p>-->
<br>  
</div>
</div>
   
  </body>
</html>
