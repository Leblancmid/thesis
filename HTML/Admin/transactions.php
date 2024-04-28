<?php
$page = 'Accounts';
include('navigation.php');
include 'header.php'
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>TRANSACTIONS</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column transactions mt-5">
        <div class="transactions">
            <ul class="nav nav-tabs fw-bold">
                <li class="nav-item">
                    <a class="nav-link text-dark active" aria-current="page" href="#">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Re-booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Payment</a>
                </li>
            </ul>

            <div class="bg-dark d-flex p-3 mt-3 justify-content-between">
                <div class="text-white d-flex gap-2  align-items-baseline">
                    <label for="">From:</label>
                    <input type="date" class="form-control transaction_date">
                </div>
                <div class="text-white d-flex gap-2  align-items-baseline">
                    <label for="">From:</label>
                    <input type="date" class="form-control transaction_date">
                </div>
                <div class="text-white d-flex gap-2  align-items-baseline transaction_date">
                    <label for="">Status: </label>
                    <select name="" class="form-select">
                        <option value="">Booked</option>
                        <option value="">Pending</option>
                    </select>
                </div>
            </div>
            <div class="d-flex gap-5 my-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text search-icon"> <i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control">
                </div>
                <button class="btn btn-success w-25">ADD</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Booking Ref No.</th>
                        <th>ROOM ID</th>
                        <th>DATE BOOKED</th>
                        <th>NAME</th>
                        <th>CHECK-IN</th>
                        <th>CHECK-OUT</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345456789</td>
                        <td>101</td>
                        <td>11/02/2023</td>
                        <td>Michael Nabong</td>
                        <td>11/02/2023</td>
                        <td>11/05/2023</td>
                        <td>Booked</td>
                    </tr>
                    <tr>
                        <td>12345456789</td>
                        <td>101</td>
                        <td>11/02/2023</td>
                        <td>Michael Nabong</td>
                        <td>11/02/2023</td>
                        <td>11/05/2023</td>
                        <td>Booked</td>
                    </tr>
                    <tr>
                        <td>12345456789</td>
                        <td>101</td>
                        <td>11/02/2023</td>
                        <td>Michael Nabong</td>
                        <td>11/02/2023</td>
                        <td>11/05/2023</td>
                        <td>Booked</td>
                    </tr>
                    <tr>
                        <td>12345456789</td>
                        <td>101</td>
                        <td>11/02/2023</td>
                        <td>Michael Nabong</td>
                        <td>11/02/2023</td>
                        <td>11/05/2023</td>
                        <td>Booked</td>
                    </tr>
                    <tr>
                        <td>12345456789</td>
                        <td>101</td>
                        <td>11/02/2023</td>
                        <td>Michael Nabong</td>
                        <td>11/02/2023</td>
                        <td>11/05/2023</td>
                        <td>Booked</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>