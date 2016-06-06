<?php
// gather data
 require("connect.php");
?>
<html>
<head>
<title>Our Project AlMeBO</title>

<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.0/Chart.min.js"></script>
<script type="text/javascript" src="caption.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>
 $(document).ready(function(){
   $("#firstarticle").hide();
     $("button.first").click(function(){
         $("#firstarticle").toggle();
     });
 });
$(document).ready(function(){
  $("#secondarticle").hide();
    $("button.second").click(function(){
        $("#secondarticle").toggle();
        $("articles").hide();
    });
});
$(document).ready(function(){
 $("#thirdarticle").hide();
  $("button.third").click(function(){
      $("#thirdarticle").toggle();
    });
});
$(document).ready(function(){
  $("#firstarticleny").hide();
    $("button.firstny").click(function(){
        $("#firstarticleny").toggle();
    });
});
$(document).ready(function(){
  $("#secondarticleny").hide();
    $("button.secondny").click(function(){
        $("#secondarticleny").toggle();
    });
});
$(document).ready(function(){
  $("#thirdarticleny").hide();
    $("button.thirdny").click(function(){
        $("#thirdarticleny").toggle();
    });
});
$(document).ready(function(){
  $("#fourtharticleny").hide();
    $("button.fourthny").click(function(){
        $("#fourtharticleny").toggle();
    });
});
$(document).ready(function(){
  $("#fiftharticleny").hide();
    $("button.fifthny").click(function(){
        $("#fiftharticleny").toggle();
    });
});
</script>
</head>
<body>
<div id="header">
  <h1><a href="index.html" title="Go Home" rel="bookmark">Home</a></h1>
</div>
<div id="navigation">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="#about">Information</a></li>
    <li><a href="#content">Our Portfolio</a></li>
    <li><a href="#notes">About Us</a></li>
    <li><a href="#contact">Contact Us</a></li>
  </ul>
  <ul class="reg">
    <li><a href="login.html">Login</a></li>
    <li><a href="reg.html">Register</a></li>
    
  </ul>
</div>
<div id="about">
  <dl><p>Birthday Honours</p>
  <p>Click the images to view more.</p>
  <details>
  <summary>This report contains birthday Honours of the following years: ...</summary>
  <ul>
    <li>2008</li>
    <li>2009</li>
    <li>2010</li>
  </ul>
  <p>There are also other hounours available, <a href="#newyear">New Years' Honours</a></p>
  <ul>
    <li>2008</li>
   <li>2009</li>
  <li>2010</li>
  <li>2011</li>
  <li>2012</li>
  <li>2013</li></ul>
  </details></dl>
</div>
<div id="content">
  <header>
  <nav class="clear">
    <div class="drop-shadow"> <button class="first"> <a href="#firstarticle"><img src="images/crown2.jpg" width="100" height="70" alt="Honours List 2008[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
    <div class="drop-shadow"> <button class="second"> <a href="#secondarticle"><img src="images/crown5.jpg" width="100" height="70" alt="Honours List 2009[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
    <div class="drop-shadow"> <button class="third"> <a href="#thirdarticle"><img src="images/crown4.jpg" width="100" height="70" alt="Honours List 2010[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
  </nav></header> <hr /> 

  <div> <section id="articles">
    <article id="firstarticle" class="birthday">
      <section class="clear">
        <p>2008</p>
        <details>
          <summary>Chart1</summary>
           <canvas id="myChart1"></canvas>
            </script>
          </details>
        </section>
      </article>

    <article id="secondarticle" class="birthday">
      <section class="clear">
        <p>2009</p>
        <details>
          <summary>Chart2</summary>
           <canvas id="myChart2"></canvas>
          </details>
        </section>
      </article>

    <article id="thirdarticle" class="birthday">
      <section class="clear">
        <p>2010</p>
        <details>
          <summary>Chart3</summary>
           <canvas id="myChart3"></canvas>
            </script>
          </details>
        </section>
      </article>

    <article id="fourtharticle" class="birthday">
      <section class="clear">
        <p>2011</p>
        <details>
          <summary>Chart4</summary>
           <canvas id="myChart4"></canvas>
            </script>
          </details>
        </section>
      </article>

    <article id="fiftharticle" class="birthday">
      <section class="clear">
        <p>2012</p>
        <details>
          <summary>Chart5</summary>
           <canvas id="myChart5"></canvas>
            </script>
          </details>
        </section>
      </article>

    <article id="sixtharticle" class="birthday">
      <section class="clear">
        <p>2013</p>
        <details>
          <summary>Chart6</summary>
           <canvas id="myChart6"></canvas>
            </script>
          </details>
        </section>
      </article>

    <article id="seventharticle" class="birthday">
      <section class="clear">
        <p>2014</p>
        <details>
          <summary>Chart7</summary>
           <canvas id="myChart7"></canvas>
            </script>
          </details>
        </section>
      </article>

    <article id="eigtharticle" class="birthday">
      <section class="clear">
        <p>2015</p>
        <details>
          <summary>Chart8</summary>
           <canvas id="myChart8"></canvas>
            </script>
          </details>
        </section>
      </article>
</section></div>
</div>

<div id="newyear">
  <dl><p>New Years' Honours</p>
  <p>Click the images to view more.</p>
  <details>
  <summary>This report contains New Years' Honours of the following years: ...</summary>
  <ul>
    <li>2008</li>
    <li>2009</li>
    <li>2010</li>
    <li>2011</li>
    <li>2012</li>
    <li>2013</li>
  </ul>
  <p>There are also other hounours available, <a href="#about">Birthday Honours</a></p>
  <ul>
    <li>2008</li>
    <li>2009</li>
    <li>2010</li>
  </ul>
  </details></dl>
</div>
<div id="content">
  <header>
  <nav class="clear">
    <div class="drop-shadow"> <button class="firstny"> <a href="#firstarticleny"><img src="images/crown2.jpg" width="100" height="70" alt="Honours List 2008[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
    <div class="drop-shadow"> <button class="secondny"> <a href="#secondarticleny"><img src="images/crown5.jpg" width="100" height="70" alt="Honours List 2009[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
    <div class="drop-shadow"> <button class="thirdny"> <a href="#thirdarticleny"><img src="images/crown4.jpg" width="100" height="70" alt="Honours List 2010[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
    <div class="drop-shadow"> <button class="fourthny"> <a href="#fourtharticleny"><img src="images/crown5.jpg" width="100" height="70" alt="Honours List 2010[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
    <div class="drop-shadow"> <button class="fifthny"> <a href="#fiftharticleny"><img src="images/crown2.jpg" width="100" height="70" alt="Honours List 2010[Credit:data.gov.uk]" class="captionated" /></a> </button> </div>
  </nav></header> <hr /> 

  <div> <section id="articlesny">
    <article id="firstarticleny" class="newyear">
      <section class="clear">
        <p>2008</p>
        <details>
          <summary>Chart9</summary>
           <canvas id="myChart9"></canvas>
            </script>
          </details>
        </section>
      </article>

    <article id="secondarticleny" class="newyear">
      <section class="clear">
        <p>2009</p>
        <details>
          <summary>Chart10</summary>
           <canvas id="myChart10"></canvas>
          </details>
        </section>
      </article>

    <article id="thirdarticleny" class="newyear">
      <section class="clear">
        <p>2010</p>
        <details>
          <summary>Chart11</summary>
           <canvas id="myChart11"></canvas>
            </script>
          </details>
        </section>
      </article>

      <article id="fourtharticleny" class="newyear">
      <section class="clear">
        <p>2011</p>
        <details>
          <summary>Chart12</summary>
           <canvas id="myChart12"></canvas>
            </script>
          </details>
        </section>
      </article>

      <article id="fiftharticleny" class="newyear">
      <section class="clear">
        <p>2012</p>
        <details>
          <summary>Chart13</summary>
           <canvas id="myChart13"></canvas>
            </script>
          </details>
        </section>
      </article>

      <article id="sixtharticleny" class="newyear">
      <section class="clear">
        <p>2013</p>
        <details>
          <summary>Chart14</summary>
           <canvas id="myChart14"></canvas>
            </script>
          </details>
        </section>
      </article>

      <article id="seventharticleny" class="newyear">
      <section class="clear">
        <p>2014</p>
        <details>
          <summary>Chart15</summary>
           <canvas id="myChart15"></canvas>
            </script>
          </details>
        </section>
      </article>
            
      <article id="eightharticleny" class="newyear">
      <section class="clear">
        <p>2015</p>
        <details>
          <summary>Chart16</summary>
           <canvas id="myChart16"></canvas>
            </script>
          </details>
        </section>
      </article>

</section></div>
</div>

<div id="notes">
  <dl><p>About AlMeBO</p>
  <p>We are a service provider that offers some specialized information in the form of a dataset.</p>
  <details>
  <summary>The reports we bring contain lists of the Royal Queens Honours of a number of years: ...</summary>
  <p>We offer a list of:</p>
  <ul>
    <li>Birthday Honors presented by the Queen.</li>
    <li>New Years Honors also presented by the Queen on the dawn of a new year.</li>
  </ul>
</div>

<div id="contact">
  <dl>
  <details>
  <summary>Contact us on ...</summary>
  <ul>
    <li><p><i class="fa fa-phone"><span> +39 32 1123 3211</span></i></p></li>
    <li><p><i class="fa fa-envelope"><span> info@thequeensdataset.it</span></i></p></li>
    <li><p><i class="fa fa-print"><span> +39 32 1123 3213</span></i></p></li>
  </ul>
</div>

<div id="footer">
  <p>We did a thing </p>
  <p>Hope you're happy</p>
  <p><a href="https://data.gov.uk/dataset/honours_list">We deserve a perfect score</a></p> 
</div>
<div align=center>This website is a lie...</div>

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
