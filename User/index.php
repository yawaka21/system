
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

   
    <script>
        $(document).ready(function () {
            // Initially, hide all rows beyond the first 10
            $('table tbody tr:gt(9)').hide();

            // Handle the "Load More" or "Load Less" button click
            $('#loadToggleBtn').on('click', function () {
                // Toggle visibility of the next 10 rows
                $('table tbody tr:hidden:lt(10)').toggle();

                // Update the button text based on visibility
                var buttonText = $(this).text() === 'Load More' ? 'Load Less' : 'Load More';
                $(this).text(buttonText);
            });

            // Handle the button click to load Table 1
            $('#loadTable1Btn').on('click', function () {
                loadTable('loadTable1.php'); // Adjust the URL to your server-side script for Table 1
            });

            // Handle the button click to load Table 2
            $('#loadTable2Btn').on('click', function () {
                loadTable('departure.php'); // Adjust the URL to your server-side script for Table 2
            });

            // Handle the button click to load Table 3
            $('#loadTable3Btn').on('click', function () {
                loadTable('arrival.php'); // Adjust the URL to your server-side script for Table 3
            });

            function loadTable(url) {
                // Make an AJAX request to fetch data from the server
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'html',
                    success: function (data) {
                        // Replace the content of the table container with the new table
                        $('.tableContainer').html(data);
                    },
                    error: function () {
                        console.error('Error loading table');
                    }
                });
            }
        });
    </script>
    
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
            <div class="loadToggleContainer">
                <button id="loadToggleBtn">Load More</button>
        </div>  
        
        <div class="loadTableContainer">
        <button id="loadTable1Btn">Load Table 1</button>
        <button id="loadTable2Btn">Load Table 2</button>
        <button id="loadTable3Btn">Load Table 3</button>
    </div>  
    </div>
</body>
</html>


