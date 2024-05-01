<?php
$page = 'Transactions';
include 'header.php';
include('navigation.php');
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1"></p>
            <p>Printed Report</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <body>
        <h1>Guest Information</h1>
        <table border="1">
            <tr>
                <th>First Name:</th>
                <td>Michael</td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td>Nabong</td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td>Male</td>
            </tr>
            <tr>
                <th>Contact:</th>
                <td>09677160231</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>150 Gordon St. Valenzuela</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>nabongmichaeladriane@gmail.com</td>
            </tr>
            <tr>
                <th>Checked-in Date:</th>
                <td>May 15, 2024</td>
            </tr>
            <tr>
                <th>Checked-out Date:</th>
                <td>May 18, 2024</td>
            </tr>
            <tr>
                <th>Additional Pax:</th>
                <td>2</td>
            </tr>
            <tr>
                <th>Senior Citizens/PWDs:</th>
                <td>2</td>
            </tr>
            <tr>
                <th>Available Amenities:</th>
                <td>Videoke</td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>Booked</td>
            </tr>
            <tr>
                <th>Total Amount:</th>
                <td>₱5,450</td>
            </tr>
        </table>
        <a class="btn btn-secondary" href="information.php">Back</a>
    </body>

    <?php include 'footer.php'; ?>