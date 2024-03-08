<?php
session_start();
require_once("vendor/autoload.php");

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection([
    "driver" => _driver_,
    "host" => _host_,
    "database" => _database_,
    "username" => _username_,
    "password" => _password_
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

header("Content-Type: application/json");

function getAll()
{
    $all_records = Capsule::table("items")->take(_Pager_size_)->get();
    return $all_records;
}
function getOne($sid)
{
    $searched_glasses = Capsule::table('items')->find($sid);
    return $searched_glasses;
}

$path = explode($_SERVER['SCRIPT_NAME'], $_SERVER["REQUEST_URI"])[1];
$uriParts = explode("/", $path);
$resource = "";
if (count($uriParts) > 1)
    $resource = $uriParts[1];
$id = isset($uriParts[2]) ? $uriParts[2] : "";
$method = $_SERVER['REQUEST_METHOD'];
$response = [];
if ($method != "GET" && $method != "POST" && $method != "PUT" && $method != "DELETE")
{
    $response['error'] = "method not allowed!";
    http_response_code(405);
    echo json_encode($response);
    die;
}
if ($resource !== "items")
{
    $response['error'] = "Invalid resource";
    http_response_code(404);
    echo json_encode($response);
    die;
}

if ($id === "")
{
    switch ($method)
    {
        case "POST":

            break;
        case "GET":
            $success = 0;
            $response = [];
            try
            {
                $items = getAll();
                $success = 1;
                $response['data'] = $items;
            }
            catch (Exception $exception)
            {
                http_response_code(404);
                $response['error'] = "internal server error!";
            }
            $response['success'] = $success;
            echo json_encode($response);
            break;
        default:
            http_response_code(405);
            echo "405 Unsupported method";
    }
}
else
{
    switch ($method)
    {
        case "DELETE":

            break;
        case "PUT":
        case "PATCH":

            break;
        case "GET":
            $success = 0;
            $response = [];
            try
            {
                $item = getOne($id);
                if ($item !== null)
                {
                    $success = 1;
                    $response['data'] = $item;
                }
                else
                {
                    $response['error'] = "Resource ID doesn't exist";
                }
            }
            catch (Exception $exception)
            {
                http_response_code(404);
                $response['error'] = "internal server error!";
            }
            $response['success'] = $success;
            echo json_encode($response);
            break;
        default:
            http_response_code(405);
            echo "405 Unsupported method";
    }
}
die;