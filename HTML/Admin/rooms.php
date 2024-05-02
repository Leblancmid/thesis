<?php
$page = 'Rooms';
include('navigation.php');
include 'header.php'
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>Rooms</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column transactions mt-5">
        <div class="transactions">
            <div class="d-flex gap-5 my-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text search-icon"> <i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="sales-container">
                <div class="heading-1">Earnings</div>
                <div class="sales">
                    <div class="amount">
                        <div class="total-amount">
                            <a href="room_dates.php" class="sub-heading-1 mb-0">ROOM ID: 101</a>
                            <p class="sub-heading-2">₱ 1,400</p>
                        </div>
                        <div class="total-amount">
                        <a href="room_dates.php" class="sub-heading-1 mb-0">ROOM ID: 102</a>
                            <p class="sub-heading-2">₱ 1,400</p>
                        </div>
                        <div class="total-amount">
                        <a href="room_dates.php" class="sub-heading-1 mb-0">ROOM ID: 103</a>
                            <p class="sub-heading-2">₱ 2,500</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>