$(document).ready(function() {
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
   type: 'bar',
   data: {
     labels: ['Red', 'Blue', "Yellow", "Green", "Purple", "Orange"],
     datasets: [{
       label: '# of Votes',
       data: [12, 19, 3, 5, 2, 3]
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
});

$(document).ready(function() {
var ctx = document.getElementById("myChart2");
var myChart2 = new Chart(ctx, {
   type: 'pie',
   data: {
     labels: ['Red', 'Blue', "Yellow", "Green", "Purple", "Orange"],
     backgroungColor:["#FF6384", "#36A2EB", "#FFCE56", "#FF6384", "#36A2EB", "#FFCE56"],
     datasets: [{
       label: '# of Votes',
       data: [12, 19, 3, 5, 2, 3],
       backgroungColor:["#FF6384", "#36A2EB", "#FFCE56", "#FF6384", "#36A2EB", "#FFCE56"],
       hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#FF6384", "#36A2EB", "#FFCE56"]
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
});