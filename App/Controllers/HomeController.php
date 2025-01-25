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
    public function add_organization()
    {
        loadView('add-organization');
    }
    public function process_add_organization()
    {
        $org_name = $_POST['org_name'];

        $params = [
            "org_name" => $org_name
        ];

        $this->db->query("INSERT into organizations (organization_name) VALUES (:org_name)", $params);

        redirect("http://localhost/bill-maker/add/organization");
    }
    public function view_guest_bill()
    {
        $baseURI = explode('/', $_SERVER['REQUEST_URI']);
        $booking_id = end($baseURI); 

        $guest_bill = $this->db->query("SELECT * FROM bookings WHERE id = '$booking_id'")->fetch();

        loadView('guest-bill', ["guest_bill" => $guest_bill]);
    }
    public function view_bills()
    {
        $guest_bills = $this->db->query("SELECT * FROM bookings")->fetchAll();

        loadView('view-bills', ["guest_bills" => $guest_bills]);
    }

    public function submit_bill()
    {

        $guestName = $_POST['guest_name'];
        $roomNumber = $_POST['room_num'];
        $orgName = $_POST['org_name'];
        $guestPhoneNum = $_POST['guest_num'];
        $amtPerNight = $_POST['amt_per_night'];
        $arrivalDate = $_POST['arrival_date'];
        $departureDate = $_POST['departure_date'];
        $numOfNights = $_POST['num_of_nights'];

        $room_cat_params = [
            'room_num' => $roomNumber
        ];

        $room_category = $this->db->query("SELECT * FROM room_details WHERE room_num = :room_num", $room_cat_params)->fetch()->room_category;

        $params = [
            'guest_name' => $guestName,
            'guest_num' => $guestPhoneNum,
            'org_name' => $orgName,
            'num_of_nights' => $numOfNights,
            'amt_per_night' => $amtPerNight,
            'arrival_date' => $arrivalDate,
            'departure_date' => $departureDate,
            'room_num' => $roomNumber,
            'room_category' => $room_category,
        ];

        $this->db->query("INSERT into bookings (guest_name, guest_num, organization, num_of_nights, amt_per_night, date_of_arrival, date_of_departure, room_number, room_category) VALUES (:guest_name, :guest_num, :org_name, :num_of_nights, :amt_per_night, :arrival_date, :departure_date, :room_num, :room_category)", $params);
    }
}
