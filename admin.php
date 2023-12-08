<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="icon" href="images/logoupdated.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>

<?php include '../websystem/components/header.php';?>

<div class="bookingList-container">
    <h1 class="booking-title">BOOKINGS</h1>
    <!-- Sorting Dropbox -->
    <?php include './components/adminfilter.php'?>
        <table>
            <tr class="tbl_bookingList">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Pax</th>
                <th>DateTime of Arrival and Departure</th>
                <th>Pick-up Place</th>
                <th>Pick-up Time</th>
                <th>Dropoff</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>

            <?php 
                include('dbconnection.inc.php');
                $sqlquery = "SELECT * FROM customer_book";
                $result = mysqli_query($con, $sqlquery);
                while($row = mysqli_fetch_array($result)){
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $pax = $row['pax'];
                    $contactnumber = $row['contactnumber'];
                    $dtarrivaldeparture = $row['dtarrivaldeparture'];
                    $pickupplace = $row['pickupplace'];
                    $pickuptime = $row['pickuptime'];
                    $dropoff = $row['dropoff'];
                    $paymentmethod = $row['paymentmethod'];

                    echo "<tr>
                    <td>$firstname</td>
                    <td>$lastname</td>
                    <td>$pax</td>
                    <td>$contactnumber</td>
                    <td>$dtarrivaldeparture</td>
                    <td>$pickupplace</td>
                    <td>$pickuptime</td>
                    <td>$dropoff</td>
                    <td>$paymentmethod</td>
                    <td><button class='btncss update-button' id='openEditForm'>Update</button></td>
                    <td><button class='btncss edit-button' id='openEditForm'>Edit</button></td>
                    <td><button class='btncss delete-button' id='openEditForm'>Delete</button></td>

                    </tr>";
                }
            
            ?>
    </table>
</div>
</body>
</html>