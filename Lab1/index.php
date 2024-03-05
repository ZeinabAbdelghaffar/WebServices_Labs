<?php
require_once "WeatherAPIInterface.php";
require_once "WeatherAPI.php";
$cityId = $_GET["city"] ?? "360542";
$cities = WeatherAPI::get_cities();
$data = WeatherAPI::get_weather($cityId);
$currentTime = WeatherAPI::get_current_time();
?>
<!doctype html>
<html>
<head>
    <title>Weather Forecast</title>
    <style>
        .choose {
            border: solid;
            padding: 10px;
            margin-bottom: 5px;
            display: block;
        }

        .report-container {
            font-size: 20px;
            border: solid;
            padding: 10px;
            margin-bottom: 5px;
            display: block;
        }
    </style>
</head>
<body>
    <h1>Weather Forecast</h1>
    <div class="choose">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" id="cityForm">
            <label for="city">Choose City</label> <br />
            <select name="city" id="city">
                <?php foreach ($cities as $city) : ?>
                    <option value="<?= $city['id'] ?>" <?= $city['id'] == $cityId ? 'selected' : '' ?>><?= $city['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Show Weather</button>
        </form>
    </div>
    <hr>
    <div class="report-container">
        <h2><?= $data->name ?> Weather Status</h2>
        <div class="time">
            <div><?= date("l g:i a", $currentTime) ?></div>
            <div><?= date("jS F, Y", $currentTime) ?></div>
            <div><?= ucwords($data->weather[0]->description) ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?= $data->weather[0]->icon ?>.png" class="weather-icon" /> <?= $data->main->temp_max ?>°C<span class="min-temperature"><?= $data->main->temp_min ?>°C</span>
        </div>
        <div class="time">
            <div>Humidity: <?= $data->main->humidity ?> %</div>
            <div>Wind: <?= $data->wind->speed ?> km/h</div>
        </div>
    </div>
</body>
</html>