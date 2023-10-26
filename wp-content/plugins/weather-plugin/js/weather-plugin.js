jQuery(document).ready(function($) {
    // The OpenWeatherMap API endpoint.
    var apiUrl = 'https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid=0dd538713c6d816128cbd0ca4b774f5c';

    // Default location is Delhi.
    var defaultLocation = 'Delhi';

    // Determine if the user's location can be obtained. If not, use Delhi as the default.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            getWeatherData(lat, lon);
        });
    } else {
        getWeatherDataByCity(defaultLocation);
    }

    function getWeatherData(lat, lon) {
        $.ajax({
            url: apiUrl,
            data: {
                lat: lat,
                lon: lon,
                appid: getWeatherData.api_key
            },
            success: function(data) {
                // Extract and display weather information.
                var weather = data.weather[0];
                var temperature = data.main.temp;
                var city = data.name;
                var description = weather.description;

                var weatherHtml = '<h2>Weather in ' + city + '</h2>';
                weatherHtml += '<p>' + description + '</p>';
                weatherHtml += '<p>Temperature: ' + temperature + '°C</p>';

                $('#weather-container').html(weatherHtml);
            },
            error: function(error) {
                console.log('Error fetching weather data: ' + error);
            }
        });
    }

    function getWeatherDataByCity(city) {
        $.ajax({
            url: apiUrl,
            data: {
                q: city,
                appid: weather_data.api_key
            },
            success: function(data) {
                // Display weather information for the specified city.
                var weather = data.weather[0];
                var temperature = data.main.temp;
                var description = weather.description;

                var weatherHtml = '<h2>Weather in ' + city + '</h2>';
                weatherHtml += '<p>' + description + '</p>';
                weatherHtml += '<p>Temperature: ' + temperature + '°C</p>';

                $('#weather-container').html(weatherHtml);
            },
            error: function(error) {
                console.log('Error fetching weather data: ' + error);
            }
        });
    }
});
