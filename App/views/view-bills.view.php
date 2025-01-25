<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>View all Guest Bills</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">
    <link class="js-stylesheet" href="http://localhost/ib-fyp/css/light.css" rel="stylesheet">

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item">
                            <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="maximize"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Guest Bills</h1>
                    </div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title mb-0">Guest Bills</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Guest Name</th>
                                        <th>Room Number</th>
                                        <th>Room Category</th>
                                        <th>Guest Phone Number</th>
                                        <th>Organization</th>
                                        <th>Number of Nights</th>
                                        <th>Amount Per Night</th>
                                        <th>Date of Arrival</th>
                                        <th>Date of Departure</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($guest_bills as $guest_bill):
                                        $date_of_arrival = new DateTime($guest_bill->date_of_arrival);  
                                        $date_of_departure = new DateTime($guest_bill->date_of_departure);  
                                    ?>

                                        <tr>
                                            <td><?= str_pad($guest_bill->id, 4, 0, STR_PAD_LEFT)  ?></td>
                                            <td><?= $guest_bill->guest_name ?></td>
                                            <td><?= $guest_bill->room_number ?></td>
                                            <td><?= $guest_bill->room_category ?></td>
                                            <td><?= $guest_bill->guest_num ?></td>
                                            <td><?= $guest_bill->organization ?></td>
                                            <td><?= $guest_bill->num_of_nights ?></td>
                                            <td><?= number_format($guest_bill->amt_per_night, 2) ?></td>
                                            <td><?= $date_of_arrival->format('d/m/Y'); ?></td>
                                            <td><?= $date_of_departure->format('d/m/Y'); ?></td>
                                            <td><a href="http://localhost/bill-maker/view/guest-bill/<?= $guest_bill->id ?>" target="_blank">Print</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>

    <script src="http://localhost/bill-maker/js/app.js"></script>



    <script src="http://localhost/bill-maker/js/datatables.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Orders
            $("#datatables-orders").DataTable({
                responsive: true,
                aoColumnDefs: [{
                    bSortable: false,
                    aTargets: [-1]
                }]
            });
        });
    </script>
</body>


</html>