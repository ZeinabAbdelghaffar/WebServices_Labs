# Weather Forecast Project

This project provides a simple web interface to display weather forecasts for selected Egyptian cities. It uses the OpenWeatherMap API to fetch weather data and a list of cities from a JSON file.

![Weather Services Comparison](https://www.tutorialswebsite.com/wp-content/uploads/2019/10/web-services-rest-vs-soap.jpeg)

## Files

- `index.php`: The main PHP file that handles the web interface and interacts with the OpenWeatherMap API.
- `WeatherAPIInterface.php`: Contains the `WeatherAPIInterface` interface, which defines methods for fetching cities, weather data, and current time.
- `WeatherAPI.php`: Implements the `WeatherAPIInterface` interface and provides methods to fetch cities, weather data, and current time using the OpenWeatherMap API.
- `city-list.json`: A JSON file containing a list of cities and their IDs for selection in the weather forecast interface.

## Requirements

1. Create a PHP script that has a drop-down menu of all Egyptian cities. When the user chooses a city, they should get a weather report that includes the temperature (minimum and maximum) and humidity.
2. The interface should have a drop-down menu to select a city and a "Get Weather" button to submit the selection.
3. After submission, the interface should display the weather report in the following format:
   - A heading displaying the weather status.
   - The day of the week and time (e.g., Monday 00:00 PM/AM).
   - The day, month, and year (e.g., 1st January, 2023).
   - The sky status.
   - An image representing the sky status.
   - The temperature in Celsius (e.g., 11°C).
   - The humidity percentage (e.g., humidity: 50%).
   - The wind speed in kilometers per hour (e.g., wind: 10 km/h).
4. Use cURL for getting the weather information.
5. Repeat the same behavior using Guzzle HTTP client library (Don’t forget to use Composer).

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
