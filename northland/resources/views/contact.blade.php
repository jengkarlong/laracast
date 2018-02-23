@extends ('layouts.master')

@section ('page_title') Contact Us | Nortland Sport's Bar &amp; Grill @endsection

@section ('add_head')
 <!-- Leaflet Map API -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
  integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
  integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
  crossorigin=""></script>

  <link rel="stylesheet" href="/css/contact.css">
@endsection

@section ('content')
  <h1 id="page-title" class='wow bounceInDown'><i class="fas fa-baseball-ball"> </i> Contact Us <i class="fas fa-baseball-ball" > </i></h1>  
  <section id="contact">
    <div class="contact-wrapper">
      <div class="contacts wow bounceInLeft">
        <h2>Contacts</h2>
        <a href="mail: info@northlandsports.com"> <i class="fas fa-envelope"> </i> info@northlandsports.com</a>
        <a href="tel:715-677-3491"> <i class="fa fa-phone"> </i> 715-677-3491</a>
      </div>
      <div class="opening wow bounceInRight">
        <h2>Opening times</h2>
        <p>Daily: 11:00 AM - 10:00 PM</p>
      </div>
    </div>
    <div class="location wow bounceInUp">
      <h2>Address</h2>
      <p>N10103 State Road 49, Iola, Wisconsin WI 54945</p>
    </div>
  </section>
  
  <!-- Leaflet Map -->  
  <section id="map wow fadeIn">
    <div id="mapid"></div>
  </section>
@endsection


@section ('external_js')

  <script type="text/javascript">
    
	var mymap = L.map('mapid').setView([44.605929,-89.213707], 13);

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',{
    maxZoom: 20,
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(mymap);
  var marker = L.marker([44.606145,-89.2136062]).addTo(mymap);

    marker.bindPopup("<center><b>Hello</b><br> This is us!</center>").openPopup();

  </script>

@endsection