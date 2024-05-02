<?php
$page = 'Transactions';
include('navigation.php');
include 'header.php';
session_start();
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
                    <a class="nav-link text-dark" href="rebooking.php">Re-booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="payment.php">Payment</a>
                </li>
            </ul>

            <div class="d-flex mt-3 justify-content-between">
                <h4>ADD NEW BOOKING</h4>
            </div>
            <h5 class="fw-bold">SELECT A ROOM</h5>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=1400" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 1-2 PAX</p>
                                <span class="text-dark h4">₱ 1,200</span>
                                <p class="text-dark h4 text-decoration-line-through">₱ 1,400</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=2500" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 4 PAX</p>
                                <span class="text-dark h4 ">₱ 1,400</span>
                                <p class="text-dark h4 text-decoration-line-through">₱ 2,500</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=3000" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 5 PAX</p>
                                <span class="text-dark h4">₱ 3,000</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=3500" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 6 PAX</p>
                                <span class="text-dark h4">₱ 3,500</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=4000" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 8 PAX</p>
                                <span class="text-dark h4">₱ 4,000</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=4500" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 10 PAX</p>
                                <span class="text-dark h4">₱ 4,500</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=5000" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 12 PAX</p>
                                <span class="text-dark h4">₱ 5,000</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 mb-4">
                        <a href="booking_date.php?price=6500" class="text-decoration-none">
                            <div class="room_box rounded-3 p-4 text-center">
                                <p class="text-dark mb-0 h5">GOOD FOR 14 PAX</p>
                                <span class="text-dark h4">₱ 6,500</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <a class="btn btn-secondary" href="transactions.php">Back</a>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>