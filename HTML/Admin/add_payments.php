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

    <div class="m-3 d-flex flex-column transactions my-5 gap-3">
        <div class="formGroup1">
            <label for="bookingRef">Booking Ref No. </label>
            <input type="text" class="form-control-info">
        </div>
        <div class="d-flex gap-4">
            <label for="">Payment Method: </label>
            <div class="form-check ms-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault1">
                    GCASH
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault1">
                    BANK
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault1">
                    CASH
                </label>
            </div>
        </div>
        <div class="formGroup1">
            <label for="">DATE:</label>
            <input type="date" class="form-control transaction_date">
        </div>
        <div class="formGroup1">
            <label for="bookingRef">AMOUNT </label>
            <input type="text" class="form-control-info">
        </div>
        <div class="formGroup1">
            <label for="bookingRef">REMAINING </label>
            <input type="text" class="form-control-info">
        </div>

        <div id="proofForm">
            <!-- Your initial form input for proofs/images -->
            <div class="d-flex gap-2" id="proofInputs">
                <label for="proof1"><strong>Proof</strong></label>
                <input type="file" id="proof1" name="proof[]"><br>
                <button type="button" onclick="addProofInput()" style="padding: 5px 10px; background-color: #265B89; color: white; border: none; border-radius: 5px; cursor: pointer;">Upload image</button>
            </div>
        </div>

        <div class="formGroup1">
            <label for="bookingRef">Ref No. </label>
            <input type="text" class="form-control-info">
        </div>
    </div>
</div>

<?php include 'footer.php' ?>