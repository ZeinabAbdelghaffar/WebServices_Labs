<?php
const API_KEY = '9bd2cb400054b437eed0eefe2999b720';
class WeatherAPI implements WeatherAPIInterface
{
    public static function get_cities()
    {
        $str = file_get_contents(__DIR__ . '/city-list.json');
        $json = json_decode($str, true);
        $cities = [];
        foreach ($json as $city) {
            if (strtolower($city['country']) === 'eg') {
                $cities[] = $city;
            }
        }
        return $cities;
    }
    public static function get_weather($city_id)
    {
        try {
            $apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $city_id . "&lang=en&units=metric&APPID=" . API_KEY;
            $client = new GuzzleHttp\Client();
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody());
            return $data;
        } catch (Exception $exception) {
            return json_encode([
                'status' => 501,
                'message' => "Gateway Error"
            ]);
        }
    }
    public static function get_current_time()
    {
        return time();
    }
}
?>