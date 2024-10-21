if (isset($_GET['city'])) {
    $city = htmlspecialchars($_GET['city']);

    // Your OpenWeatherMap API key (replace with your actual API key)
    $apiKey = "YOUR_API_KEY";

    // OpenWeatherMap API URL with the city input
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . $city . "&units=metric&appid=" . $apiKey;

    // Fetch data from the OpenWeatherMap API
    $weatherData = file_get_contents($apiUrl);

    // Check if the API returned a result
    if ($weatherData) {
        // Set the correct content type for JSON response
        header('Content-Type: application/json');

        // Output the weather data
        echo $weatherData;
    } else {
        // If the API didn't return anything, send an error message
        http_response_code(404);
        echo json_encode(["message" => "City not found"]);
    }
} else {
    // If no city is provided in the URL, return an error
    http_response_code(400);
    echo json_encode(["message" => "City parameter is missing"]);
}
Key Features of the Code:
Frontend:

The user inputs a city name, which is sent as a query parameter to the PHP backend (weather.php).
The frontend JavaScript uses the fetch API to get the weather data in JSON format and displays it dynamically.
Backend (PHP):

The PHP script retrieves the city from the URL and sends a request to the OpenWeatherMap API to fetch the weather data.
The response is then sent back to the frontend as a JSON response.
The PHP backend handles cases like missing city parameters or when the API fails to return data.
3. Example CSS for Styling (style.css)
(Optional) Basic styling to enhance the user interface.

css
Copy code
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}

.container {
  width: 100%;
  max-width: 600px;
  margin: 50px auto;
  text-align: center;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #333;
}

.search-box {
  margin: 20px 0;
}

input[type="text"] {
  padding: 10px;
  width: 70%;
  border-radius: 5px;
  border: 1px solid #ddd;
}

button {
  padding: 10px 15px;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

#weatherInfo {
  margin: 20px 0;
  background-color: #e9ecef;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

#weatherInfo h2 {
  margin: 0;
}

#weatherInfo img {
  width: 100px;
}