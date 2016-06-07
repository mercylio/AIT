<!DOCTYPE HTML>
<?php
require("connect.php");
?>
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
					<li><a href="datasets.php" class="button special">Get started</a></li>
				</ul>
			</section>


			<div id="navigation">
  				<ul>
   					<li><a href="index2.php">Home</a></li>
    				<li><a href="#three">Information</a></li>
    				<li><a href="#two">Contact Us</a></li>
  				</ul>
  				<ul class="reg">
    				<li><a href="login.php">Login</a></li>
    				<li><a href="register.php">Register</a></li>
  				</ul>
			</div> 

		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>The Honours' List</h2>
					</header>
					<div class="features">
						<div class="feature">
							<i class="fa fa-paper-plane-o"></i>
							<a href="#three"><h3>The Honours' List</h3></a>
							<p> Find out more...</p>
						</div>
						<div class="feature">
							<i class="fa fa-copy"></i>
							<a href="login.php"><h3>Get a copy</h3></a>
							<p>Download a Copy of this information. (You Must Login First).</p>
						</div>
						<div class="feature">
							<i class="fa fa-envelope-o"></i>
							<a href="#two"><h3>Contact Us</h3></a>
							<p>+39 32 1123 3211</p>
   							<p>info@thequeensdataset.it</p>
    						<p>+39 32 1123 3213</p>
						</div>
						<div class="feature">
							<i class="fa fa-diamond"></i>
							<a href="datasets.php"><h3>Birthday Honours</h3></a>
							<p> Birthday Honours are part of the celebration of the reigning monarch's official birthday in each realm. The awards are presented by the reigning monarch or head of state, currently Queen Elizabeth II, or her deputy.</p>
						</div>
						<div class="feature">
							<i class="fa fa-diamond"></i>
							<a href="datasets.php"><h3>New Years' Honours</h3></a>
							<p>Honours have been awarded at New Year since at least 1890, in which year a list of Queen Victoria's awards was published by the London Gazette on 2 January.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2>Get in touch</h2>
					</header>
					<form class="grid-form" method="post" action="#">
						<div class="form-control narrow">
							<label for="name">Name</label>
							<input name="name" id="name" type="text">
						</div>
						<div class="form-control narrow">
							<label for="email">Email</label>
							<input name="email" id="email" type="email">
						</div>
						<div class="form-control">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" type="submit"></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">

					<h2 id="content">The Crown Honours List</h2>
<!-- 					<dl>
  <p>This is a list of honours being conferred upon citizens of the Commonwealth. The awards are presented by or in the name of the reigning monarch, currently Queen Elizabeth II or her vice-regal representative.</p>     
  <p>Lists of those who have received honours at New Year and on the Queen’s official birthday in June each year since 2012. Information is updated after each List is published.</p>
  <p>It includes:</p>
  <ul>
    <li>The level of the Award.</li>
    <li>The name of the recipient.</li>
    <li>Their occupation / position.</li>
    <li>Details of citation.</li>
  </ul>
  <p>The honours system recognizes people who have made achievements in public life or committed themselves to serving and helping Britain. They will usually have been outstanding at what they do.</p>
  <details>
  <summary>This report contains some parts which consist of the following: ...</summary>
  <ul>
    <li>New Year Honours: Honours have been awarded at New Year since at least 1890, in which year a list of Queen Victoria's awards was published by the London Gazette on 2 January.</li>

    <li>Birthday Honours: Birthday Honours are part of the celebration of the reigning monarch's official birthday in each realm. The awards are presented by the reigning monarch or head of state, currently Queen Elizabeth II, or her deputy.

  Known as Queen's Birthday Honours (and King's Birthday Honours in times of a male monarch), all royal honours are published in the London Gazette, Canada Gazette, Commonwealth of Australia Gazette and New Zealand Gazette. The lists are also published in the daily newspapers of each realm.

  Honours have been awarded on the monarch's birthday since at least 9 November 1901, the birthday of King Edward VII (r. 1901–1910).[3][4] After 1908 the monarch's official birthday was moved to the first, second or third Saturday in June (for the UK). Other Commonwealth realms celebrate the official birthday on different dates (generally late May or early June), and release their honours lists accordingly.</li></ul>
  <p>There are also other hounours available, that are not part of the data set:</p>
  <ul>
    <li>Australia Day Honours: The Australia Day honours were established in 1975 to replace the New Year honours in Australia. The list is issued on 26 January every year.</li>

   <li>Prime Minister's Resignation Honours: Honours granted at the behest of an outgoing Prime Minister following his or her resignation. In such a list, a Prime Minister may ask the monarch to bestow peerages, or other lesser honours, on any number of people of his or her choosing.</li>
  <li>Coronation Honours: Coronation honours, are awarded by the sovereign to mark their coronation. The honours are usually those within the sovereign personal gift.</li>
  <li>Dissolution Honours: The Dissolution Honours List, lists those individuals receiving Honours from the Monarch at a time following the Dissolution of the United Kingdom Parliament.</li>
  <li>Bravery Council Honours: Bravery council honours lists recipients of Australian bravery honours. The lists are issued twice a year in March and August respectively.</li>
  <li>Special Honours: Special honours, are lists issued at random points throughout the year. Australia and the United Kingdom both issue Special honours.</li></ul>
  </details></dl> -->
					<div class="row">
						<div class="6u 12u$(small)">
							<h3>The Queens' List</h3>
												<dl>
  <p>This is a list of honours being conferred upon citizens of the Commonwealth. The awards are presented by or in the name of the reigning monarch, currently Queen Elizabeth II or her vice-regal representative.</p>     
  <p>Lists of those who have received honours at New Year and on the Queen’s official birthday in June each year since 2012. Information is updated after each List is published.</p>
  <p>It includes:</p>
  <ul>
    <li>The level of the Award.</li>
    <li>The name of the recipient.</li>
    <li>Their occupation / position.</li>
    <li>Details of citation.</li>
  </ul>
  <p>The honours system recognizes people who have made achievements in public life or committed themselves to serving and helping Britain. They will usually have been outstanding at what they do.</p>
	</dl>
  						</div>
						<div class="6u$ 12u$(small)">
							<h3>More Details</h3>
	<dl>
   <p>This report contains some parts which consist of the following:</p>
   <ul>
     <li>New Year Honours: Honours have been awarded at New Year since at least 1890, in which year a list of Queen Victoria's awards was published by the London Gazette on 2 January.</li>

     <li>Birthday Honours: Birthday Honours are part of the celebration of the reigning monarch's official birthday in each realm. The awards are presented by the reigning monarch or head of state, currently Queen Elizabeth II, or her deputy.
		 Known as Queen's Birthday Honours (and King's Birthday Honours in times of a male monarch), all royal honours are published in the London Gazette, Canada Gazette, Commonwealth of Australia Gazette and New Zealand Gazette. The lists are also published in the daily newspapers of each realm.
		 Honours have been awarded on the monarch's birthday since at least 9 November 1901, the birthday of King Edward VII (r. 1901–1910).[3][4] After 1908 the monarch's official birthday was moved to the first, second or third Saturday in June (for the UK). Other Commonwealth realms celebrate the official birthday on different dates (generally late May or early June), and release their honours lists accordingly.</li></ul>
  </dl>
  						</div>
					</div>
							<h4>There are also other Honours available (Not part of this data set)</h4>
							<dl>
								<dt>Item 1</dt>
								<dd>
									<p>Australia Day Honours: The Australia Day honours were established in 1975 to replace the New Year honours in Australia. The list is issued on 26 January every year.</p>
								</dd>
								<dt>Item 2</dt>
								<dd>
									<p>Prime Minister's Resignation Honours: Honours granted at the behest of an outgoing Prime Minister following his or her resignation. In such a list, a Prime Minister may ask the monarch to bestow peerages, or other lesser honours, on any number of people of his or her choosing.</p>
  								</dd>
								<dt>Item 3</dt>
								<dd>
									<p>Coronation Honours: Coronation honours, are awarded by the sovereign to mark their coronation. The honours are usually those within the sovereign personal gift.</p>
 								</dd>
 								<dt>Item 4</dt>
 								<dd>
 									<p>Dissolution Honours: The Dissolution Honours List, lists those individuals receiving Honours from the Monarch at a time following the Dissolution of the United Kingdom Parliament.</p> 								
 								</dd>	
 								<dt>Item 5</dt>
 								<dd>
 									<p>Bravery Council Honours: Bravery council honours lists recipients of Australian bravery honours. The lists are issued twice a year in March and August respectively.</p>
 								</dd>
 								<dt>Item 6</dt>
 								<dd>
 									<p>Special Honours: Special honours, are lists issued at random points throughout the year. Australia and the United Kingdom both issue Special honours.</p>
 								</dd>
							</dl>

							<!-- <h3>Blockquote</h3>
							<blockquote>The Queens' List. - Andrew James.</blockquote> -->
		
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; DataSets. By: <a href="https://data.gov.uk/dataset/honours-lists/">DATA.GOV.UK</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>