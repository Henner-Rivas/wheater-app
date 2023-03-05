<x-app-layout>




    <div class="p-4 sm:ml-64" id="map" style="height: 900px;">

    </div>



</x-app-layout>





<script>
    // Crea el mapa en la posición [25, -80] (Miami)
    let map = L.map('map').setView([25, -80], 10);

    // Agrega una capa de mapa base de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Hace una llamada a la API de OpenWeatherMap para obtener los datos de humedad
    let url = 'https://api.openweathermap.org/data/2.5/group?id=4164138,4167147,5128581&units=metric&appid={{ env("OPENWEATHERMAP_API_KEY") }}';

  axios.get(url)
        .then(function(response) {
            let data = response.data;

            // Itera sobre los datos y agrega marcadores al mapa
            data.list.forEach(function(ciudad) {
                let marker = L.marker([ciudad.coord.lat, ciudad.coord.lon]).addTo(map);
                marker.bindPopup('Ciudad: ' + ciudad.name + '<br>Humedad: ' + ciudad.main.humidity + '%');
            });
        })
        .catch(function(error) {
            console.log(error);
        });


L.marker([25.7617, -80.1918]).addTo(map)
    .bindPopup('Miami');

L.marker([28.5383, -81.3792]).addTo(map)
    .bindPopup('Orlando');

L.marker([40.7128, -74.0060]).addTo(map)
    .bindPopup('New York');

    map.setZoom(4);


</script>