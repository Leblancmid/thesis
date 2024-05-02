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
            <label for="bookingRef">Check-In: </label>
            <input type="text" class="form-control-info" value="<?php echo $_REQUEST['startDate'] ?? ''; ?>" disabled>
        </div>
        <div class="formGroup1">
            <label for="bookingRef">Check-Out: </label>
            <input type="text" class="form-control-info" value="<?php echo $_REQUEST['endDate'] ?? ''; ?>" disabled>
        </div>
        <div class="formGroup1">
            <label for="firstName">First Name: </label>
            <input type="text" class="form-control-info" name="firstName" value="<?php echo $_REQUEST['firstName'] ?? ''; ?>">
        </div>
        <div class="formGroup1">
            <label for="lastName">Last Name: </label>
            <input type="text" class="form-control-info" name="lastName" value="<?php echo $_REQUEST['lastName'] ?? ''; ?>">
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
            <input type="number" name="additionalPax" id="additionalPax" min="0" max="2" value="0">
            <label for="additionalPaxPrice">P350 per head (max of 2 additional pax)</label>
        </div>

        <div>
            <label>Are there Senior Citizens/PWDs?</label><br>
            <input type="radio" id="discount" name="discount" value="yes" onclick="showProofForm()">
            <label for="yes">Yes</label><br>
            <input type="radio" id="discount" name="discount" value="no" onclick="hideProofForm()">
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

        <div id="amenities-container">
            <div>
                <label for="amenity-1">Available Amenities:</label>
                <select name="amenities[]" class="amenity-select" onchange="handleAmenityChange(this)">
                    <option value="None">None</option>
                    <option value="Gasul">Gasul</option>
                    <option value="Videoke">Videoke</option>
                </select>
                <button type="button" class="btn btn-primary rounded btn-sm add-amenity">
                    <i class="fas fa-plus"></i>
                </button>

            </div>
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
            <h1>Total: <span id="total"><?php echo $_REQUEST['price'] ?? ''; ?></span></h1>
        </div>
        <div>
            <a class="btn btn-success" href="printed.php?startDate=<?php echo $_REQUEST['startDate'] ?? ''; ?>&endDate=<?php echo $_REQUEST['endDate'] ?? ''; ?>&firstName=<?php echo $_REQUEST['firstName'] ?? ''; ?>&lastName=<?php echo $_REQUEST['lastName'] ?? ''; ?>&gender=<?php echo $_REQUEST['gender'] ?? ''; ?>&contact=<?php echo $_REQUEST['contact'] ?? ''; ?>&address=<?php echo $_REQUEST['address'] ?? ''; ?>&email=<?php echo $_REQUEST['email'] ?? ''; ?>&additionalPax=<?php echo $_REQUEST['additionalPax'] ?? ''; ?>&seniorPWDs=<?php echo $_REQUEST['seniorPWDs'] ?? ''; ?>&amenities=<?php echo $_REQUEST['amenities'] ?? ''; ?>&status=<?php echo $_REQUEST['status'] ?? ''; ?>&totalAmount=<?php echo $_REQUEST['totalAmount'] ?? ''; ?>">Print</a>

            <a class="btn btn-secondary" href="booking_date.php">Back</a>
            <button class="btn btn-danger">Delete</button>
            <button class="btn btn-primary">Update</button>
        </div>
    </div>
</div>

<script>
    let proofCounter = 1;
    let total = <?php echo $_REQUEST['price']; ?>

    function showProofForm() {
        document.getElementById('proofForm').style.display = 'block';

        total = total - total * 0.20;
        document.getElementById('total').innerText = total;
        additionalPaxInputComputation();
    }

    function hideProofForm() {
        document.getElementById('proofForm').style.display = 'none';
        total = <?php echo $_REQUEST['price']; ?>;
        document.getElementById('total').innerText = total;
        additionalPaxInputComputation();
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

    function additionalPaxInputComputation() {
        var newValue = additionalPaxInput.value;

        var currentTotal = parseFloat(total);

        var newTotal = currentTotal + (newValue * 350);

        document.getElementById('total').innerText = newTotal;
    }

    var additionalPaxInput = document.getElementById('additionalPax');

    additionalPaxInput.addEventListener('input', additionalPaxInputComputation);

    document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("amenities-container");
        const addButton = container.querySelector(".add-amenity");

        addButton.addEventListener("click", function() {
            const div = document.createElement("div");
            div.innerHTML = `
            <label for="amenity-${container.childElementCount + 1}" style="visibility: hidden;">Available Amenities:</label>
                <select name="amenities[]" class="amenity-select" onchange="handleAmenityChange(this)">
                    <option value="None">None</option>
                    <option value="Gasul">Gasul</option>
                    <option value="Videoke">Videoke</option>
                </select>
                <button type="button" class="btn btn-danger btn-sm remove-amenity" id="remove-amenity-${container.childElementCount + 1}">
                    <i class="fas fa-minus"></i>
                </button>
            `;
            container.appendChild(div);
        });

        container.addEventListener("click", function(event) {
            if (event.target.classList.contains("remove-amenity")) {
                console.log(event.target);
                event.target.parentNode.remove();
            }
        });
    });

    function handleAmenityChange(selectElement) {
        var selectedValue = selectElement.value;
        var previousValue = selectElement.getAttribute("data-previous-value");
        var amenityCost = 0;

        // Subtract the cost of the previously selected amenity
        switch (previousValue) {
            case "Gasul":
                total -= 350;
                break;
            case "Videoke":
                total -= 500;
                break;
            default:
                break;
        }

        // Add the cost of the newly selected amenity
        switch (selectedValue) {
            case "Gasul":
                amenityCost = 350;
                break;
            case "Videoke":
                amenityCost = 500;
                break;
            default:
                break;
        }

        total += amenityCost;

        // Update the total and store the current selection as the previous value
        document.getElementById('total').innerText = total;
        selectElement.setAttribute("data-previous-value", selectedValue);
    }
</script>


<?php include 'footer.php' ?>