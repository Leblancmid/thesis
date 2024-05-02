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

    <div class="m-3 d-flex flex-column transactions mt-5">
        <div class="transactions">
            <ul class="nav nav-tabs fw-bold">
                <li class="nav-item">
                <a class="nav-link text-dark active" aria-current="page" href="offers.php">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="amenities.php">Amenities</a>
                </li>
            </ul>

            <div class="d-flex gap-5 my-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text search-icon"> <i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control">
                </div>
                <a href="add_room.php" class="btn btn-primary w-25">ADD</a>
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
                        <td>2-4 Pax</td>
                        <td>1,400</td>
                        <td>
                            <button><i class="fas fa-trash-alt"></i></button>
                            <button><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>1-2 Pax</td>
                        <td>1,400</td>
                        <td>
                            <button><i class="fas fa-trash-alt"></i></button>
                            <button><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>