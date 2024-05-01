<?php
$page = 'Messages';
include 'header.php';
include('navigation.php');
?>

<body>
    <div class="container-1">
        <div class="container-heading">
            <div class="details">
                <p></p>
                <p class="name">Messages</p>
            </div>
            <img src="../../IMAGES/Icon-2/picpic.jpg">
        </div>
        <h1 style="display: flex; justify-content: center;">COMPOSE A MESSAGE</h1>
        <!-- Message Module -->
        <div class="message-module">

            <form action="#" method="post">
                <div class="formGroup1">
                    <label for="bookingRef">SUBJECT: </label>
                    <input type="text" class="form-control">
                </div>
                <div class="formGroup1">
                    <label for="bookingRef">BOOKING REF NO. : </label>
                    <input type="text" class="form-control">
                </div>
                <div class="formGroup1">
                    <label for="bookingRef">TO : </label>
                    <input type="text" class="form-control">
                </div>
                <div class="formGroup1">
                    <label for="message">MESSAGE : </label>
                    <textarea id="message" name="message" cols="40" rows="8" placeholder="Type your message here" required></textarea>
                </div>
                <div class="button1" style="display: flex; justify-content: center;">
                    <button class="btn btn-primary w-25">Send</button>
                </div>
            </form>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>