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
                <a class="nav-link text-dark" href="offers.php">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark active" aria-current="page" href="amenities.php">Amenities</a>
                </li>
            </ul>

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
                        <th>AMENITY ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>MODIFY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>201</td>
                        <td>Gasul</td>
                        <td>300</td>
                        <td>
                            <button><i class="fas fa-trash-alt"></i></button>
                            <button><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>202</td>
                        <td>Videoke</td>
                        <td>500</td>
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