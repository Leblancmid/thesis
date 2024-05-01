<?php
$page = 'Transactions';
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

            <div class="d-flex mt-3 justify-content-between">
                <h4>ADD NEW BOOKING</h4>
            </div>
            <h5 class="fw-bold">SELECT A ROOM</h5>
            <div class="d-flex gap-3">
                <a href="booking_date.php">
                    <div class="bg-color-gray-custom room_box rounded-3 px-2">
                        <p class="">GOOD FOR 1-2 PAX</p>
                        <span class="room_price">P 4800</span>
                    </div>
                </a>
                <a href="booking_date.php">
                    <div class="bg-color-gray-custom room_box rounded-3 px-2">
                        <p class="">GOOD FOR 4 PAX</p>
                        <span class="room_price">P 2500</span>
                    </div>
                </a>

                <a href="booking_date.php">
                    <div class="bg-color-gray-custom room_box rounded-3 px-2">
                        <p class="">GOOD FOR 1-2 PAX</p>
                        <span class="room_price">P 4800</span>
                    </div>
                </a>

                <a href="booking_date.php">
                    <div class="bg-color-gray-custom room_box rounded-3 px-2">
                        <p class="">GOOD FOR 1-2 PAX</p>
                        <span class="room_price">P 4800</span>
                    </div>
                </a>

                <a href="booking_date.php">
                    <div class="bg-color-gray-custom room_box rounded-3 px-2">
                        <p class="">GOOD FOR 1-2 PAX</p>
                        <span class="room_price">P 4800</span>
                    </div>
                </a>

                <a href="booking_date.php">
                    <div class="bg-color-gray-custom room_box rounded-3 px-2">
                        <p class="">GOOD FOR 1-2 PAX</p>
                        <span class="room_price">P 4800</span>
                    </div>
                </a>

                <a href="booking_date.php">
                    <div class="bg-color-gray-custom room_box rounded-3 px-2">
                        <p class="">GOOD FOR 1-2 PAX</p>
                        <span class="room_price">P 4800</span>
                    </div>
                </a>
            </div>
            <a class="btn btn-secondary" href="transactions.php">Back</a>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>