
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bus Management System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Inter:wght@500;600;
                700&family=Kaushan+Script&family=Montserrat&family=Roboto+Slab&family=Roboto:wght@300&display=swap" 
                rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<?php
    include("header.html");
?>

    <div class="bodypic">
        <img src="imgaes/bodyPicture1.png">
    </div>

    <div class="section2">
        <p class="p1">SCHEDULE</p>
        <p class="p2">Stay inform with  bus schedule with real-time updates.</p>
    </div>

    <div class="section3">
        <p class="p3">Live Bus Travel Information</p>
    </div>

    <div class="tablecontianer">

    
        <div class="tableButtonContainer">
            <div class="stambyButtonContainer">
                <button class="stambyBtn">BUS STAMBY</button>
            </div>

            <div class="arrivalButtonContainer">
              <a href="arrival.php"><button class="arrivalBtn">ARRIVALS</button></a> 
            </div>

            <div class="departureButtonContainer">
                <button class="departureBtn">DEPARTURES</button>
            </div>
        </div>

        <div class="tableContainer">
       
        <table>

<thead>
        <tr>


            <th scope="col">BUS NO.</th>
            <th scope="col">DESTINATION</th>
            <th scope="col">SERVICE</th>
            <th scope="col">Cor Number</th>
            <th scope="col">Departure Time</th>

        </tr>
</thead>

<tbody>

<?php
                include 'Connection.php';
                $query = "SELECT *FROM bus_stamby";

                $result = mysqli_query($conn,$query);
    
                if($result)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $bus_no = $row['bus_no'];
                        $route = $row['route_destination'];
                        $unit = $row['unit'];
                        $cor_number = $row['cor_number'];
                        $departure_time = $row['departure_time'];

                        
                        echo'
                        <tr>
                        <td>'.$bus_no.'</td>
                        <td>'.$route.'</td>
                        <td>'.$unit.'</td>
                        <td>'.$cor_number.'</td>
                        <td>'.$departure_time.'</td>
                        </tr>
                        ';
                    }
                }
                else
                {

                }
                ?>
                
                </tbody>


 
            </table>
        </div>

    </div>
</body>
</html>


