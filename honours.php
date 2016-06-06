<? php
require("connect.php");
?>
<script>
$(document).ready(function() {
  var ctx = document.getElementById("myChart");

  <?php 
  for ($i=1; $i<=8; $i++){
    ?>
    var myChart<?php echo $i ?> = new Chart(ctx<?php echo $i ?>, {
       type: 'pie',
       data: {
         backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#E7E9ED", "#36A2EB"],
         labels: [<?php echo $labels[$i] ?>],
         datasets: [{
          backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#E7E9ED", "#36A2EB"],
          hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
           label: '# of Votes',
           data: [<?php echo $data[$i]; ?>];
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
