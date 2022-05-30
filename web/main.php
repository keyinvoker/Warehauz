<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="../style/hamburger.css">
    <script src="../script/hamburger.js"></script>
    <title>Warehauz</title>
</head>

<body>

    <header>
        <div class="title">
            <h1>
                WareHauz
            </h1>
            <p>
                personal virtual warehouse
            </p>
        </div>
    </header>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Home</a>
        <a href="#">Items</a>
        <a href="#">Contact</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span class="hamburger-btn" onclick="openNav()">&#9776; open</span>

    <main id="main">
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
            include_once('../script/connection.php');
            $query = "SELECT * FROM items";
            $queryResult = $conn->query($query);

            while ($rows = mysqli_fetch_assoc($queryResult)) {
                echo '
                <tr>
                    <td>'
                    . $rows['id'] .
                    '</td>
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
                </tr>';
            }
            ?>
        </table>
    </main>



    <footer>

    </footer>

</body>

</html>