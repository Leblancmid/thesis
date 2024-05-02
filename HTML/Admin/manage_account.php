<?php
$page = 'Accounts';
include 'navigation.php';
include 'header.php';
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>ACCOUNTS</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column transactions mt-5">
        <div class="transactions">
            <ul class="nav nav-tabs fw-bold">
                <li class="nav-item">
                    <a class="nav-link text-dark active" aria-current="page" href="transactions.php">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="rebooking.php">Re-booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="payment.php">Payment</a>
                </li>
            </ul>

            <div class="bg-dark d-flex p-3 mt-3 justify-content-between">
                <div class="text-white d-flex gap-2  align-items-baseline transaction_date">
                    <label for="">NAME: </label>
                    <select name="" class="form-select">
                        <option value="">Ascending</option>
                        <option value="">Descending</option>
                    </select>
                </div>
                <div class="text-white d-flex gap-2  align-items-baseline transaction_date">
                    <label for="">DATE CREATED: </label>
                    <select name="" class="form-select">
                        <option value="">Ascending</option>
                        <option value="">Descending</option>
                    </select>
                </div>
                <div class="text-white d-flex gap-2  align-items-baseline transaction_date">
                    <label for="">LAST ACTIVE: </label>
                    <select name="" class="form-select">
                        <option value="">Ascending</option>
                        <option value="">Descending</option>
                    </select>
                </div>
            </div>
            <div class="d-flex gap-5 my-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text search-icon"> <i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control">
                </div>
                <a href="add_user.php" class="btn btn-success w-25">ADD</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>EMAIL</th>
                        <th>NAME</th>
                        <th>MODIFY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maykel</td>
                        <td>12345</td>
                        <td>maykel@gmail.com</td>
                        <td>Michael Adriane</td>
                        <td>
                            <button><i class="fas fa-trash-alt"></i></button>
                            <button><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Presyus</td>
                        <td>12345</td>
                        <td>presyus@gmail.com</td>
                        <td>Precious Yanga</td>
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