<!DOCTYPE html>
<html lang="en, id">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		A Simple Invoice Template Responsive and clean with HTML CSS SCSS
	</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<section class="wrapper-invoice">
		<!-- switch mode rtl by adding class rtl on invoice class -->
		<div class="invoice">
			<div class="invoice-information">
				<p> NO. 18 UNITY BANK ROAD (CDB) MOGADISHU CITY </p>
				<p> CENTRE BEHIND AHMADU BELLO WAY, KADUNA</p>
			</div>
			<!-- logo brand invoice -->
			<div class="invoice-logo-brand">
				<!-- <h2>Tampsh.</h2> -->
				<img src="MOGADISHU_LOGO.png" alt="hotel_logo" />
			</div>
			<!-- invoice head -->
			<div class="invoice-head">
				<div class="head client-info">
					<p>Bill No: #0001</p>
					<p>Guest Name: John Doe</p>
					<p>Guest Phone Number: John Doe</p>
					<p>Arrival Date: 10/12/2024</p>
					<p>Departure Date: 12/12/2024</p>
					<p>Room No: 302</p>
					<p>Room Type: EXECUTIVE ROOM</p>
				</div>
				<div class="head client-data">
					<p>+234 814 699 8988</p>
					<p>www.mogadishumetrohotel.com</p>
					<p>mogadishumetrohotelandsuites.gmail.com</p>
					<p style="margin-top: 50px;">Date: 16/01/2025</p>
					<p>Bill Status: GROUP</p>
					<p>Organization: CHAI International</p>
				</div>
				<div class="cta_text">GUEST BILL</div>
			</div>
			<!-- invoice body-->
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
						<tr>
							<td>1.</td>
							<td>16/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-30,000.00</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>3.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>4.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>5.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>6.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>7.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>8.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>9.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>10.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>11.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>12.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>13.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>14.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr>
							<td>15.</td>
							<td>17/01/2025</td>
							<td>DAILY ROOM CHARGE</td>
							<td>MMH1234</td>
							<td>30,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
						<tr style="font-weight: bolder;">
							<td colspan="4" style="text-align: center;">BALANCE</td>
							<td>60,000.00</td>
							<td>0.00</td>
							<td>-60,000.00</td>
						</tr>
					</tbody>
				</table>
				<div class="flex-table">
					<div class="flex-column"></div>
					<div class="flex-column">
					</div>
				</div>
				<!-- invoice total  -->
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
							<p>  RECEPTIONIST SIGN </p>
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