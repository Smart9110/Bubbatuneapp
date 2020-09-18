<!DOCTYPE html>
<html>
<title>Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('TruQueens Images/IMG_0308(RDY).jpg');
    min-height: 100%;
}

</style>
<body>

<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
     <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
      <a href="sitemap.xml" class="w3-bar-item w3-button w3-right">SITEMAP</a>
     <a href="about.html" class="w3-bar-item w3-button w3-right">ABOUT</a>
        <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="mobama.html" class="w3-bar-item w3-button">Story Michelle Obama</a>
        <a href="bknowles.html" class="w3-bar-item w3-button">Story Beyonce Knowles</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
    </div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>Reginald K. Sapp</b></h1>
    <p>Prelaw and Web Designer.</p>
     </header>

  <!-- Portfolio Section -->
  
  <div class="w3-padding-32 w3-content" id="portfolio">
    <h2 class="w3-text-grey">My Portfolio</h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="TruQueens Images/IMG_0308(RDY).jpg" style="width:100%">
        <img src="TruQueens Images/IMG_0188.jpg" style="width:100%">
        <img src="TruQueens Images/Depositphotos_1755374_original.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="TruQueens Images/IMG_0381.jpg" style="width:100%">
        <img src="TruQueens Images/Scanned Image 155735(500x500).jpg" style="width:100%">
        <img src="TruQueens Images/Scanned Image 160239(500x500).jpg" style="width:100%">
        <img src="/#" style="width:100%">
      </div>


      <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <h2>About</h2>
    <hr class="w3-opacity">
    <p>Hi my name is Reginald K. Sapp. I am the CEO and Owner of TruQueen website and Uhinkle .com website. TruQueen is for your 
enjoyment and understanding that women around the world are the TruQueen of a man family. This website is set up to receive
your comments,concerns or replies.  We greatly appreciate anything that you have to say and share.  Please feel free to leave me a message
and we will discuss your topic as needed.<br>Thank you<br>  Reginald K. Sapp CEO and Owner.</p>
    
    <div class="w3-row w3-center w3-dark-grey w3-padding-16 w3-section">
      <div class="w3-quarter w3-section">
          </div>
    </div>

    
    <!-- Testimonials -->
    <h3 class="w3-padding-24"></h3>
    
    <!-- Grid for pricing tables -->
    
    <h3 class="w3-padding-16"></h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
          </div>

      <div class="w3-half">
          </div>
     <!-- End Grid/Pricing tables -->
    </div>
    
  <!-- End About Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
    <h2>Contact Me</h2>
    <hr class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Clinton, Maryland</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 301 297-5060</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: Reginald@Uhinke.com</p>
    </div>
    
     <!-- Google Map -->
    <div id="uride" class="w3-greyscale-max" style="width:100%;height:300px;margin:36px 0;"></div> 
   <script>

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var origin_place_id = null;
        var destination_place_id = null;
        var travel_mode = 'WALKING';
        var map = new google.maps.Map(document.getElementById('uride'), {
          //mapTypeControl: false,
          'mapTypeControl' :true,
          'draggable': false,
          'scrollwheel': false,
          //mapTypeId:google.maps.MapTypeId.TERRAIN,
           //mapTypeControl:
          center: {lat: 38.89511, lng: -77.03637},
          zoom: 9
          
        });
        
         var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        directionsDisplay.setMap(map);

        var origin_input = document.getElementById('origin-input');
        var destination_input = document.getElementById('destination-input');
       
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(origin_input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(destination_input);
       
        var origin_autocomplete = new google.maps.places.Autocomplete(origin_input);
        origin_autocomplete.bindTo('bounds', map);
        var destination_autocomplete =
            new google.maps.places.Autocomplete(destination_input);
        destination_autocomplete.bindTo('bounds', map);

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
       
        function expandViewportToFitPlace(map, place) {
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }
        }

        origin_autocomplete.addListener('place_changed', function() {
          var place = origin_autocomplete.getPlace();
          if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
          }
          expandViewportToFitPlace(map, place);

          // If the place has a geometry, store its place ID and route if we have
          // the other place ID
          origin_place_id = place.place_id;
          route(origin_place_id, destination_place_id, travel_mode,
                directionsService, directionsDisplay);
        });

        destination_autocomplete.addListener('place_changed', function() {
          var place = destination_autocomplete.getPlace();
          if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
          }
          expandViewportToFitPlace(map, place);

          // If the place has a geometry, store its place ID and route if we have
          // the other place ID
          destination_place_id = place.place_id;
          route(origin_place_id, destination_place_id, travel_mode,
                directionsService, directionsDisplay);
        });

        function route(origin_place_id, destination_place_id, travel_mode,
                       directionsService, directionsDisplay) {
          if (!origin_place_id || !destination_place_id) {
            return;
          }
          directionsService.route({
            origin: {'placeId': origin_place_id},
            destination: {'placeId': destination_place_id},
            travelMode: travel_mode
          }, function(response, status) {
            if (status === 'OK') {
              directionsDisplay.setDirections(response);
            } else {
              window.alert('Directions request failed due to ' + status);
            }
          });
        }
      }
</script>
  
  
    <p>Lets get in touch. Send me a message:</p>
    <!----<form action="ccommentts.php" method="Post" target="_blank">---->
    <h2>Send e-mail to someone@example.com:</h2>

	<form action="mailto:Reginald@Uhinkle.com" method="post" enctype="text/plain">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Comments" required name="comment"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>  
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
    <a href="https://www.facebook.com/ReginaldKSapp"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium"><a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green"></a></p>
  <!-- End footer -->
  </footer>
  
<!-- END PAGE CONTENT -->


<!-- Add Google Maps -->


<script>

  // Open and close sidebar
function openNav() {
    document.getElementById("mySidebar").style.width = "60%";
    document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjEhzvL5gTvDoXnqhi0v4hwDxIAsz_UMA&libraries=places&callback=initMap"async defer></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
</body>
</html>

