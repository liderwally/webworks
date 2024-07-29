<?php
include 'home.php';
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



$query = sprintf("SELECT DISTINCT id,concentration, recordedTime FROM carbon_dioxide");

//execute query
// $result = mysqli->query($query);
if(mysqli_query($conn,$query))
{
  $result=mysqli_query($conn,$query);
}
$id = array();
$concentration = array();
$extractedtime = array();
$timestamps = array();
$id = array();

if ($result) { 
    // Fetch the result as an associative array
    $data = $result->fetch_all(MYSQLI_ASSOC);
  
    // Access the "id" and "concentration" values from the array
    
    foreach ($data as $row) {
        $concentration= $row['concentration'];
        $timestamps[]= $row['recordedTime']; 
        $id = $row['id'];

    }

    // Create a DateTime object using the current timestamp

    foreach($timestamps as $tim){
      $dateTime = new DateTime($tim);
      array_push($extractedtime, $dateTime);
    }


    $result->free();
}
else {
  // Handle the query error
  echo "Error executing the query: ". $mysqli->error;
} 
// Close the database connection
$conn->close();


//we have two arrays of data now! 
//extractedtime: time to which the data was recorded
//concentration: data to display

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .chart{
    background-color:#4CAF50;
    width:calc(100% - 20px);
    height:90vh;
    border-radius: 10px;
    margin: 10px;
    left:0px;
    display:block;
    padding-top:10px;
  }
  .beforemychart{
    background-color:#4CAFCB;
    width:calc(100% - 20px);
    height:calc(10% - 20px);
    border-radius: 10px;
    margin: 10px;
    left:0px;
  }
  .myChart{
    background-color:#4CAFCB;
    width:calc(100% - 20px);
    height:calc(80% - 20px);
    border-radius: 10px;
    margin: 10px;
    left:0px;
  }
  .aftermychart{
    background-color:#4CAFCB;
    width:calc(100% - 20px);
    height:calc(10% - 20px);
    border-radius: 10px;
    margin: 10px;
    left:0px;
  }
</style>
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
const concentration = <?php echo json_encode($concentration); ?>;
const id = <?php echo json_encode($id); ?>;
const thetime = <?php echo json_encode($extractedtime); ?>;
console.log(thetime);
const data = {
labels: thetime,
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