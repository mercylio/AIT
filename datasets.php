<?php
include 'session_handler.php';

require("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ProjectData by STANLIO</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" type="text/css" media="screen,projection" href="css/master.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.0/Chart.min.js"></script>
<script type="text/javascript" src="caption.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>
<body>
  <!-- Banner -->
      <section id="banner">
        <h2><strong>Honours Open Data</strong> is a dataset provider</h2>
        <p>Brought to you by StanLio</p>
        <ul class="actions">
          <li><?php
            echo "Welcome back, ".$_SESSION["username"]."!";
          ?>
          </li>
        </ul>
      </section>

<div id="navigation">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#about">Birthday Honours</a></li>
    <li><a href="#newyear">New Years' Honours</a></li>
    <li><a href="#notes">About Us</a></li>
  </ul>
  <ul class="reg">
    <?php
      if($_SESSION["username"] != "anonymous_user"){
        Print "
        <li><a href='download.php'>Downloads (".count($_SESSION['shopping_cart']).
        ")</a></li>
        <li><a href='logout.php'>Logout</a></li>";
      }
      else {
        Print "
        <li><a href='login.php'>Login</a></li>
        <li><a href='register.php'>Register</a></li>";
      }
    ?>    
  </ul>
</div> 
<div id="about">
  <dl><p>Birthday Honours</p>
  <details>
  <summary>This report contains Birthday Honours of the following years: ...</summary>
  <ul>
    <li>2008</li>
    <li>2009</li>
    <li>2010</li>
    <li>2011</li>
    <li>2012</li>
    <li>2013</li>
    <li>2014</li>
    <li>2015</li>
  </ul>
  <p>There are also other hounours available, <a href="#newyear">New Years' Honours</a></p>
  <ul>
    <li>2008</li>
   <li>2009</li>
  <li>2010</li>
  <li>2011</li>
  <li>2012</li>
  <li>2013</li>
  <li>2014</li>
  <li>2015</li>
  </ul>
  </details></dl>
</div>
  <h3>Birthday List</h3>
    <h4>2008 - 2015</h4>
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Download CSV</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2008</td>
            <td>
                <details>
                  <summary>Chart1</summary>
                  <canvas id="myChart1"></canvas>
                  </script>
                </details></td>
            <td><a href="add_to_download.php?id=BD2008">Download 2008 List</a></td>
          </tr>
          <tr>
            <td>2009</td>
            <td><details>
                  <summary>Chart2</summary>
                  <canvas id="myChart2"></canvas>
                  </details></td>
            <td><a href="add_to_download.php?id=BD2009">Download 2009 List</a></td>
          </tr>
          <tr>
            <td>2010</td>
            <td><details>
                  <summary>Chart3</summary>
                  <canvas id="myChart3"></canvas>
                  </details></td>
            <td><a href="add_to_download.php?id=BD2010">Download 2010 List</a></td>
          </tr>
          <tr>
            <td>2011</td>
            <td><details>
                  <summary>Chart4</summary>
                  <canvas id="myChart4"></canvas>
                  </details></td>
            <td><a href="add_to_download.php?id=BD2011">Download 2011 List</a></td>
          </tr>
          <tr>
            <td>2012</td>
            <td><details>
                  <summary>Chart5</summary>
                  <canvas id="myChart5"></canvas>
                  </details></td>
            <td><a href="add_to_download.php?id=BD2012">Download 2012 List</a></td>
          </tr>
           <tr>
            <td>2013</td>
            <td><details>
                  <summary>Chart6</summary>
                  <canvas id="myChart6"></canvas>
                  </details></td>
            <td><a href="add_to_download.php?id=BD2013">Download 2013 List</a></td>
          </tr>
           <tr>
            <td>2014</td>
            <td><details>
                  <summary>Chart7</summary>
                  <canvas id="myChart7"></canvas>
                  </details></td>
            <td><a href="add_to_download.php?id=BD2014">Download 2014 List</a></td>
          </tr>
           <tr>
            <td>2015</td>
            <td><details>
                  <summary>Chart8</summary>
                  <canvas id="myChart8"></canvas>
                  </details></td>
            <td><a href="add_to_download.php?id=BD2015">Download 2015 List</a></td>
          </tr>
        </tbody>
      </table>
    </div>
<div id="newyear">
  <dl><p>New Years' Honours</p>
  <details>
  <summary>This report contains New Years' Honours of the following years: ...</summary>
  <ul>
    <li>2008</li>
    <li>2009</li>
    <li>2010</li>
    <li>2011</li>
    <li>2012</li>
    <li>2013</li>
    <li>2014</li>
    <li>2015</li>
  </ul>
  <p>There are also other hounours available, <a href="#about">Birthday Honours</a></p>
  <ul>
    <li>2008</li>
    <li>2009</li>
    <li>2010</li>
    <li>2011</li>
    <li>2012</li>
    <li>2013</li>
    <li>2014</li>
    <li>2015</li>
  </ul>
  </details></dl>
</div>
 <h3>New Years' List</h3>
  <h4>2008 - 2015</h4>
  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Download CSV</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2008</td>
          <td>
              <details>
                <summary>Chart9</summary>
                <canvas id="myChart9"></canvas>
                </script>
              </details></td>
          <td><a href="add_to_download.php?id=NY2008">Download 2008 List</a></td>
        </tr>
        <tr>
          <td>2009</td>
          <td><details>
                <summary>Chart10</summary>
                <canvas id="myChart10"></canvas>
                </details></td>
          <td><a href="add_to_download.php?id=NY2009">Download 2009 List</a></td>
        </tr>
        <tr>
          <td>2010</td>
          <td><details>
                <summary>Chart11</summary>
                <canvas id="myChart11"></canvas>
                </details></td>
          <td><a href="add_to_download.php?id=NY2010">Download 2010 List</a></td>
        </tr>
        <tr>
          <td>2011</td>
          <td><details>
                <summary>Chart12</summary>
                <canvas id="myChart12"></canvas>
                </details></td>
          <td><a href="add_to_download.php?id=NY2011">Download 2011 List</a></td>
        </tr>
        <tr>
          <td>2012</td>
          <td><details>
                <summary>Chart13</summary>
                <canvas id="myChart13"></canvas>
                </details></td>
          <td><a href="add_to_download.php?id=NY2012">Download 2012 List</a></td>
        </tr>
         <tr>
          <td>2013</td>
          <td><details>
                <summary>Chart14</summary>
                <canvas id="myChart14"></canvas>
                </details></td>
          <td><a href="add_to_download.php?id=NY2013">Download 2013 List</a></td>
        </tr>
         <tr>
          <td>2014</td>
          <td><details>
                <summary>Chart15</summary>
                <canvas id="myChart15"></canvas>
                </details></td>
          <td><a href="add_to_download.php?id=NY2014">Download 2014 List</a></td>
        </tr>
         <tr>
          <td>2015</td>
          <td><details>
                <summary>Chart16</summary>
                <canvas id="myChart16"></canvas>
                </details></td>
          <td><a href="add_to_download.php?id=NY2015">Download 2015 List</a></td>
        </tr>
      </tbody>
    </table>
  </div>
<div id="notes">
  <dl><p>About StanLio</p>
  <p>We are a service provider that offers some specialized information in the form of a dataset.</p>
  <p>The reports we bring contain lists of the Royal Queens Honours of a number of years: </p>
  <p>We offer a list of:</p>
  <ul>
    <li>Birthday Honors presented by the Queen.</li>
    <li>New Years Honors also presented by the Queen on the dawn of a new year.</li>
  </ul>
</div>

<footer id="footer">
        <div class="copyright">
          &copy; DataSets. By: <a href="https://data.gov.uk/dataset/honours-lists/">DATA.GOV.UK</a>.
        </div>
      </footer>
</body> 
<script>
$(document).ready(function() {
  <?php 
  for ($i=1; $i<=16; $i++){
    ?>
    var ctx<?php echo $i ?> = document.getElementById("myChart<?php echo $i ?>");
    var myChart<?php echo $i ?> = new Chart(ctx<?php echo $i ?>, {
       type: 'pie',
       data: {
         backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#4b86c0", "#36A2EB", "#99ff99", "#ff3333", "#ff80ff", "#4dff4d", "#b366ff", "#ffc34d", "#33ffad"],
         labels: <?php echo json_encode($labels[$i]); ?>,
         datasets: [{
          backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#4b86c0", "#36A2EB", "#99ff99", "#ff3333", "#ff80ff", "#4dff4d", "#b366ff", "#ffc34d", "#33ffad"],
          hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
           label: '# of Votes',
           data: <?php echo json_encode($data[$i]); ?>
         }]
       },
       options: {
         scales: {
           yAxes: [{
             ticks: {
              beginAtZero:true,
             }
           }]
         },
         responsive:true
       }
     });
  <?php
  } // end of for loop
  ?>
}); // end of doc.ready
</script>
</html>