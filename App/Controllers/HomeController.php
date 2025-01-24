<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Session;
use Framework\Validation;

class HomeController
{
    protected $db;

    public function __construct()
    {
        $configs = require basePath('./configs/db.php');
        $this->db = new Database($configs);
    }
    /**
     * Show the latest listings
     *
     * @return void
     */
    public function index()
    {
        loadView('home');
    }
    public function create_bill()
    {
        loadView('create-bill');
    }

    public function submit_bill(){
        var_dump($_POST);

        $guestName = $_POST['guest_name'];
        $roomNumber = $_POST['room_num'];
        $roomNumber = $_POST['room_num'];
        $orgName = $_POST['org_name'];
        $guestPhoneNum = $_POST['guest_num'];
        $amtPerNight = $_POST['amt_per_night'];
        $arrivalDate = $_POST['arrival_date'];
        $departureDate = $_POST['departure_date'];
        $numOfNights = $_POST['num_of_nights'];
        
        
        // $
    }
}
