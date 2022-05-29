<!-- SELECT COUNT(best_color) AS blueCount FROM colors WHERE best_color = "blue"; -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Create connection
require "conn.php";
$conn = new mysqli($host,$user,$pass);


$sql = "SELECT COUNT(best_color) AS blueCount FROM u610989519_colors2.colors WHERE best_color = 'blue'";
$result = $conn->query($sql);
$blueCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($blueCountArray, $row['blueCount']);
};

$sql = "SELECT COUNT(best_color) AS redCount FROM u610989519_colors2.colors WHERE best_color = 'red'";
$result = $conn->query($sql);
$redCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($redCountArray, $row['redCount']);
};

$sql = "SELECT COUNT(best_color) AS yellowCount FROM u610989519_colors2.colors WHERE best_color = 'yellow'";
$result = $conn->query($sql);
$yellowCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($yellowCountArray, $row['yellowCount']);
};

$sql = "SELECT COUNT(best_color) AS greenCount FROM u610989519_colors2.colors WHERE best_color = 'green'";
$result = $conn->query($sql);
$greenCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($greenCountArray, $row['greenCount']);
};

$sql = "SELECT COUNT(best_color) AS purpleCount FROM u610989519_colors2.colors WHERE best_color = 'purple'";
$result = $conn->query($sql);
$purpleCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($purpleCountArray, $row['purpleCount']);
};

$sql = "SELECT COUNT(best_color) AS orangeCount FROM u610989519_colors2.colors WHERE best_color = 'orange'";
$result = $conn->query($sql);
$orangeCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($orangeCountArray, $row['orangeCount']);
};

$sql = "SELECT COUNT(best_color) AS whiteCount FROM u610989519_colors2.colors WHERE best_color = 'white'";
$result = $conn->query($sql);
$whiteCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($whiteCountArray, $row['whiteCount']);
};

$sql = "SELECT COUNT(best_color) AS blackCount FROM u610989519_colors2.colors WHERE best_color = 'black'";
$result = $conn->query($sql);
$blackCountArray = array();
while($row = mysqli_fetch_array($result)){
  array_push($blackCountArray, $row['blackCount']);
};



$conn->close();
?>

<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/pie-chart.png"  />
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>Charts by Grant</title>
    
</head>
<body style="background-color:#2c2c2c; color: white;">
  <nav class="navbar navbar-expand-sm navbar-dark  fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Charts by Grant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#bar-chart">Bar Chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
  <section class="video-container">
    <video src="assets/bw.mp4" autoplay loop playsinline muted></video>
    <div class="callout">
      <h1>Charts by Grant</h1>
      <div>
        <a type="button" class="btn btn-outline-light" href="#bar-chart">Get Started</a>
      </div>
    </div>
  </section>
  <div class="main" style="padding-bottom: 10vh; padding-top: 10vh;" id="bar-chart">
    <div class="container-fluid mt-5" >
      <div class="row">
        <div class="col-xxl-2"></div>   
        <div class="col-xxl-3 ">
          <br>
          <div class="d-flex justify-content-center">
            
            <h3>What is the best color?</h3>
          </div>
          <form action="insert.php">
            <div class="color-buttons">
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn-red" value="red" name="red_vote">Red</button>
                <button type="submit" class="btn-blue" value="blue" name="blue_vote">Blue</button>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn-yellow" value="yellow" name="yellow_vote">Yellow</button>
                <button type="submit" class="btn-green" value="green" name="green_vote">Green</button>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn-purple" value="purple" name="purple_vote">Purple</button>
                <button type="submit" class="btn-orange" value="orange" name="orange_vote">Orange</button>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn-white" value="white" name="white_vote">White</button>
                <button type="submit" class="btn-black" value="black" name="black_vote">Black</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-xxl-5">
          <canvas id="barChart"></canvas>    
          <script>
            var redCount = <?php echo json_encode($redCountArray[0]) ?>;
            var blueCount = <?php echo json_encode($blueCountArray[0]) ?>;
            var yellowCount = <?php echo json_encode($yellowCountArray[0]) ?>;
            var greenCount = <?php echo json_encode($greenCountArray[0]) ?>;
            var purpleCount = <?php echo json_encode($purpleCountArray[0]) ?>;
            var orangeCount = <?php echo json_encode($orangeCountArray[0]) ?>;
            var whiteCount = <?php echo json_encode($whiteCountArray[0]) ?>;
            var blackCount = <?php echo json_encode($blackCountArray[0]) ?>;
            const ctx = document.getElementById('barChart').getContext('2d');
            const barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'White', 'Black'],
                    datasets: [{
                        label: '# of Votes',
                        data: [redCount, blueCount, yellowCount, greenCount, purpleCount, orangeCount, whiteCount, blackCount],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 255, 255, 0.2)',
                            'rgba(0, 0, 0, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 255, 255, 1)',
                            'rgba(0, 0, 0, 1)'
                        ],
                        borderWidth: 1,
                        color: "#fff"
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks:{
                              color: "white",
                              font: {
                                family: "'Comfortaa', cursive" 
                              }
                            }
                        },
                        x: {
                            ticks:{
                              color: "white",
                              font: {
                                family: "'Comfortaa', cursive" 
                              } 
                            }
                        }
                    },
                    plugins:{
                      legend:{
                        display: false,
                      }
                    }
                  
                }
                
            });
            </script>
        </div>
        <div class="col-xxl-2"></div>
      </div>
    </div>
    <br>
    <br>
    <div class="info">
      <div class="container-fluid" id="bar-chart-info">
        <div class="row">
          <div class="col-12 text-center">
              <h5 >Voting for a color will insert a row into a database using MySQL and count your vote on the chart.</h5>
          </div>
        </div>
      </div>
  </div>
</div>
</body>
</html>