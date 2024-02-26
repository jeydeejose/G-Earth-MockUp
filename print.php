<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body{
        font-size:8px;
    }

  </style>
</head>
<body>
<?php

echo"<div class='row border mx-auto' style='width:100%'>";
echo"<b>GREAT EARTH FOOD INDUSTRIAL, INC,</b>";
echo"<p><small>Lot 1085 Purok 2, Mapalasan Street, Brgy. Gabihan, San Idelfonso, Bulacan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>DELIVERY RECEIPT : 2024-1</b></small></br>TIN: 007-960-161-000 VAT</p>";

echo"<div class='col-sm-8'>";
    echo"SOLD TO : Santiago Comm'l Center</br>";
    echo"Deliver to</br>";
    echo"Address to</br>";
    echo"TIN : 100-100-100-100</br>";
echo"</div>";

echo"<div class='col-sm-4'>";
    echo"DATE : Apr-29-2023</br>";
    echo"Ref. P.O. No.</br>";
    echo"Terms</br>";
    echo"Invoice no</br>";
echo"</div>";

echo'
<table id="drTable" class="table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>QUANTITY</th>
            <th>UNIT</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>TOTAL</th>
        </tr>
    </thead>
        <tr>
        <td>1,000</td>
        <td>BAG</td>
        <td>WHITE PIGEON FLOUR 25 KGS./BAG</td>
        <td>780.00</td>
        <td>780,000.00</td>
        </tr>

        <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        </tr>

        <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td>TOTAL</td>
        <td><b>780,000.00</b></td>
        </tr>

        <tr>
        <th>APPROVED BY</th>
        <th>CHECKED BY</th>
        <th>DELIVERED BY</th>
        <th colspan="2">TRUCK NO.</th>
        </tr>       

        <tr>
        <td>Ethan Anderson</td>
        <td>Abigail White</td>
        <td>Liam Hall</td>
        <td colspan="2">BBA-267</td>
        </tr>      

        <tr>
        <td colspan="3">Received the items in goods order and confition. All goods herein received ared deemed to be held in trust by the buyer in behalf of the </br> Seller and title thereto shall pass to the Buyer only upon encashment of the check issued by the Buyer in payment thereof. </br>In addtion, I hereby warrant that I have read, accepted and agreed to all the term and condition specified below.</td>
        <td>ISSUED BY: </br>Jane Doe</td>
        <td>ACKNOWLEDGED BY: </br>John Doe</td>
        </tr>   


</table>    
';    

echo"</div>";
?>

<script>
    window.print()
</script>    