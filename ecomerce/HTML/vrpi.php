<?php













//connection to database
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test");


$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

$stmt=$connect->prepare("SELECT* FROM registernewpatient");
	$stmt->execute();
	$stmt_result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Registered patients informtion</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>patient id</th>
                <th>name</th>
                <th>gender</th>
		<th>email</th>
                <th>number</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$stmt_result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['patient id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['gender'];?></td>
		<td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['number'];?></td>

            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>
