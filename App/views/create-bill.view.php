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

    <title>Advanced Inputs | AdminKit Demo</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <link class="js-stylesheet" href="light.css" rel="stylesheet">
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        <div class="main">
            <form method="post" action="http://localhost/bill-maker/submit-bill">
                <main class="content">
                    <div class="container-fluid p-0">
                        <h1 class="h3 mb-3">Create Guest Bill</h1>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Guest Name</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" name="guest_name" placeholder="Enter Guest Name">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Select Room Number</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <select class="form-control choices-single" name="room_num">
                                                <option value="101">101</option>
                                                <option value="102">102</option>
                                                <option value="103">103</option>
                                                <option value="104">104</option>
                                                <option value="105">105</option>
                                                <option value="106">106</option>
                                                <option value="107">107</option>
                                                <option value="108">108</option>
                                                <option value="109">109</option>
                                                <option value="201">201</option>
                                                <option value="202">202</option>
                                                <option value="203">203</option>
                                                <option value="204">204</option>
                                                <option value="205">205</option>
                                                <option value="206">206</option>
                                                <option value="207">207</option>
                                                <option value="208">208</option>
                                                <option value="209">209</option>
                                                <option value="210">210</option>
                                                <option value="211">211</option>
                                                <option value="212">212</option>
                                                <option value="213">213</option>
                                                <option value="214">214</option>
                                                <option value="301">301</option>
                                                <option value="302">302</option>
                                                <option value="303">303</option>
                                                <option value="304">304</option>
                                                <option value="305">305</option>
                                                <option value="306">306</option>
                                                <option value="307">307</option>
                                                <option value="308">308</option>
                                                <option value="309">309</option>
                                                <option value="310">310</option>
                                                <option value="311">311</option>
                                                <option value="312">312</option>
                                                <option value="313">313</option>
                                                <option value="314">314</option>
                                                <option value="315">315</option>
                                                <option value="316">316</option>
                                                <option value="317">317</option>
                                                <option value="318">318</option>
                                                <option value="319">319</option>
                                                <option value="320">320</option>
                                                <option value="321">321</option>s
                                            </select>
                                        </div>
                                        <div style="display: none;">
                                            <select class="form-control choices-multiple" multiple>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Select Organization</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <select class="form-control choices-single" name="org_name">
                                                <option value="CHAI International">CHAI International</option>
                                            </select>
                                        </div>
                                        <div style="display: none;">
                                            <select class="form-control choices-multiple" multiple>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Guest Phone Number</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" placeholder="Enter Guest Phone Number" name="guest_num">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Select Arrival & Departure date</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-xl-6">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control flatpickr-range stay-period" placeholder="Select date..." />
                                                    </div>
                                                    <div class="card-header">
                                                        <h5 class="card-title">Enter amount per night</h5>
                                                    </div>
                                                    <input class="form-control" name="amt_per_night" />

                                                    <input style="display: none;" class="arrival_date" name="arrival_date" />
                                                    <input style="display: none;" class="departure_date" name="departure_dates" />
                                                    <input style="display: none;" class="num_of_night" name="num_of_night" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-left">
                                            <div class="mb-3">
                                                <button class="btn btn-primary">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </main>
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
    <script src="app.js"></script>
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