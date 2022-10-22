var lat=-33.0753;
var lon=-68.9705; 
var mymap = L.map('mapid').setView([lat, lon], 15);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox.streets',
  accessToken: 'pk.eyJ1IjoiZ2FicmllbDE5MjUiLCJhIjoiY2sxaGlzbXVqMDd5bDNicGs1d2x0Y2h5MiJ9.k3AyJEXdfRX7Ai5MdXGasQ'
}).addTo(mymap);
var marker = L.marker([lat,lon]).addTo(mymap);
				marker.bindPopup(`<h5>Latina Servicios Industriales</h5>
        <strong>Ruta provincial 88 · Parcela E Sector 2 <br>
        Parque Industrial Municipal <br>
        Luján de Cuyo · Mendoza · Argentina <br>
        </strong>
        <a href="https://www.google.com/maps/dir//-33.0753999,-68.9706972/@-33.0754402,-68.9705794,18.79z/data=!4m2!4m1!3e0?hl=es-419" class="btn btn-warning" target="_blank">Como llegar</a>`).openPopup();
        console.log(marker);
        
        var scroll = new SmoothScroll('a[href*="#"]',{
          speed:1000,
          offset:62
        });