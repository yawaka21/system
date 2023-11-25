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
            $('table tbody tr:gt(4)').hide();

            // Keep track of whether the tables are currently expanded
            var tablesExpanded = false;

            // Handle the "Show More" or "Load Less" button click
            $('#showMoreBtn').on('click', function () {
                // Toggle visibility of the next 10 rows
                $('table tbody tr:lt(15)').toggle();

                // Update the button text based on visibility
                var buttonText = tablesExpanded ? 'Show More' : 'Load Less';
                $(this).text(buttonText);

                // Toggle the state of the tables
                tablesExpanded = !tablesExpanded;
            });

            // Handle the button click to load Table 1
            $('#stambyBtn').on('click', function () {
                loadTable('busStamby.php'); // Adjust the URL to your server-side script for Table 1
            });

            // Handle the button click to load Table 2
            $('#arrivalBtn').on('click', function () {
                loadTable('arrival.php'); // Adjust the URL to your server-side script for Table 2
            });

            // Handle the button click to load Table 3
            $('#departureBtn').on('click', function () {
                loadTable('departure.php'); // Adjust the URL to your server-side script for Table 3
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

                        // Hide the rows beyond the first 10 for the new table
                        $('table tbody tr:gt(9)').hide();
                        
                        // Add "Show More" button for the new table
                        var showMoreBtn = $('<button>', {
                            id: 'showMoreBtn',
                            text: 'Show More',
                            click: function () {
                                // Toggle visibility of the next 10 rows for the new table
                                $('table tbody tr:lt(4)').toggle();

                                // Update the button text based on visibility
                                var buttonText = tablesExpanded ? 'Show More' : 'Load Less';
                                $(this).text(buttonText);

                                // Toggle the state of the tables
                                tablesExpanded = !tablesExpanded;
                            }
                        });

                        // Append the "Show More" button to the container
                        $('.loadToggleContainer').html(showMoreBtn);

                        // Reset the state of the tables
                        tablesExpanded = false;
                    },
                    error: function () {
                        console.error('Error loading table');
                    }
                });
            }
        });
    </script>
    
</head>
<?php
include 'header.html'
?>
<body>
 
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
                <button id="stambyBtn" class="stambyBtn">BUS STAMBY</button>
            </div>

            <div class="arrivalButtonContainer">
                <button class="arrivalBtn" id="arrivalBtn">ARRIVALS</button>
            </div>

            <div class="departureButtonContainer">
                <button class="departureBtn" id="departureBtn">DEPARTURES</button>
            </div>
        </div>

    <div class="tableContainer">
        <?php 
            include 'busStamby.php';
        ?>
    </div>
        <div class="loadToggleContainer">
           <div><button id="showMoreBtn">Show More</button></div>
        </div>
    </div>


    </div>
</body>
</html>


