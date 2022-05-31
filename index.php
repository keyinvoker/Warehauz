<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/template.css">
    <script src="script/hamburger.js"></script>
    <link rel="icon" href="assets/images/warehouse-icon.png">
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



    <main id="main">
        <h1>ITEMS TABLE</h1>
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
                    <td style="text-align:center;">'
                    . $rows['name'] .
                    '</td>
                    <td style="text-align:right;">'
                    . $rows['qty'] .
                    '</td>
                    <td style="text-align:center;">'
                    . $rows['description'] .
                    '</td>
                    <td style="text-align:center;">'
                    . $rows['last_edit'] .
                    '</td>
                </tr>';
            }
            ?>
        </table>
    </main>



    <footer>

    </footer>

</body>

</html>