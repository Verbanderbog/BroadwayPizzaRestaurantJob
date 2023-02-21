<!DOCTYPE html>
<html>
<head>
<title>Broadway Pizza</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Broadway Pizza" /><script type="text/javascript">			function makeMenu(data) {				var nav = document.getElementById("menuNav");				var menu = document.getElementById("menu");				nav.textContent='';				menu.textContent='';				for(var i=0;i<data[0].menu_categories.length;i++) {					if (data[0].menu_categories[i].title.includes("opular")) {						continue;					}					const navList = document.createElement("li");					navList.setAttribute('class','hvr-bounce-to-bottom');					const navLink = document.createElement("a");					navLink.href = "#menu"+i;					const navText = document.createTextNode(data[0].menu_categories[i].title);					navLink.appendChild(navText);					navList.appendChild(navLink);					nav.appendChild(navList);									}			}									/*			var request = new XMLHttpRequest()			// Open a new connection, using the GET request on the URL endpoint			request.open('GET', 'https://cors-anywhere.herokuapp.com/https://api.doordash.com/v2/restaurant/308866/menu/', true);			//request.open('GET', 'https://api.doordash.com/v2/restaurant/308866/menu/', true);													request.onload = function() {				console.log('start');								if (request.status >= 200 && request.status < 400) {					makeMenu(document.getElementById("menuNav"), document.getElementById("menu"), JSON.parse(this.response));									} else {					console.log('error');				}			}			// Send request			request.send()			*/</script><?php/*// create & initialize a curl session$curl = curl_init();curl_setopt_array($curl, array(    CURLOPT_URL => "https://api.doordash.com/v2/restaurant/308866/menu/",    CURLOPT_PORT => "8080", //MY CORRECTION TO YOUR CODE	CURLOPT_PROXY => 'https://cors-anywhere.herokuapp.com/',    CURLOPT_RETURNTRANSFER => true,	CURLOPT_CONNECTTIMEOUT => 600,	CURLOPT_TIMEOUT => 400,    CURLOPT_ENCODING => "",    CURLOPT_MAXREDIRS => 10,    CURLOPT_SSL_VERIFYPEER => false,    CURLOPT_SSL_VERIFYHOST => false,    CURLOPT_HTTPHEADER => array(        "content-type: application/xml"    ),));// curl_exec() executes the started curl session// $output contains the output string$output = curl_exec($curl);$err = curl_error($curl);// close curl resource to free up system resources// (deletes the variable made by curl_init)curl_close($curl);if ($output){	file_put_contents('menu.json', $output);} else {	file_put_contents('menu.json', $err);}*///file_put_contents('menu.json', file_get_contents('https://cors-anywhere.herokuapp.com/https://api.doordash.com/v2/restaurant/308866/menu/'));?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div style="margin-top: -20px">
					    <a class="navbar-brand" href="tel:301-299-3553"><span style="font-family: wcmanonegrabta; font-size: 16pt; line-height: 5px">301-299-3553<br>Cabin John Center<br>Potomac, MD</span></a>
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom"><a href="index.html">Home</a></li>
							<li class="hvr-bounce-to-bottom active"><a href="menu.html">Menu</a></li>
							<li class="hvr-bounce-to-bottom"><a href="catering.html">Catering</a></li>
							<li class="hvr-bounce-to-bottom"><a href="about.html">About</a></li>
							<li class="hvr-bounce-to-bottom"><a href="contact.html">Contact</a></li>
						</ul>
					</div><!-- /navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header --><div class="menuche" >	<div class="container" style="background-color:#292822; padding: 10px">		<ul class="nav navbar-nav" id="menuNav">		</ul>		<div id="menu">				</div>		</div></div><!--
<!-- menu 

	<div class="menuche" >
		<div class="container" style="background-color:#292822; padding: 10px">
						<ul class="nav navbar-nav" style="align:right">
							<li class="hvr-bounce-to-bottom"><a href="#apps">Apps</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#salads">Salads</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#subs">Subs</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#sandwiches">Sandwiches</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#wraps">Wraps</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#pizza">Pizza</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#dogs">Dogs & Burgers</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#kids">Kids</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#pasta">Pasta</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#calzones">Calzones</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#lunch">Lunch Specials</a></li>
						</ul>
<!--  apps  
		<a name="apps"></a>
		<div style="padding-top: 100px" >
			<div class="menu1" >
					<div class="menu-left piz">
					<div style="padding-bottom: 25px">
					<img src="images/app.jpg" alt="" class="img-responsive" />
					</div>
					</div>
				<div class="menu-right" >
					<h3>Appetizers</h3>
					<ul class="list ins1">
						<li>Garlic Rolls<br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Fresh pizza dough rolled with<br>garlic, Parmesan cheese, and spices.<br>Served with marinara sauce.</div>  <span align="right">$4.99</span></li>
						<li>Chicken Tenders <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Served with honey mustard<br>dipping sauce.</div> <span align="right">$8.49</span></li>
						<li>Breadsticks <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Served with marinara<br>dipping sauce.</div>  <span align="right">$5.49</span></li>
						<li>Potato Salad<span align="right">$3.99</span></li>
						<li>Onion Rings <span align="right">$4.99</span></li>
						<li>Broadway Fries <span align="right">$3.29</span></li>
						<li>Cheese Fries <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Seasoned fries with cheddar cheese<br>Served with ranch dressing.</div>  <span align="right">$4.99</span></li>
						<li>Mozzarela Sticks <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Served with marinara<br>dipping sauce.</div><span align="right">$7.29</span></li>
						<li>Buffalo Wings <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Hot or Mild</div> <span style="text-align: right"><span style="font-size:12px">6 for</span>  &nbsp;&nbsp;&nbsp;&nbsp; $7.29</span><span align="right"><br><span style="font-size:12px">12 for</span> &nbsp;&nbsp;&nbsp;&nbsp; $14.29</span></li>
						<li>Garlic Bread <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">&nbsp;</div> <span style="text-align: right"><span style="font-size:12px">w/ Cheese</span>  &nbsp;&nbsp;&nbsp;&nbsp; $6.49</span><span align="right"><br><span style="font-size:12px">w/o Cheese</span> &nbsp;&nbsp;&nbsp;&nbsp; $5.29<br></span></li>
						<li>Creamy Coleslaw<span align="right">$3.99</span></li>
						<li>3 Meatballs & Marinara Sauce <span align="right">$5.39</span></li>
					</ul>
				</div>
				<div class="menu-left piz">
				<ul class="list ins1">
						<li><br>Chili <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px"><br></div><span style="text-align: right"><br>$5.49<br><span style="font-size: 12px">Add Cheddar Cheese</span> &nbsp;&nbsp;&nbsp;&nbsp; $0.99</span></li>
						<li>Soup of the Day <span align="right">$5.99</span></li>
						<li>Fresh Steamed Vegetables<span align="right">$3.99</span></li>

				</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!--  salads  
		<a name="salads"></a>
			<div class="menu1">
					<div class="menu-right">
					<div style="padding-bottom: 25px">
					<img src="images/salad.jpg" alt="" class="img-responsive" />
					</div>
					</div>
			<div style="margin-top: 50px">
				<div class="menu-left piz">
					<h3>Salads</h3>
					<p>Add Tuna, Chilled Grilled Chicken or Chicken Salad $3.49</p>
					<ul class="list ins1">
						<li>Garden Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">&nbsp;</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $6.99<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $8.99</span></li>
						<li>Caesar Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">&nbsp;</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $6.99<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $8.99</span></li>
						<li>Chef Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Crisp lettuce mixture with<br> onions, green peppers, tomato,<br> cucumbers, sliced ham and<br> turkey, provolone and American cheese.</div> <span style="text-align: right">$10.79</span></li>
						<li>Caprese Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Fresh sliced mozzarella<br> tomatoes and basil with a <br> touch of sea salt and<br> olive oil.</div> <span style="text-align: right">$10.79</span></li>
						<li>Carolina Summer <br> Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Garden salad with<br> fried chicken tenders,<br> toasted walnuts and<br> mandarin oranges.</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $8.29<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $10.79</span></li>
						<li>Greek Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">&nbsp;</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  $8.19<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $10.49</span></li>
						<li>Gyro Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 0px">Seasoned lamb or<br> chicken on a bed of<br> lettuce with pita bread,<br> onions, tomatoes, feta<br> cheese and tzatziki sauce.</div> <span style="text-align: right">$10.79</span></li>
					</ul>
				</div>

				<div class="menu-right">
				<p>Served with choice of dressing:<br>  1000 Island, Bleu Cheese, Ranch, Italian, Honey Mustard, Greek, Caesar, Balsamic Vinaigrette, and Low Fat Italian &bull; <span style="color:#e54134">Extra Dressing 50&cent;</span></p>
				</div>

				<div class="clearfix"> </div>
			</div>
			</div>
<!--  subs  
		<a name="subs"></a>
			<div class="menu1">
					<div class="menu-right">
					<div style="padding-bottom: 25px">
					<img src="images/sub.jpg" alt="" class="img-responsive" />
					</div>
					</div>
			<div style="margin-top: 50px; margin-bottom:50px">
				<div class="menu-left piz">
					<h3>Subs</h3>
					<p>Add Fries, Onion Rings, Cole Slaw, Potato Salad or Steamed Vegetables For $2.79</p>
					<ul class="list ins1">
						<li>Steak & Cheese <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">&nbsp;</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $9.99</span></li>
						<li>Italian Cold Cut <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Hot or Cold</div> <span style="text-align: right"><span style="font-size: 12px">Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp;$8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $9.99</span></li>
						<li>Chicken Parmigiana <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">&nbsp;</div> <span style="text-align: right">$9.99</span></li>
						<li>Turkey & Cheese <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Hot or Cold</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $9.99</span></li>
						<li>Italian Sausage <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Hot italian sausage<br> grilled with onions and<br> green peppers. Toasted<br> with cheese and<br>  marinara sauce.</div> <span style="text-align: right">$9.79</span></li>
						<li>Grilled Chicken <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Hot or Cold</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $9.99</span></li>
						<li>Buffalo Chicken <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Mixed with buffalo<br>sauce and served <br>with bleu cheese.</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $9.99</span></li>
						<li>Philly Chicken & Cheese <br><div style="font-size: 12px; font-style: italic; padding-bottom: 0px">&nbsp;</div> <span style="text-align: right">$9.99</span></li>
						<li>Roast Beef & Cheese <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Thin sliced medium rare beef.<br>Served hot or cold with<br>Provolone cheese.</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $9.99</span></li>
						<li>Chicken Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Diced chicken mixed<br> with mayonnaise, celery,<br> chopped walnuts, salt<br> and pepper.</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $9.99</span></li>
					</ul>
				</div>

				<div class="menu-right">
					<ul class="list ins1">
						<li>Tuna <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Hot or Cold</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp;$8.49<span style="font-size: 12px"><br>Large</span> &nbsp;&nbsp;&nbsp;&nbsp;$9.99</span></li>
						<li>Ham & Cheese <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Hot or Cold</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $7.79<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp;$8.99</span></li>
						<li>Veggie <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">Hot or Cold</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $7.79<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp;$8.99</span></li>
						<li>Meatball & Cheese <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">&nbsp;</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp; $7.79<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp;$8.99</span></li>
						<li>Eggplant Parmigiana <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">&nbsp;</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp;$8.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp;$9.99</span></li>
						<li>Cheeseburger Sub <br><div style="font-size: 12px; font-style: italic; padding-bottom: 10px">&nbsp;</div> <span style="text-align: right"><span style="font-size: 12px">Small</span>  &nbsp;&nbsp;&nbsp;&nbsp;$8.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp;$9.99</span></li>

					<p>All subs come with choice of lettuce, tomato, onion, mayonnaise, hot or sweet peppers.<br>&bull; <span style="color:#e54134"> Extra Meat $3.00</span> &bull; <span style="color:#e54134"> Extra Cheese $1.00;</span> &bull; <span style="color:#e54134"> Add Green Peppers or Mushrooms 50&cent;</span> &bull; <span style="color:#e54134"> Add Bacon $1.79</span> </p>
				</div>
				<div class="clearfix"> </div>

			</div>
			</div>
<!--  sandwiches 
		<a name="sandwiches"></a>
			<div class="menu1">
			<div style="margin-bottom: 50px">
					<div class="menu-left piz">
					<img src="images/sandwich.jpg" alt="" class="img-responsive" />
					</div>
				<div class="menu-right">
					<h3>Sandwiches</h3>
					<p>Your choice of white, marble rye, wheat bread, brioche or hamburger roll.  Add fries, onion rings, cole slaw, potato salad or
steamed vegetables for $2.79</p>
					<ul class="list ins1">
						<li>BLT <span>$7.49 </span></li>
						<li>Grilled Cheese <span>$7.49 </span></li>
						<li>Ham & Cheese <span>$7.49</span></li>
						<li>Turkey & Cheese <span>$7.49</span></li>
						<li>Chicken Salad <span>$7.49</span></li>
						<li>Veggie <span>$7.49</span></li>
						<li>Grilled Chicken <span>$7.49</span></li>
						<li>Tuna <span>$7.49</span></li>
						<li>Turkey Club <span>$7.49</span></li>
						<li>Roast Beef & Cheese <span>$7.49</span></li>
					</ul>
						<p>All sandwiches come with choice of lettuce, tomato, onion, mayonnaise, hot or sweet peppers.<br>&bull; <span style="color:#e54134"> Extra Meat $3.00</span> &bull; <span style="color:#e54134"> Extra Cheese $1.00;</span> &bull; <span style="color:#e54134"> Add Green Peppers or Mushrooms 50&cent;</span> &bull; <span style="color:#e54134"> Add Bacon $1.79</span> </p>
				</div>
				<div class="clearfix"> </div>
				</div>
			</div>
<!--  wraps  
		<a name="wraps"></a>
			<div class="menu1">
			<div style="margin-bottom: 50px">
					<div class="menu-right">
					<img src="images/wrap.jpg" alt="" class="img-responsive" />
					</div>
			<div style="margin-top: 50px">
				<div class="menu-left piz">
					<h3>Wraps</h3>
					<p>Add fries, onion rings, cole slaw, potato salad or steamed vegetables for $2.79</p>
					<ul class="list ins1">
						<li>Lamb or Chicken Gyro <span>$9.99 </span></li>
						<li>Chicken Caesar <span>$9.99</span></li>
						<li>Tuna or Chicken Salad <span>$9.99</span></li>
						<li>Steak, Cheese & Mushroom <span>$9.99</span></li>
						<li>Ham, Turkey & Cheese <span>$9.99</span></li>
						<li>Hamburger & American <span>$9.99</span></li>
						<li>Buffalo Chicken <span>$9.99</span></li>
						<li>Roast Beef & Cheese <span>$9.99</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
<!--  pizzas  
		<a name="pizza"></a>
			<div class="menu1">
			<div style="margin-top: 50px">
					<div class="menu-left piz">
					<img src="images/pizza.jpg" alt="" class="img-responsive" />
					</div>
				<div class="menu-right">
					<h3>Pizzas</h3>
					<ul class="list ins1">
						<li>Small 9" Gluten Free [6 Slices] <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px; color:#e54134">Each Topping $1.49</div><span align="right">$10.49</span></li>
						<li>Small 10" [6 Slices] <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px; color:#e54134">Each Topping $1.49</div><span align="right">$9.49</span></li>
						<li>Medium 12" [8 Slices] <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px; color:#e54134">Each Topping $1.99</div> <span style="text-align: right">$12.49</span></li>
						<li>Large 16" [12 Slices] <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px; color:#e54134">Each Topping $2.49</div> <span style="text-align: right">$15.49<br></span></li>
						<li>By The Slice <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px; color:#e54134">Each Topping 79&cent;</div><span align="right">$2.99<br></span></li>
					</ul>
				<p style="color:#e54134"><span style="color: #000">Choice of Toppings Includes:</span> <br> Lamb Gyro Meat<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Extra Cheese<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Pepperoni<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Italian Sausage<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Hamburger<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Bacon<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Ham<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Meatball<br><span style="color: #000000">&nbsp;&bull;&nbsp;</span>Chicken<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Green Pepper<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Onions<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Mushrooms<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Broccoli<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Sliced Tomato<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Spinach<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Red Onion<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Yellow Squash<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Zucchini<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Eggplant<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Banana Pepper<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Sundried Tomato<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Black Olive<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Pineapple<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Anchovy<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Artichoke<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Sweet Peppers<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Garlic<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Feta Cheese<span style="color: #000000">&nbsp;&bull;&nbsp;</span>Jalapeno</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
<!--  specialty  
			<div class="menu1">
					<div class="menu-right">
					<img src="images/img1.jpg" alt="" class="img-responsive" />
					</div>
			<div style="margin-top: 50px; margin-bottom: 50px">
				<div class="menu-left piz">
					<h3>Specialty Pizzas</h3>
					<p>Sorry, no substitutions.</p>
					<ul class="list ins1">
						<li>Four Star Act <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Pizza divided into four sections. <br> You choose the type of pizza<br>to make each quarter. <br>[Limit 3 toppings per quarter]</div> <span style="text-align: right">$25.99</span></li>
						<li><br>Meats Me In St. Louis <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Pepperoni, sausage, ham<br> and hamburger.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $13.99<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $18.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $22.99</span></li>
						<li><br>Shear Madness <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Pepperoni, italian sausage, ham,<br> meatballs, green peppers,<br> mushrooms, onions and extra<br> cheese.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $15.99<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $21.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $25.99</span></li>
						<li><br>South Pacific <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Pineapple, ham and<br> sliced tomatoes.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $20.49</span></li>
						<li><br>Miss All Gone <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Mushrooms, pepperoni and<br> sausage.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $20.49</span></li>
						<li><br>Thoroughly Healthy<br> Millie <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Fresh broccoli, sliced <br>tomato, spinach and<br> red onions.<br> [No Cheese Pizza]</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $18.99</span></li>
						<li><br>Evita Margherita <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Fresh mozzarella with olive<br> oil, garlic, tomato<br> and basil.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $21.99</span></li>
						<li><br>BBQ Pizza <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Chicken, onions and pineapple<br> with tangy BBQ sauce.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $20.49</span></li>
					</ul>
				</div>
				<div class="menu-right">
					<ul class="list ins1">
						<li><br>The Great White Way <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">White pizza baked with<br> olive oil, garlic and<br> oregano topped with<br> ricotta, mozzarella and<br> parmesan cheese.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $18.99</span></li>
						<li><br>Phantom of the Olive <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Black olives, sundried<br> tomatoes and onions.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $20.49</span></li>
						<li><br>Annie Get Your MOP <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Mushrooms, onions and<br> green peppers.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $20.49</span></li>
						<li><br>Ain't Misbehavin' <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Zucchini, yellow squash,<br> mushrooms, onions and<br> broccoli.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $15.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $20.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $25.99</span></li>
						<li><br>Athens Greek White<br> Pizza <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Garlic and olive oil<br> with black olives, onions,<br> feta and mozzarella<br> cheese.</div> <span style="text-align: right"><span style="font-size: 12px"><br>Small&nbsp;</span>  &nbsp;&nbsp;&nbsp;&nbsp; $12.49<br><span style="font-size: 12px">Medium</span> &nbsp;&nbsp;&nbsp; $16.49<br><span style="font-size: 12px">Large</span> &nbsp;&nbsp;&nbsp;&nbsp; $20.49</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
<!--  dogs  
		<a name="dogs"></a>
			<div class="menu1">

				<div class="menu-left piz">
				<img src="images/burger.jpg" alt="" class="img-responsive" />
				</div>

				<div class="menu-right">
					<h3>Hot Dogs & Burgers</h3>
					<p>Add fries, onion rings, cole slaw, potato salad or steamed vegetables for $2.79</p>
					<ul class="list ins1">
						<li>Hot Dog <span align="right">$3.79</span></li>
						<li>Chili & Cheese Dog <span style="text-align: right">$4.49</span></li>
						<li>Sauerkraut Dog <span style="text-align: right">$4.49<br></span></li>
						<li>Traditional Hamburger <span align="right">$8.99</span></li>
						<li>Classic Cheeseburger <span style="text-align: right">$9.39</span></li>
						<li>Pizza Burger <span style="text-align: right">$9.79<br></span></li>
						<li>Bacon Cheeseburger <span style="text-align: right">$9.79<br></span></li>
						<li>Chili Burger <span style="text-align: right">$9.79<br></span></li>
					</ul>
					<h3>All New Burgers</h3>
					<ul class="list ins1">
						<li>Jr Burger <span style="text-align: right">$4.99<br></span></li>
						<li>Jr Cheeseburger <span style="text-align: right">$5.49<br></span></li>
						<li>Double Jr Burger <span style="text-align: right">$7.99<br></span></li>
						<li>Double Jr Cheeseburger <span style="text-align: right">$8.49<br></span></li>
						<li>Deluxe Burger <span style="text-align: right">$8.99<br></span></li>
						<li>Deluxe Cheeseburger <span style="text-align: right">$9.39<br></span></li>
					</ul>
				<p style="color:#e54134"></p>
				</div>
				<div class="menu-left piz">
				<div style="margin-bottom: 75px; margin-top: 25px">
					<p>All burgers come with choice of lettuce, tomato, onion, mayonnaise, pickles, ketchup and mustard.<br><span style="color:#e54134">Add Bacon to any burger for $1.79</span></p>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
<!--  pasta & kids 
		<a name="kids"></a>
			<div class="menu1">
					<div class="menu-right">
						<h3>Kids Menu</h3>
					<ul class="list ins1">
						<li>Chicken Fingers & Fries <span>$6.79 </span></li>
						<li>Grilled Cheese & Fries <span>$6.79</span></li>
						<li>Slice of Pizza & Breadsticks <span>$6.79</span></li>
						<li>Hot Dog & Fries <span>$6.79</span></li>
						<li>Hamburger & Fries <span>$6.79</span></li>
						<li>Spaghetti & Meatballs <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Choice of butter<br>or marinara sauce.</div><span>$6.79</span></li>
					</ul>
					</div>
			<div style="margin-top: 50px; margin-bottom: 50px">
		<a name="pasta"></a>
				<div class="menu-left piz">
					<h3>Pasta Dinners</h3>
					<p>Add small house or caesar salad for $3.49.<br>  All pasta dinners come with a side of garlic bread</p>
					<ul class="list ins1">
						<li>Eggplant Parmigiana <span>$13.29 </span></li>
						<li>Baked Ziti <span>$13.29</span></li>
						<li>Fettuccine Alfredo <span>$12.79</span></li>
						<li>Spaghetti & Marinara <span>$12.79</span></li>
						<li>Chicken Parmigiana <span>$14.29</span></li>
						<li>Pasta Primavera <span>$13.29</span></li>
						<li>Beef Lasagna <span>$14.29</span></li>
					</ul>
					<p style="color:#e54134"> Add meatballs or chicken for $3.49</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
<!--  calzones  
		<a name="calzones"></a>
			<div class="menu1">
					<div class="menu-left piz">
					<img src="images/calzone.jpg" alt="" class="img-responsive" />
					</div>
				<div class="menu-right">
					<h3>Calzones</h3>
					<p>All calzones come with marinara dipping sauce.</p>
					<ul class="list ins1">
						<li>Meat Calzone <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Onions, green peppers, <br> mushrooms, pepperoni, and <br> sausage.</div><span align="right">$11.29</span></li>
						<li>Veggie Calzone <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Onions, green peppers, <br>and mushrooms.</div><span style="text-align: right">$10.79</span></li>
						<li>Italian Calzone <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Ham, pepperoni, capicolla,<br> genoa and mozzarella<br> cheese</div><span align="right">$11.29<br></span></li>
						<li>Cheese Calzone <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Ricotta and mozzarella<br>cheese.</div><span align="right">$10.59</span></li>
						<li>Veggie Alfredo Calzone <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Broccoli, yellow squash, and<br> mushrooms with mozzarela<br> cheese and alfredo sauce.</div><span style="text-align: right">$11.29</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>


<!--  lunch  
		<a name="lunch"></a>
			<div class="menu1">
					<div class="menu-right">
					<img src="images/lunch.jpg" alt="" class="img-responsive" />
					</div>
				<div style="margin-top: 50px">
				<div class="menu-left piz">
					<h3>Lunch Menu</h3>
					<ul class="list ins1">
						<li>Soup & Small Sub <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Ham & cheese, tuna<br> or chicken salad.</div><span align="right">$9.99</span></li>
						<li>Spaghetti & Meatballs <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Spaghetti with <br>2 meatballs and <br>marinara sauce.</div><span style="text-align: right">$8.99</span></li>
						<li>Chicken Filet Sandwich <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">With fries, onion rings<br> coleslaw or steamed<br>vegetables.</div><span align="right">$10.29<br></span></li>
						<li>Chicken Tenders & Fries <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">A small portion of<br> our chicken tenders<br> served with Broadway fries.</div><span align="right">$9.99</span></li>
						<li>2 Slices of Pizza & <br> Side Salad <br><div style="font-size: 12px; font-style: italic; padding-bottom: 5px">Cheese or 1 topping. <br>Garden or caesar.</div><span align="right">$7.99<br></span></li>
					</ul>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- //menu -->
<!--- footer --->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
				<div style="text-align: center">
				<img src="images/footer_logo2.png" class="footer_logo" alt="" title="" align="center">
				<p style="font-size: 18px">Free Delivery - Limited Area <br /> $15 Minimum</p>
				</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-address">
					<ul>
					<li><a href="index.html" alt="">Home</a></li>
					<li><a href="menu.html" alt="">Menu</a></li>
					<li><a href="catering.html" alt="">Catering</a></li>
					<li><a href="about.html" alt="">About</a></li>
					<li><a href="contact.html" alt="">Contact</a></li>
					</ul>
					</div>
				</div>


				<div class="col-md-3 footer-grid">
				<p style="text-align: center"><a target="_blank" href="https://www.facebook.com/BroadwayPizzaMD"><img src="images/facebook-icon.png" class="footer_logo" alt="" title=""></a></p>
				<br>
				<p style="text-align: center"><img src="images/credit-cards.png" class="footer_logo" alt="" title=""></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="clear"> </div>
	<div class="copy-right">
		<p>- Broadway Pizza 2016 -</p>
	</div>
<!--- //footer --->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
	<a href="#0" class="cd-top">Top</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main2.js"></script> <!-- Gem jQuery -->
</body>
</html>
