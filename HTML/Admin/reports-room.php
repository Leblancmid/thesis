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
                    <a class="nav-link text-dark" aria-current="page" href="reports.php">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="reports-room.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="reports-booking.php">Booking</a>
                </li>
            </ul>
            <div class="bg-dark d-flex p-3 mt-3 justify-content-between">
                <div class="text-white d-flex gap-2  align-items-baseline">
                    <label for="">From:</label>
                    <input type="date" class="form-control transaction_date">
                
                <div class="text-white d-flex gap-2  align-items-baseline">
                    <label for="">From:</label>
                    <select name="" class="form-select">
                        <option value="">Booked</option>
                        <option value="">Pending</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="d-flex gap-5 my-3">
                <a href="#" class="btn btn-success w-25">PRINT</a>
            </div>
    <div class="container-2">
        <table>
            <thead>
                <tr>
                    <th>Booking Ref. NO.</th>
                    <th>Room ID</th>
                    <th>Date Booked</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>345678</td>
                    <td>101</td>
                    <td>10 / 25 / 2023</td>
                    <td>10 / 28 / 2023</td>
                    <td>10 / 30 / 2023</td>
                </tr>
                <tr>
                    <td>9876</td>
                    <td>102</td>
                    <td>10 / 25 / 2023</td>
                    <td>10 / 30 / 2023</td>
                    <td>11 / 05 / 2023</td>
                </tr>
                <tr>
                    <td>0987654</td>
                    <td>103</td>
                    <td>10 / 28 / 2023</td>
                    <td>11 / 05 / 2023</td>
                    <td>11 / 08 / 2023</td>
                </tr>
                <tr>
                    <td>12345678</td>
                    <td>104</td>
                    <td>11 / 10 / 2023</td>
                    <td>11 / 12 / 2023</td>
                    <td>10 / 16 / 2023</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'footer.php'; ?>