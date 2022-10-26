// script for FindUs.php map 
const map = L.map('map').setView([52.794440,6.894240],15);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([52.7944376, 6.8942425]).addTo(map);

marker.bindPopup("<b>Visit Us!</b><br> Here we are!").openPopup();
