<?php
$page = 'Transactions';
include 'navigation.php';
include 'header.php';
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
                    <a class="nav-link text-dark active" aria-current="page" href="transactions.php">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="rebooking.php">Re-booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="payment.php">Payment</a>
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
                <a href="add_transaction.php" class="btn btn-success w-25">ADD</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>BOOKING REF NO.</th>
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
                        <td>777875383</td>
                        <td>101</td>
                        <td>11/02/2023</td>
                        <td>Michael Nabong</td>
                        <td>11/02/2023</td>
                        <td>11/05/2023</td>
                        <td>Booked</td>
                    </tr>
                    <tr>
                        <td>103252233</td>
                        <td>102</td>
                        <td>01/02/2024</td>
                        <td>Ayevin Junior Hao</td>
                        <td>01/02/2024</td>
                        <td>01/05/2024</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>103053180</td>
                        <td>103</td>
                        <td>02/05/2024</td>
                        <td>Precious Yanga</td>
                        <td>02/08/2024</td>
                        <td>02/12/2024</td>
                        <td>Booked</td>
                    </tr>
                    <tr>
                        <td>470921473</td>
                        <td>104</td>
                        <td>03/10/2024</td>
                        <td>Shayne Danos</td>
                        <td>03/15/2024</td>
                        <td>03/20/2024</td>
                        <td>Booked</td>
                    </tr>
                    <tr>
                        <td>359096799</td>
                        <td>105</td>
                        <td>01/10/2024</td>
                        <td>Jeff Calamay</td>
                        <td>04/01/2024</td>
                        <td>04/05/2024</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>