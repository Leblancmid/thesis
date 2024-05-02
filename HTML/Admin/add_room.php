<?php
$page = 'Offers';
include('navigation.php');
include 'header.php'
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>OFFERS</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column transactions my-5 gap-3">
    <h1> NEW ROOM </h1>
        <div class="formGroup1">
            <label for="bookingRef">ROOM PAX: </label>
            <input type="text" class="form-control-info">
        </div>

        <div class="formGroup1">
            <label for="bookingRef">PRICE:  </label>
            <input type="text" class="form-control-info">
        </div>

        <div class="formGroup1">
            <label for="bookingRef">DETAILS:  </label>
            <input type="password" class="form-control-info">
        </div>

    </div>
    <a href="#" class="btn btn-primary w-25">ADD</a>
    <a href="offers.php" class="btn btn-danger w-25">BACK</a>
</div>

<?php include 'footer.php' ?>