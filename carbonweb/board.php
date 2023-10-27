<?php
include 'connection.php';
//prerequisites for a single board view with respect to provided time
$date;  // ('Y-m-d')
$id = 00;
$timeinit;  // ('H-i-s')
$timefinal; // (H-i-s')


//other data sets
$datetimeinit;
$datetimefinal;
$starttime = 0;
$endtime = 0;

if($_GET){

    $date = $_GET["date"];
    $id = $_get["id"];
    $timeinit = $_GET["starttime"];
    $timefinal = $_GET["endtime"];
    $datetimeinit = new DateTime($date.' '.$timeinit);
    $datetimefinal = new DateTime($date.' '.$timefinal);
    $starttime  = $datetimeinit->format('H') * $datetimeinit->format('i') * $datetimeinit->format('s') ;
    $endtime =  $datetimefinal->format('H') * $datetimefinal->format('i') * $datetimefinal->format('s');

}

$query = sprintf("SELECT DISTINCT concentration, recordedTime FROM carbon_dioxide WHERE id = $id");


//execute query
$result = $mysqli->query($query);
$id = array();
$concentration = array();
$extractedtime = array();
$timestamps = array();

if ($result) { 
    // Fetch the result as an associative array
    $data = $result->fetch_all(MYSQLI_ASSOC);
  
    // Access the "id" and "concentration" values from the array
    foreach ($data as $row) {
        $concentration[]= $row['concentration'];
        $timestamps[]= $row['recordedTime'];
    }
    // Create a DateTime object using the current timestamp
    // $ourtimes = $timestamp ->format('Y-m-d H:i:s');
    $counter =0;
    foreach($timestamps as $tim){   
        $dateTime = new DateTime($tim);
        // Extract the time from the DateTime object
        $hours = $dateTime ->format('H');
        $minute = $dateTime->format('i');
        $seconds = $dateTime->format('s');
        $calctime  = $hours * $minute * $seconds;
        //filter the required timedata to display
        if ($calctime >= $starttime || $calctime <= $endtime ){
            // Append the extracted time to the array
            array_push($extractedtime,$calctime);
            array_push($concentration,$concentrations[$counter]);
        }
        $counter++;
    }
    // Free the result set
    $result->free();
}
else {
  // Handle the query error
  echo "Error executing the query: ". $mysqli->error;
} 
// Close the database connection
$mysqli->close();

//we have two arrays of data now! 
//extractedtime: product of hours,minutes and seconds
//concentration: data to display

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="chart">
        <div class="beforemychart"></div>
        <div class="myChart"></div>
        <div class="aftermychart"></div>
    </div>
</body>
</html>
<script>
console.log(<?php echo json_encode($concentration); ?>)

// setup
const concentration = <?php echo json_encode($thedaydata); ?>;
const id = <?php echo json_encode($id); ?>;
const minute = <?php echo json_encode($readyTime); ?>;
console.log(minute)
const data = {
labels: minute,
    datasets: [{
      label: 'Carbon dioxide concentration',
      data: concentration,
      borderWidth: 1
    }]
};

// config
const config = {
type: 'bar',
data: data,
options: {
  scales: {
    x: {
      title: {
        display: true,
        text: 'Hours' // X-axis label
      },
      type: 'linear', // Set the x-axis scale type to 'linear'
      beginAtZero: true
    },
    y: {
      beginAtZero: true,
      title: {
        display: true,
        text: 'Concentration' // Y-axis label
      }
    }
  }
}
};

// render
const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
</script>