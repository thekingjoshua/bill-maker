<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $baseURI = explode('/', $_SERVER['REQUEST_URI']);
} else {
    $baseURI = ['', ''];
}

$router->get("{$baseURI[1]}/", 'HomeController@index');
$router->get("{$baseURI[1]}/create-bill", 'HomeController@create_bill');
$router->get("{$baseURI[1]}/view-bills", 'HomeController@view_bills');
$router->get("{$baseURI[1]}/view/guest-bill/{id}", 'HomeController@view_guest_bill');


$router->post("{$baseURI[1]}/submit-bill", 'HomeController@submit_bill');