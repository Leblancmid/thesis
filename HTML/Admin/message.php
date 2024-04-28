<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <script src="https://kit.fontawesome.com/d8f0503c9b.js" crossorigin="anonymous"></script> <!--FOR ICONS-->
    <link rel="stylesheet" href="../../CSS/admin-style.css">
</head>

<body>
    <div class="navigation">
        <div class="banner">
            <img src="../../IMAGES/Icon-2/Asset 9@4x 2.png">
            <img src="../../IMAGES/Icon-2/Asset 10@4x 2.png">
        </div>
        <div class="nav-buttons">
            <a href="dashboard.php">
                <i class="fa-solid fa-gauge"></i>DASHBOARD</a>

            <a href="#">
                <i class="fa-solid fa-book-bookmark"></i>TRANSACTIONS</a>

            <a href="#">
                <i class="fa-solid fa-clipboard-user"></i>ACCOUNTS</a>

            <a href="#">
                <i class="fa-brands fa-buffer"></i>OFFFERS</a>

            <a href="room.php">
                <i class="fa-solid fa-door-closed"></i>ROOMS</a>

            <a href="#" class="active">
                <i class="fa-solid fa-inbox"></i>MESSAGES</a>

            <a href="#">
                <i class="fa-solid fa-square-poll-vertical"></i>REPORTS</a>

            <a href="#">
                <i class="fa-solid fa-flag"></i>LOGS</a>
        </div>
    </div>
    <div class="container-1">
        <div class="container-heading">
            <div class="details">
                <p>WELCOME BACK</p>
                <p class="name">Admin</p>
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

</html>
