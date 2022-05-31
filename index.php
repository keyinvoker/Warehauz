<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/template.css">
    <script src="script/hamburger.js"></script>
    <link rel="icon" href="assets/images/warehouse-icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <a href="https://www.flaticon.com/free-icons/warehouse" title="warehouse icons">Warehouse icons created by Freepik - Flaticon</a> -->
    <title>Warehauz</title>
</head>

<body>

    <header>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Home</a>
            <a href="#">Items</a>
            <a href="#">Contact</a>
        </div>

        <!-- Use any element to open the sidenav -->
        <span class="hamburger-btn" onclick="openNav()">&#9776;</span>

        <div class="header-img">
            <a href="https://www.flaticon.com/free-icons/storage" title="storage icons" target="_blank">
                <img src="assets/images/warehouse.png" alt="">
            </a>
        </div>
        <div class="header-text">
            <h1>
                WareHauz&trade;
            </h1>
            <p>
                personal virtual warehouse
            </p>
        </div>
    </header>

    <div class="background">

        <!-- <div class="left-menu container">
            <button class="btn btn-warning">INSERT</button>
        </div> -->

        <main id="main">
            <h1>MY ITEMS</h1>
            <table>
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Last Edit
                    </th>
                    <th>
                        Action
                    </th>
                </tr>

                <?php
                include_once('script/connection.php');
                $query = "SELECT * FROM items";
                $queryResult = $conn->query($query);

                while ($rows = mysqli_fetch_assoc($queryResult)) {
                    echo '
                <tr>
                    <td>'
                        . $rows['id'] . '.
                    </td>
                    <td>'
                        . $rows['name'] .
                        '</td>
                    <td>'
                        . $rows['qty'] .
                        '</td>
                    <td>'
                        . $rows['description'] .
                        '</td>
                    <td>'
                        . $rows['last_edit'] .
                        '</td>
                    <td>
                        <button class="btn btn-primary">UPDATE</button>
                        <button class="btn btn-danger">DELETE</button>
                    </td>
                </tr>';
                }
                ?>
            </table>

        </main>
        <!-- <div class="right-menu container">
            <button class="btn btn-warning">TEMP</button>
        </div> -->

    </div>




    <footer>
        Copyright 2022 &copy; Joerio Christo Chandra
    </footer>

</body>

</html>