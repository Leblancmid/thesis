<?php
$page = 'Reports';
include 'header.php';
include('navigation.php');
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1"></p>
            <p>REPORTS</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>
    <div class="m-3 d-flex flex-column transactions mt-5">
        <div class="transactions">
            <ul class="nav nav-tabs fw-bold">
                <li class="nav-item">
                    <a class="nav-link text-dark active" aria-current="page" href="#">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="reports-room.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="reports-booking.php">Booking</a>
                </li>
            </ul>
            <div class="d-flex gap-5 my-3">
                <a href="add_transaction.php" class="btn btn-success w-25">ADD</a>
            </div>
    <div class="container-2">
        <table>
            <thead>
                <tr>
                    <th>Booking Ref. NO.</th>
                    <th>Time</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>User123</td>
                    <td>2024-04-28</td>
                    <td>192.168.1.1</td>
                </tr>
                <tr>
                    <td>User123</td>
                    <td>2024-04-28</td>
                    <td>192.168.1.1</td>
                </tr>
                <tr>
                    <td>User123</td>
                    <td>2024-04-28</td>
                    <td>192.168.1.1</td>
                </tr>
                <tr>
                    <td>User123</td>
                    <td>2024-04-28</td>
                    <td>192.168.1.1</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'footer.php'; ?>