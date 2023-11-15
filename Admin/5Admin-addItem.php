<?php
    include("sidevar.html");
    include 'Connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="style-busInformation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="tableContainer">
<button type="button" class="btn btn-success"><a href="5add.php">Add Item</a></button>
    <table class="table table-success table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Buss Number</th>
                <th scope="col">Drivers Name</th>
                <th scope="col">Conductor's Name</th>
                <th scope="col">Item Description</th>
                <th scope="col">Date</th>
                <th scope="col">Operation</th>
                
            </tr>
        </thead>
            <tbody>

            <?php

                $sql = "SELECT *FROM lost_tb";
                $result = mysqli_query($conn,$sql);
                
                if($result)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $bus_no = $row['bus_no'];
                        $dname = $row['drivers_name'];
                        $cname = $row['conductors_name'];
                        $item = $row['item'];
                        $date = $row['date'];

                        echo
                        '
                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$bus_no.'</td>
                    <td>'.$dname.'</td>
                    <td>'.$cname.'</td>
                    <td>'.$item.'</td>
                    <td>'.$date.'</td>
                    <td>
                    <button type="button" class="btn btn-info">Details</button>
                    <button type="button" class="btn btn-success"><a href="5edit.php?editid='.$id.'">Edit</a></button>
                    <button type="button" class="btn btn-Danger">Delete</button>

                    </td>
                </tr>
                        ';

                    }
                }
                
            ?>
                
            
            </tbody>
    </table>
</div> 
</body>
</html>