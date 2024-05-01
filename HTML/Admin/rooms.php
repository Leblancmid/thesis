<?php
$page = 'Rooms';
include('navigation.php');
include 'header.php'
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>ROOMS</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column transactions mt-5">
        <div class="transactions">
            <div class="d-flex mt-3 justify-content-between">
                <h4>ADD NEW BOOKING</h4>
            </div>
            <h5 class="fw-bold">SELECT A ROOM</h5>
            <div class="d-flex gap-3">
                <a href="room_dates.php">
                    <div class="bg-color-gray-custom room_box_rooms rounded-3 px-2">
                        <p class="">ROOM ID: 101</p>
                        <span class="room_price">ROOM 1 - 2 PAX</span>
                    </div>
                </a>
            </div>
            <a class="btn btn-secondary" href="transactions.php">Back</a>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>