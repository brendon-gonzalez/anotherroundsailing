<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<title>Sail Lake Erie &amp; Presque Isle Bay</title>
    <?php include('php/header.php'); ?>
</head>
<body id="home" class="container">
    <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>outdated!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<?php //include('php/navigation.php'); ?>
		<header id="main-header" class="row">
			<section class="eight columns centered">
				<h1>Sail your Troubles Away</h1>	
				<h2>Sail around Lake Erie &amp; Presque Isle Bay aboard <strong>"Another Round"</strong> a 28' O'day sail boat.</h2>
			</section>
		</header>
		<div id="content">
			<img src="<?php echo $base_url.'img/rope.png' ?>" class="rope" />
			<?php include 'php/navigation.php'; ?>
			<h2 class="row">What's it Entail?</h2>
			<div id="entail" class="row rounded">
				<section class="six columns">
					<p>Mike Gonzalez and Vito Randazzo would like to welcome you aboard Another Round, a 28 ft. O’Day sailboat. What better way to spend a summer day or evening than sailing on the waters of Lake Erie.</p>
					<p>Another Round can accommodate up to four passengers and will take you on a minimum of a two hour cruise. Come experience the joy and relaxation that being out on the water can bring</p>
						<p>Cruises are $40 per hour, with a minimum of 2 hours.	
					</p>
						
				</section>
				<section class="six columns">
					<img src="<?php echo $base_url.'img/boat.jpg' ?>" alt="Another Round Boat" class="shadow" />
				</section>
			</div>
			<img src="<?php echo $base_url.'img/rope.png' ?>" class="rope" />
			<h2 class="row">About the Captain(s)</h2>
			<div id="about" class="row rounded">	
				<section class="three columns">
					<figure>
						<img src="<?php echo $base_url.'img/vito.jpg'; ?>" class="shadow" alt="Vito" />
					<figcaption>Vito</figcaption>
					</figure>
				</section>
				<section class="six columns">
					<!--<blockquote class="rounded">
						Inspirational Quote!					
					</blockquote>
					<address>-Mike, The Captain</address>-->
					<p>
						Mike and Vito are longtime friends and co-workers who, much to the chagrin of their families,
discovered the joys and challenges of sailing. They became U.S. Coast Guard licensed captains and are
always looking for an excuse to be out on the water. So give them a call, they want to go sailing!
					</p>	
				</section>
				<section class="three columns">
					<figure>
						<img src="<?php echo $base_url.'img/mike.jpg' ?>" class="shadow" alt="Mike" />
						<figcaption>Mike</figcaption>
					</figure>
				</section>
			</div>
			<img src="<?php echo $base_url.'img/rope.png' ?>" class="rope" />
		</div>
	<?php include('php/footer.php'); ?>
</body>
</html>