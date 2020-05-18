@extends('Layout.layout')
@section('menu')
<div class="sidebar-wrapper">  
 <ul class="nav"> 
   <li class="nav-item  ">
     <a class="nav-link" href="/calculate">
       <i class="material-icons">library_books</i>
       <p>Calculate</p>
     </a>
   </li>
   <li class="nav-item active">
    <a class="nav-link" href="/map">
      <i class="material-icons">location_ons</i>
      <p>Maps</p>
    </a>
  </li>
   <li class="nav-item ">
     <a class="nav-link" href="/api">
       <i class="material-icons">bubble_chart</i>
       <p>API</p>
     </a>
   </li>
 </ul>
</div>
@endsection
@section('nav')
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
 <div class="container-fluid">
   <div class="navbar-wrapper">
     <a class="navbar-brand" href="javascript:;">MAP</a>
   </div>
 </div>
</nav>
@endsection
@section('content')
   
    <!--The div element for the map -->
    <div id="map"></div>
@endsection
@section('script')
<script>
  // Initialize and add the map
   function initMap() {
    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
    var scg = new google.maps.LatLng(13.7447287, 100.5231292);
    var ctw = new google.maps.LatLng(13.747532, 100.5359713);
    var mapOptions = {
      zoom: 14,
      center: scg
    }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    directionsRenderer.setMap(map);

    //route
    var request = {
        origin: scg,
        destination: ctw,
        // Note that JavaScript allows us to access the constant
        // using square brackets and a string value as its
        // "property."
        travelMode: 'DRIVING',
        provideRouteAlternatives: true,
    };
    directionsService.route(request, function(response, status) {
      if (status == 'OK') {
        directionsRenderer.setDirections(response);
      }
    });
  }
 </script>
 <!--Load the API from the specified URL
 * The async attribute allows the browser to render the page while the API loads
 * The key parameter will contain your own API key (which is not needed for this tutorial)
 * The callback parameter executes the initMap() function
 -->
 <script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrSEA1zS1GlHHxDfDyvpAdP1v8wx1Ksn8&callback=initMap">
 </script>

@endsection
  