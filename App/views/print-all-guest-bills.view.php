<?php // var_dump($guest_bills) ?>
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
                    <br/>
                    <br/>
                    <br/>
					<p>Name of Organization: <br/> <?= $org_name ?></p>
					<p>Date of Arrival: 
                        <?php 
                            $date_of_arrival = new DateTime($guest_bills[0]->date_of_arrival);
                            echo $date_of_arrival->format('d/m/Y');
                        ?> 
                    </p>
					<p>Date of Departure: 
                        <?php 
                            $date_of_departure = new DateTime($guest_bills[0]->date_of_departure);
                            echo $date_of_departure->format('d/m/Y');
                        ?> 
                    </p>
				</div>
				<div class="head client-data">
					<p>+234 814 699 8988</p>
					<p>www.mogadishumetrohotel.com</p>
					<p>mogadishumetrohotelandsuites.gmail.com</p>
				</div>
				<div class="cta_text">GUEST BILL</div>
			</div>
			<div class="invoice-body">
            <table class="table">
					<thead>
						<tr>
							<th>S/N</th>
							<th>NAME</th>
							<th>ROOM NUMBER</th>
							<th>PHONE NUMBER</th>
							<th>RATE (₦)</th>
							<th>AMOUNT (₦)</th>
						</tr>
					</thead>
					<tbody>
                        <?php 
                        $s_n = 0;
                        
                        foreach($guest_bills as $guest_bill): 
                        
                        $s_n++
                        ?>
						<tr>
							<td><?= $s_n ?>.</td>
							<td><?= $guest_bill->guest_name ?></td>
							<td><?= $guest_bill->room_number ?></td>
							<td><?= $guest_bill->guest_num ?></td>
							<td><?= number_format($guest_bill->amt_per_night) ?> x <?= $guest_bill->num_of_nights ?> nights</td>
							<td><?= number_format($guest_bill->amt_per_night * $guest_bill->num_of_nights) ?></td>
						</tr>
                        <?php endforeach; ?>
						<tr style="font-weight: bolder;">
                            <?php 
                            
                                $balance = 0;
                                $i = 0;
                                $sum = 0;

                            while($i <= count($guest_bills)-1){
                                $balance += $guest_bills[$i]->amt_per_night * $guest_bills[$i]->num_of_nights;

                                $i++;
                            }
                            ?>
							<td colspan="5" style="text-align: center;">TOTAL AMOUNT</td>
							<td><?= number_format($balance) ?></td>
						</tr>
					</tbody>
				</table>
				<div class="flex-table">
					<div class="flex-column"></div>
					<div class="flex-column">
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>