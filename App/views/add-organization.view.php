<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="forms-advanced-inputs-2.html" />

    <title>Add Organization</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <link class="js-stylesheet" href="http://localhost/bill-maker/light.css" rel="stylesheet">
    <style>
        .copyright {
            margin-top: 0;
            text-align: center;
        }

        .copyright p {
            color: gray;
            /* SHOW DEVELOPER SIGNATURE */
            /* font-size: 15px; */
            font-size: 18px;
        }
    </style>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        <div class="main">
            <form method="post" action="http://localhost/bill-maker/add-organization">
                <main class="content">
                    <div class="container-fluid p-0">
                        <h1 class="h3 mb-3">Add  Organization</h1>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Organization Name</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" name="guest_name" placeholder="Enter Organization Name">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-body text-left">
                                            <div class="mb-3">
                                                <button class="btn btn-primary">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </main>
                <div class="copyright">
                    <p>Powered by KingJoshua - 07047874151</p>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Choices.js
            new Choices(document.querySelector(".choices-single"));
            new Choices(document.querySelector(".choices-multiple"));
            // Flatpickr
            flatpickr(".flatpickr-minimum");
            flatpickr(".flatpickr-datetime", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
            flatpickr(".flatpickr-human", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
            flatpickr(".flatpickr-multiple", {
                mode: "multiple",
                dateFormat: "Y-m-d"
            });
            flatpickr(".flatpickr-range", {
                mode: "range",
                dateFormat: "Y-m-d"
            });
            flatpickr(".flatpickr-time", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });
        });
    </script>
    <script src="http://localhost/bill-maker/app.js"></script>
    <script>
        const myCalendar = document.querySelector('.stay-period');
        const arrivalDateEl = document.querySelector('.arrival_date');
        const departureDateEl = document.querySelector('.departure_date');
        const numOfNightsEl = document.querySelector('.num_of_night');
        const fp = flatpickr(myCalendar, {});

        myCalendar.addEventListener('change', function() {
            const arrivalDate = new Date(fp.element._flatpickr.selectedDates[0]);
            const arrivalDateLocalISOString = arrivalDate.toLocaleString('sv-SE', {
                timeZone: 'Africa/Lagos'
            }).replace(' ', 'T');

            const departureDate = new Date(fp.element._flatpickr.selectedDates[1]);
            const departureDateLocalISOString = departureDate.toLocaleString('sv-SE', {
                timeZone: 'Africa/Lagos'
            }).replace(' ', 'T');

            arrivalDateEl.value = arrivalDateLocalISOString.substring(0, 10);
            departureDateEl.value = departureDateLocalISOString.substring(0, 10);

            // Define the two dates
            const date1 = new Date(arrivalDateLocalISOString.substring(0, 10));
            const date2 = new Date(departureDateLocalISOString.substring(0, 10));

            // Calculate the difference in milliseconds
            const diffInMilliseconds = date2 - date1;

            // Convert milliseconds to days
            const diffInDays = diffInMilliseconds / (1000 * 60 * 60 * 24);

            numOfNightsEl.value = diffInDays;


        })
    </script>
</body>

</html>