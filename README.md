# Weather Forecast Project

This project provides a simple web interface to display weather forecasts for selected Egyptian cities. It uses the OpenWeatherMap API to fetch weather data and a list of cities from a JSON file.

![Weather Services Comparison](https://www.tutorialswebsite.com/wp-content/uploads/2019/10/web-services-rest-vs-soap.jpeg)

## Files

- `index.php`: The main PHP file that handles the web interface and interacts with the OpenWeatherMap API.
- `WeatherAPIInterface.php`: Contains the `WeatherAPIInterface` interface, which defines methods for fetching cities, weather data, and current time.
- `WeatherAPI.php`: Implements the `WeatherAPIInterface` interface and provides methods to fetch cities, weather data, and current time using the OpenWeatherMap API.
- `city-list.json`: A JSON file containing a list of cities and their IDs for selection in the weather forecast interface.

## Requirements
1. Create a PHP script with a dropdown menu of all Egyptian cities.
2. When the user selects a city, display a weather report that includes:
   - Temperature (minimum and maximum)
   - Humidity
   - Wind speed
   - Sky status
3. Use cURL to fetch weather information from the OpenWeatherMap API.
4. Repeat the same functionality using Guzzle, and don't forget to use Composer to install Guzzle.

### Before Submit
- Select a city from the dropdown menu.
- Click on "Get Weather" button.

### After Submit
- Display the weather status with the following information:
   - Day of the week and time
   - Date (dayth month, year)
   - Sky status
   - Weather icon
   - Temperature in Celsius
   - Humidity percentage
   - Wind speed in km/h

## How to Use

1. Clone the repository and navigate to the project directory.
2. Ensure you have PHP installed.
3. Install the Guzzle HTTP client library using Composer:

    ```bash
    composer require guzzlehttp/guzzle
    ```

4. Run a local PHP server:

    ```bash
    php -S localhost:8000
    ```

5. Open a web browser and navigate to `http://localhost:8000` to access the weather forecast interface.

## Disclaimer

This project is for educational purposes only. Use at your own risk.

---
