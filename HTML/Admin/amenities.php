<?php
$page = 'Offers';
include 'header.php';
include('navigation.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-v3pvoR+q7lcLsR6XUqk2i8tBkZAzr2kWLl4pXSS+2MmXU5hHuU6xVv5UBxmP3vGQVZl0vFwzSK/uG2zN6+F0Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1"></p>
            <p>OFFERS</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>
    <div class="container-2">
    <div class="m-3 d-flex flex-column transactions mt-5">
        <div class="transactions">
            <ul class="nav nav-tabs fw-bold">
                <li class="nav-item">
                    <a class="nav-link text-dark " aria-current="page" href="offers.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="#">Amenities</a>
                </li>
            </ul>
    </div>
    <div class="d-flex gap-5 my-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text search-icon"> <i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control">
                </div>
                <a href="add_amenities.php" class="btn btn-success w-25">ADD</a>
            </div>
        <table>
            <thead>
                <tr>
                    <th>ROOM ID</th>
                    <th>ROOM PAX</th>
                    <th>PRICE</th>
                    <th>MODIFY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>1 - 2 Paxs</td>
                    <td>1400</td>
                    <td>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>1 - 2 Paxs</td>
                    <td>1400</td>
                    <td>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>4 Paxs</td>
                    <td>2500</td>
                    <td>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>104</td>
                    <td>4 Paxs</td>
                    <td>2500</td>
                    <td>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'footer.php'; ?>