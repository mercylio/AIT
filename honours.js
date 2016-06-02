$(document).ready(function() {
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
   type: 'bar',
   data: {
     backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#E7E9ED", "#36A2EB"],
     labels: ['Red', 'Blue', "Yellow", "Green", "Purple", "Orange"],
     datasets: [{
      backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#E7E9ED", "#36A2EB"],
      hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
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
     datasets: [{
      backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#E7E9ED", "#36A2EB"],
      hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
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
var ctx = document.getElementById("myChart3");
var myChart3 = new Chart(ctx, {
   type: 'pie',
   data: {
     labels: ['Red', "Orange", "Yellow", "Green", 'Blue', 'Indigo', "Purple"],
     datasets: [{
      backgroundColor: ["#FF6384", "#4BC0C0", "#FFCE56", "#E7E9ED", "#36A2EB", "#36A2EB", "#FFCE56"],
      hoverBackgroundColor: ["#4BC0C0", "#FFCE56", "#E7E9ED", "#36A2EB", "#36A2EB", "#FFCE56", "#FF6384"],
       label: '# of Votes',
       data: [12, 19, 3, 5, 2, 3, 5]
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