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

# Lab2 : OS39 Glasses Shop MySQL Project

This project is a MySQL implementation for the OS39 Glasses Shop, including database creation, connection handling, basic CRUD operations, and a RESTful web service for accessing item information.

## Setup Instructions

1. **Clone Repository:** Clone this repository to your local machine.
2. **Import SQL Dump:** Use phpMyAdmin or MySQL command line to import the `items.sql` file located in the project folder to create the database and populate it with sample data.
3. **Update Configuration:** Edit the `config.php` file in the project folder to set your database connection parameters.
4. **Run Project:** Start your Apache server and navigate to `http://localhost/your_project_folder_name/index.php` in your web browser to access the project, replacing `your_project_folder_name` with the actual name of your project folder.

## Features

- **Database Creation:** Import the `items.sql` file to create the database schema and populate it with sample data.
- **DbHandler Class:** Implementation of a `DbHandler` class to encapsulate all database communication and querying functions.
- **Basic CRUD Operations:** Perform basic CRUD operations (Create, Read, Update, Delete) on the database.
- **Pagination:** Implement pagination for displaying records in the table.
- **Item Details View:** Clicking on the "more" link displays the details of the selected item in a new page.
- **RESTful Web Service:** Implement a RESTful web service to retrieve item information based on item ID and support GET, POST, PUT, and DELETE HTTP methods.

## Usage of the Web Service

- Each item will have a URL with its ID like the following: `http://localhost/ShopAPI.php/items/100`
- If the ID is correct and the verb is GET, the result should be all fields of that item.
- If the ID is not correct or the resource requested is anything other than items, the API should produce an error response.
- The web service allows only GET, POST, PUT, and DELETE HTTP verbs. Any other verb used will result in a method not allowed error.
- If the database connection fails, the response should be an internal server error.

## Implementation Notes

- Use the `products.sql` file to import products to your database.
- Utilize the `MySQLHandler` class for SQL queries, which has methods for select, update, delete, and update.
---
