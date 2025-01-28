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
        $organizations = $this->db->query("SELECT * FROM organizations")->fetchAll();

        loadView('create-bill', ["organizations" => $organizations]);
    }
    public function add_organization()
    {
        loadView('add-organization');
    }
    public function search_all_guest_bills()
    {
        $organizations = $this->db->query("SELECT * FROM organizations")->fetchAll();

        loadView('view-all-guest-bills', ["organizations" => $organizations]);
    }
    public function print_all_guest_bills()
    {
        $org_name = $_POST['org_name'];
        $arrival_date = $_POST['arrival_date'];
        
        $guest_bills = $this->db->query("SELECT * FROM bookings WHERE organization = '$org_name' AND date_of_arrival = '$arrival_date'")->fetchAll();

        loadView('print-all-guest-bills', ["guest_bills" => $guest_bills, "org_name" => $org_name, "arrival_date" => $arrival_date]);
    }
    public function table_guest_bills()
    {
        $baseURI = explode('/', $_SERVER['REQUEST_URI']);
        $org_name = urldecode($baseURI[4]);
        $arrival_date = end($baseURI);

        // $clean_url = urldecode($org_name);

        // var_dump($org_name);
        // var_dump($arrival_date);

        $guest_bills = $this->db->query("SELECT * FROM bookings WHERE organization = '$org_name' AND date_of_arrival = '$arrival_date'")->fetchAll();

        loadView('print-all-guest-bills', ["guest_bills" => $guest_bills, "org_name" => $org_name]);
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
        if ($_POST['room_num'] === 'Autofill') {
            $guestName = $_POST['guest_name'];
            $orgName = $_POST['org_name'];
            $guestPhoneNum = $_POST['guest_num'];
            $amtPerNight = $_POST['amt_per_night'];
            $arrivalDate = $_POST['arrival_date'];
            $departureDate = $_POST['departure_date'];
            $numOfNights = $_POST['num_of_nights'];

            $roomNumberArr = ['110', '111', '112', '113', '114', '115', '116', '117', '118', '119', '120', '121', '122', '123', '124', '125', '126', '127', '128', '129', '130', '215', '216', '217', '218', '219', '220', '221', '222', '223', '224', '225', '226', '227', '228', '229', '230', '231', '232', '233', '234', '235', '322', '323', '324', '325', '326', '327', '328', '329', '330', '331', '332', '333', '334', '335', '336', '337', '338', '339', '340', '341', '342'];
            $roomCategoryArr = ["STANDARD ROOM", "EXECUTIVE ROOM", "SUPERIOR ROOM", "BUSINESS SUITE"];

            $roomNumber = $roomNumberArr[rand(0, 61)];
            $room_category = $roomCategoryArr[rand(0, 3)];

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
            
        } else {
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
            redirect("http://localhost/bill-maker/view-bills");
        }
    }
}
