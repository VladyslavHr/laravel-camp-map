
var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

map.locate({setView: true, maxZoom: 16});
function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(map)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);

function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);

// var map = L.map('map').fitWorld();

// L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     maxZoom: 19,
//     attribution: '© OpenStreetMap'
// }).addTo(map);


var campgrounds = [
    { name: 'Campground 1', lat: 51.505, lon: -0.09 },
    { name: 'Campground 2', lat: 51.51, lon: -0.1 },
    // ...
];

for (var i = 0; i < campgrounds.length; i++) {
    L.marker([campgrounds[i].lat, campgrounds[i].lon])
        .addTo(map)
        .bindPopup(campgrounds[i].name);
}

map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    // alert('Широта: ' + lat + ', Долгота: ' + lng);
});

// // Добавляем кнопку для запроса геолокации
// var getLocationButton = L.control({ position: 'bottomleft' });

// getLocationButton.onAdd = function(map) {
//     var div = L.DomUtil.create('div', 'custom-button');
//     div.innerHTML = '<button onclick="getLocation()">Get My Location</button>';
//     return div;
// };

// getLocationButton.addTo(map);

// // Функция для запроса геолокации и отображения маркера пользователя
// function getLocation() {
//     if ("geolocation" in navigator) {
//         navigator.geolocation.getCurrentPosition(function(position) {
//             var lat = position.coords.latitude;
//             var lng = position.coords.longitude;

//             L.marker([lat, lng])
//                 .addTo(map)
//                 .bindPopup('Вы здесь!')
//                 .openPopup();

//             map.setView([lat, lng], 15);
//         }, function(error) {
//             console.error('Ошибка геолокации:', error);
//             alert('Ошибка получения геолокации');
//         });
//     } else {
//         alert('Геолокация недоступна');
//     }
// }
