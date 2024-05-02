<?php
$page = 'Accounts';
include('navigation.php');
include 'header.php'
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>ACCOUNTS</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column transactions my-5 gap-3">
        <div class="formGroup1">
            <label for="bookingRef">Username </label>
            <input type="text" class="form-control-info">
        </div>

        <div class="formGroup1">
            <label for="bookingRef">Email </label>
            <input type="text" class="form-control-info">
        </div>

        <div class="formGroup1">
            <label for="bookingRef">Password </label>
            <input type="password" class="form-control-info">
        </div>

        <div class="formGroup1">
            <label for="bookingRef">First Name </label>
            <input type="text" class="form-control-info">
        </div>

        <div class="formGroup1">
            <label for="bookingRef">Last Name </label>
            <input type="text" class="form-control-info">
        </div>

        <div class="d-flex gap-2">
            <label for="bookingRef">User Type:</label>
            <div class="form-check ms-2">
                <input class="form-check-input" type="radio" name="userType" id="frontDeskRadio" value="frontDesk">
                <label class="form-check-label" for="frontDeskRadio">Front-Desk</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="userType" id="adminRadio" value="admin">
                <label class="form-check-label" for="adminRadio">Admin</label>
            </div>
        </div>

        <div id="accessList" style="display:none;">
            <h4>Access:</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="dashboardCheckbox">
                <label class="form-check-label" for="dashboardCheckbox">Dashboard</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="transactionCheckbox">
                <label class="form-check-label" for="transactionCheckbox">Transaction</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="accountsCheckbox">
                <label class="form-check-label" for="accountsCheckbox">Accounts</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="offersCheckbox">
                <label class="form-check-label" for="offersCheckbox">Offers</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="messageCheckbox">
                <label class="form-check-label" for="messageCheckbox">Message</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="roomsCheckbox">
                <label class="form-check-label" for="roomsCheckbox">Rooms</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="reportsCheckbox">
                <label class="form-check-label" for="reportsCheckbox">Reports</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="logsCheckbox">
                <label class="form-check-label" for="logsCheckbox">Logs</label>
            </div>
        </div>

    </div>
    <a href="add_user.php" class="btn btn-primary w-25">UPDATE</a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const frontDeskRadio = document.getElementById('frontDeskRadio');
        const adminRadio = document.getElementById('adminRadio');
        const accessList = document.getElementById('accessList');

        // Function to handle radio button change event
        function handleRadioChange() {
            if (frontDeskRadio.checked) {
                accessList.style.display = 'block';
            } else {
                accessList.style.display = 'none';
            }
        }

        // Add event listeners to both radio buttons
        frontDeskRadio.addEventListener('change', handleRadioChange);
        adminRadio.addEventListener('change', handleRadioChange);

        // Initially hide the access list
        accessList.style.display = 'none';
    });
</script>

<?php include 'footer.php' ?>