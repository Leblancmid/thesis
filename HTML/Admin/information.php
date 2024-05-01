<?php
$page = 'Transactions';
include('navigation.php');
include 'header.php'
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>CLIENT INFORMATION</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column transactions my-5 gap-3">
        <div class="formGroup1">
            <label for="bookingRef">First Name: </label>
            <input type="text" class="form-control-info">
        </div>
        <div class="formGroup1">
            <label for="bookingRef">Last Name: </label>
            <input type="text" class="form-control-info">
        </div>
        <div class="d-flex gap-4">
            <label for="">Gender: </label>
            <div class="form-check ms-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                </label>
            </div>
        </div>
        <div class="formGroup1">
            <label for="bookingRef">Contact: </label>
            <input type="text" class="form-control-info">
        </div>
        <div class="formGroup1">
            <label for="bookingRef">Address: </label>
            <input type="text" class="form-control-info">
        </div>
        <div class="formGroup1">
            <label for="bookingRef">Email: </label>
            <input type="text" class="form-control-info">
        </div>
        <div>
            <label for="additionalPax">Additional Pax: </label>
            <input type="number" name="additionalPax" id="additionalPax" min="0">
            <label for="additionalPaxPrice">P350 per head (max of 2 additional pax)</label>
        </div>

        <div>
            <label>Are there Senior Citizens/PWDs?</label><br>
            <input type="radio" id="yes" name="additionalPax" value="yes" onclick="showProofForm()">
            <label for="yes">Yes</label><br>
            <input type="radio" id="no" name="additionalPax" value="no" onclick="hideProofForm()">
            <label for="no">No</label><br>
        </div>

        <div id="proofForm" style="display:none;">
            <!-- Your initial form input for proofs/images -->
            <div id="proofInputs">
                <label for="proof1">Proof 1:</label>
                <input type="file" id="proof1" name="proof[]"><br>
            </div>
            <button type="button" onclick="addProofInput()" style="padding: 5px 10px; background-color: #265B89; color: white; border: none; border-radius: 5px; cursor: pointer;">+</button>
        </div>

        <div>
            <label for="">Available Amenities: </label>
            <select name="" class="">
                <option value="">NONE</option>
                <option value="">Gasul</option>
                <option value="">Videoke</option>
            </select>
        </div>
        <div>
            <label for="">Status: </label>
            <select name="" class="">
                <option value="">Booked</option>
                <option value="">Pending</option>
                <option value="">Booked</option>
            </select>
        </div>
        <div>
            <h1>Total: </h1>
        </div>
        <div>
            <a class="btn btn-success" href="printed.php">Print</a>
            <a class="btn btn-secondary" href="booking_date.php">Back</a>
            <button class="btn btn-danger">Delete</button>
            <button class="btn btn-primary">Update</button>
        </div>
    </div>
</div>

<script>
    let proofCounter = 1;

    function showProofForm() {
        document.getElementById('proofForm').style.display = 'block';
    }

    function hideProofForm() {
        document.getElementById('proofForm').style.display = 'none';
    }

    function addProofInput() {
        proofCounter++;
        let newProofInput = document.createElement('div');
        newProofInput.innerHTML = `
            <label for="proof${proofCounter}">Proof ${proofCounter}:</label>
            <input type="file" id="proof${proofCounter}" name="proof[]"><br>
        `;
        document.getElementById('proofInputs').appendChild(newProofInput);
    }
</script>


<?php include 'footer.php' ?>