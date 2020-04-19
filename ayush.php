<?php
  include_once 'dbconnect/db_info.php';
  include_once 'php/data.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ayush's Stats | Weight Tracker</title>
    <link rel="stylesheet" href="css/bulma.css" />
    <link rel="stylesheet" href="css/bulma-calendar.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script type="text/javascript" src="js/ayush_month_dataFetch.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
    <style>
      <?php include 'css/custom.css'; ?>
    </style>
  </head>

  <body>
    <br />
    <div class="container is-fluid">
      <nav class="level">
        <!-- Left side -->
        <div class="level-left">
          <div class="level-item">
            <h1 class="title">
              <a href="index.html">Weight Tracker</a>
            </h1>
          </div>
        </div>

        <!-- Right side -->
        <div class="level-right">
          <p class="level-item"><a href="index.html">Home</a></p>
          <p class="level-item"><a href="ayush.php">Ayush Stats</a></p>
        </div>
      </nav>

<!-- Dropdown menu to display each month. On button click will run the corresponding JS Function -->
<div class="center-dropdown">
<div class="dropdown">
      <div class="dropdown-trigger">
        <button
          class="button"
          aria-haspopup="true"
          aria-controls="dropdown-menu"
        >
          <span>Previous Months</span>
          <span class="icon is-small">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
        <a onclick="updateChartJan()" href="#" class="dropdown-item">
            January
          </a>
          <a onclick="updateChartFeb()" href="#" class="dropdown-item">
            February
          </a>
          <a onclick="updateChartMarch()" href="#" class="dropdown-item">
            March
          </a>
          <a onclick="updateChartApril()" href="#" class="dropdown-item">
            April
          </a>
          <a onclick="updateChartMay()" href="#" class="dropdown-item">
            May
          </a>
          <a onclick="updateChartJune()" href="#" class="dropdown-item">
            June
          </a>
          <a onclick="updateChartJuly()" href="#" class="dropdown-item">
            July
          </a>
          <a onclick="updateChartAug()" href="#" class="dropdown-item">
            August
          </a>
          <a onclick="updateChartSep()" href="#" class="dropdown-item">
            September
          </a>
          <a onclick="updateChartOct()" href="#" class="dropdown-item">
            October
          </a>
          <a onclick="updateChartNov()" href="#" class="dropdown-item">
            November
          </a>
          <a onclick="updateChartDec()" href="#" class="dropdown-item">
            December
          </a>
        </div>
      </div>
    </div>
</div>

<br>
<!--<div class="chart-container">-->
  <canvas id="myChart"></canvas>
<!--</div>-->
<br>


<?php
  include_once 'dbconnect/db_info.php';

  echo "<div class='tags has-addons center-menu'>";
  echo "<span class='tag is-dark is-medium'>Average Weight</span>";

  $sql2 = "SELECT ROUND( AVG(kg),1 ) AS Average FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'April'";
  $result2 = mysqli_query($conn, $sql2);
        
  if ($result2-> num_rows > 0) {
     while ($row2 = $result2-> fetch_assoc()) {
      echo "<span class='tag is-danger is-medium is-light'>". $row2["Average"] ."</span>";
     }
      echo "</div>";
  }
  else {
      echo "0 results";
  }

include_once 'php/weight_table/ayush_weight_tb.php';
?> 

<!-- Used for dynamically updating weight data for other months -->
<div id="tb2"></div>

  <!-- End of responsive container -->
    </div>


    <!-- Composing Chart.js graphs based on current month -->
    <script>
    var test = Chart.defaults.global.animation.duration = 1000;
    // Month 0 = January
    if (new Date().getMonth() == 0) { 
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($jan2); ?>,
        datasets: [{
            label: 'Weight for the Month of January',
              data: <?php echo json_encode($jan); ?>,
            
            
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
    else if (new Date().getMonth() == 1) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($feb2); ?>,
        datasets: [{
            label: 'Weight for the Month of February',
              data: <?php echo json_encode($feb); ?>,
            
            
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
    else if (new Date().getMonth() == 2) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($march2); ?>,
        datasets: [{
            label: 'Weight for the Month of March',
              data: <?php echo json_encode($march); ?>,
            
            
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 3) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($april2); ?>,
        datasets: [{
            label: 'Weight for the Month of April',
              data: <?php echo json_encode($april); ?>,
            
            
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 4) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($may2); ?>,
        datasets: [{
            label: 'Weight for the Month of May',
              data: <?php echo json_encode($may); ?>,
            
            
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 5) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($june2); ?>,
        datasets: [{
            label: 'Weight for the Month of June',
              data: <?php echo json_encode($june); ?>,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 6) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($july2); ?>,
        datasets: [{
            label: 'Weight for the Month of July',
              data: <?php echo json_encode($july); ?>,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 7) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($aug2); ?>,
        datasets: [{
            label: 'Weight for the Month of August',
              data: <?php echo json_encode($aug); ?>,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 8) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($sep2); ?>,
        datasets: [{
            label: 'Weight for the Month of September',
              data: <?php echo json_encode($sep); ?>,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 9) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($oct2); ?>,
        datasets: [{
            label: 'Weight for the Month of October',
              data: <?php echo json_encode($oct); ?>,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 10) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($nov2); ?>,
        datasets: [{
            label: 'Weight for the Month of November',
              data: <?php echo json_encode($nov); ?>,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}
else if (new Date().getMonth() == 11) {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($dec2); ?>,
        datasets: [{
            label: 'Weight for the Month of December',
              data: <?php echo json_encode($dec); ?>,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}

// Dropdown menu button onclick function which will update the Chart and call another function that will create a new table with that month's weight data.
function updateChartJan() {
  myChart.data.datasets[0].data = <?php echo json_encode($jan); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of January";
  myChart.data.labels = <?php echo json_encode($jan2); ?>;
  myChart.update();

  jan();
}

function updateChartFeb() {
  myChart.data.datasets[0].data = <?php echo json_encode($feb); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of February";
  myChart.data.labels = <?php echo json_encode($feb2); ?>;
  myChart.update();

  feb();
}

function updateChartMarch() {
  myChart.data.datasets[0].data = <?php echo json_encode($march); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of March";
  myChart.data.labels = <?php echo json_encode($march2); ?>;
  myChart.update();

  march();
}

function updateChartApril() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  april();
}

function updateChartMay() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  may();
}

function updateChartJune() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  june();
}

function updateChartJuly() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  july();
}

function updateChartAug() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  aug();
}

function updateChartSep() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  sep();
}

function updateChartOct() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  oct();
}

function updateChartNov() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  nov();
}

function updateChartDec() {
  myChart.data.datasets[0].data = <?php echo json_encode($april); ?>;
  myChart.data.datasets[0].label = "Weight for the Month of April";
  myChart.data.labels = <?php echo json_encode($april2); ?>;
  myChart.update();

  dec();
}
</script>


<!-- JavaScript for the Dropdown menu -->
<script>
// Get all dropdowns on the page that aren't hoverable.
const dropdowns = document.querySelectorAll('.dropdown:not(.is-hoverable)');

if (dropdowns.length > 0) {
  // For each dropdown, add event handler to open on click.
  dropdowns.forEach(function(el) {
    el.addEventListener('click', function(e) {
      e.stopPropagation();
      el.classList.toggle('is-active');
    });
  });

  // If user clicks outside dropdown, close it.
  document.addEventListener('click', function(e) {
    closeDropdowns();
  });
}

// Close dropdowns by removing `is-active` class.
function closeDropdowns() {
  dropdowns.forEach(function(el) {
    el.classList.remove('is-active');
  });
}

// Close dropdowns if ESC pressed
document.addEventListener('keydown', function (event) {
  let e = event || window.event;
  if (e.key === 'Esc' || e.key === 'Escape') {
    closeDropdowns();
  }
});
    </script>
  </body>
</html>
