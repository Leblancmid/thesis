<?php
$page = 'Message';
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
        <!-- Message Module -->
        <div class="message-module">
            <h2>Compose a Message</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter subject here" required>
                </div>
                <div class="form-group">
                    <label for="bookingRef">Booking Ref No.:</label>
                    <input type="text" id="bookingRef" name="bookingRef" placeholder="Enter booking reference number here" required>
                </div>
                <div class="form-group">
                    <label for="bookingRef">To:</label>
                    <input type="text" id="bookingRef" name="bookingRef" placeholder="Enter To" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Type your message here" required></textarea>
                </div>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>