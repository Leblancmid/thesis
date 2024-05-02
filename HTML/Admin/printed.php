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
                <th>Checked-in Date:</th>
                <td><?php echo $_GET['startDate'] ?? ''; ?></td>
            </tr>
            <tr>
                <th>Checked-out Date:</th>
                <td><?php echo $_GET['endDate'] ?? ''; ?></td>
            </tr>
            <tr>
                <th>First Name:</th>
                <td><?php echo $_GET['firstName'] ?? ''; ?></td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td><?php echo $_GET['gender'] ?? ''; ?></td>
            </tr>
            <tr>
                <th>Contract:</th>
                <td><?php echo $_GET['contact'] ?? ''; ?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo $_GET['address'] ?? ''; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $_GET['email'] ?? ''; ?></td>
            </tr>
            <!-- Include other fields similarly -->
        </table>
        <a class="btn btn-secondary" href="information.php">Back</a>
    </body>

    <?php include 'footer.php'; ?>