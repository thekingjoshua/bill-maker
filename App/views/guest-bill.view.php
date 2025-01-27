<!DOCTYPE html>
<html lang="en, id">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title> View Individual Guest Bill </title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/bill-maker/styles.css">
</head>

<body>
	<section class="wrapper-invoice">
		<div class="invoice">
			<div class="invoice-information">
				<p> NO. 18 UNITY BANK ROAD (CDB) MOGADISHU CITY </p>
				<p> CENTRE BEHIND AHMADU BELLO WAY, KADUNA</p>
			</div>
			<div class="invoice-logo-brand">
				<img src="http://localhost/bill-maker/MOGADISHU_LOGO.png" alt="hotel_logo" />
			</div>
			<div class="invoice-head">
				<div class="head client-info">
					<p>Bill No: #<?= str_pad($guest_bill->id, 4, 0, STR_PAD_LEFT) ?></p>
					<p>Guest Name: <?= $guest_bill->guest_name ?></p>
					<p>Guest Phone Number: +234 <?= $guest_bill->guest_num ?></p>
					<p>Arrival Date:
						<?php
						$date_of_arrival = new DateTime($guest_bill->date_of_arrival);
						echo $date_of_arrival->format('d/m/Y');
						?>
					</p>
					<p>Departure Date: <?php
										$date_of_departure = new DateTime($guest_bill->date_of_departure);
										echo $date_of_departure->format('d/m/Y');
										?>
					</p>
					<p>Room No: <?= $guest_bill->room_number ?></p>
					<p>Room Category: <?= $guest_bill->room_category ?></p>
				</div>
				<div class="head client-data">
					<p>+234 814 699 8988</p>
					<p>www.mogadishumetrohotel.com</p>
					<p>mogadishumetrohotelandsuites.gmail.com</p>
					<p style="margin-top: 50px;">Date added: <?= $guest_bill->created_at ?></p>
					<p>Bill Status: GROUP</p>
					<p>Organization: <?= $guest_bill->organization ?></p>
				</div>
				<div class="cta_text">GUEST BILL</div>
			</div>
			<div class="invoice-body">
				<table class="table">
					<thead>
						<tr>
							<th>S/NO</th>
							<th>DATE</th>
							<th>DETAILS</th>
							<th>PCODE</th>
							<th>DEBIT (₦)</th>
							<th>CREDIT (₦)</th>
							<th>BALANCE (₦)</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$start_date = new DateTime($guest_bill->date_of_arrival);
						$end_date = new DateTime($guest_bill->date_of_departure);

						if($guest_bill->num_of_nights > intval(1)){
							$end_date->modify('+1 day');
						}else{
							$end_date->modify('+0 day');
						}

						$counter = 1;
						$base_debit_amt = $guest_bill->amt_per_night;
						
						$total_debit = 0;
						$total_balance = 0;

						$loop_end_date = $end_date->modify("-1 day");

						while ($start_date < $loop_end_date) {
							$p_code = generateRandomInteger();
							$balance = number_format($base_debit_amt, 2);
							$debit_amt = number_format($guest_bill->amt_per_night, 2);

							$total_debit += $guest_bill->amt_per_night;
							$total_balance += $guest_bill->amt_per_night;
							echo "<tr>";
							echo "<td>" . $counter . ".</td>";
							echo "<td>" . $start_date->format('d/m/Y') . "</td>";
							echo "<td>DAILY ROOM CHARGE</td>";
							echo "<td>MMH$p_code</td>";
							echo "<td>$debit_amt</td>";
							echo "<td>0.00</td>";
							echo "<td>-$balance</td>";
							echo "</tr>";

							$start_date->modify('+1 day');
							$counter++;
							// $base_debit_amt++;
							$base_debit_amt += $guest_bill->amt_per_night;
						}

						echo "<tr style=\"font-weight: bolder;\">";

						echo "<td colspan=\"4\" style=\"text-align: center;\">TOTAL</td>";
						$total_debit = number_format($total_debit, 2);
						$total_balance = number_format($total_balance, 2);
						echo "<td>$total_debit</td>";

						echo "<td>0.00</td>";

						echo "<td>-$total_balance</td>";

						echo "</tr>"
						?>
					</tbody>
				</table>
				<div class="flex-table">
					<div class="flex-column"></div>
					<div class="flex-column">
					</div>
				</div>
				<div class="bottom_container">
					<div class="invoice-total-amount">
						<p>HOTEL POLICIES</p>
					</div>
					<div class="invoice-total-text">
						<p style="margin-top: 0; margin-bottom: 5px;">1. Check out time is 12:00 noon</p>
						<p style="margin-top: 0; margin-bottom: 5px;">2. Check out after 12:00 noon attracts 50% of the normal charge and full rate is charged by 6:00PM</p>
						<p style="margin-top: 0; margin-bottom: 5px">3. We shall require all reservations to be confirmed, as we may not be able to provide rooms for unconfirmed reservations after 4:00PM on the date of check-in.</p>
					</div>
					<div class="sign_container">
						<div class="guest_sign">
							<p> GUEST SIGN </p>
						</div>
						<div class="receptionist_sign">
							<p> RECEPTIONIST SIGN </p>
						</div>
					</div>
					<div class="copyright">
						<p>THANKS FOR YOUR PATRONAGE</p>
						<!-- <p>Powered by KingJoshua - 07047874151</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>