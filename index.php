<?php session_start(); ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0" />
	<title>Hadley Fellows</title>
</head>
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
<!-- favicon -->
<!-- stylesheets -->
<!-- <link href="css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" /> -->
<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
<!--
	<link rel="stylesheet" href="css/bootstrap.min.css">
-->
<style>


	html,body
	{
		width: 100%;
	    height: 100%;
	    margin: 0px;
	    padding: 0px;
	    /*overflow-x: hidden;*/
	    /*overflow:scroll;*/
		/*-webkit-overflow-scrolling:touch;*/
	    font-family: 'Lato', sans-serif;
	}
		h1
		{
			margin: 20px 0;
			padding: 10px;
			font-size: 102px;
			color: #22231F;
			background: linear-gradient(120deg, #22231F, #161614);
			box-shadow: 0px 5px 8px 1px #161614;
			border: 1px solid #161614;
		}

		h1.main
		{
			font-size: 50px;
	    	/*font-family: 'Satisfy', cursive;*/
			text-align: center;
			width: auto;
			padding: 100px 20px 20px 20px;
			margin: 0 auto;
			color: #000;
			background: #FFF;
			box-shadow: none;
			border: none;
			text-shadow: 2px 5px 5px rgba(0,0,0,0.2);
			display: block;
		}
		h1.author
		{
			text-align: right;
			margin-right: 40px; 
		}
		li.main 
		{
			font-size: 40px;
			text-align: center;
			width: auto;
			padding: 40px;
			margin: 40px 20px;
			/* margin: 0 auto; */
			box-shadow: none;
			border: none;
			list-style: none;
			display: inline-block;
			text-shadow: 0px 1px 1px #4d4d4d;
			background: #161614;
			color: #fff;
			text-shadow: 0px 2px 1px #3A3C35;
			box-shadow: 0px 2px 1px #3a3c35;
		}
		li.main.first
		{
			margin: 40px 20px 40px 40px;
			background: #18A4E7;
		}
		h2
		{
			margin: 0px 30px 0px;
			padding: 40px;
			font-size: 40px;
			text-shadow: 6px 6px 0px rgba(0,0,0,0.2);
		}
		ul
		{
			padding: 0;
			margin: 0;
			/*background: #70E820;*/
			width: 300px;
		}
		option
		{
			color: #272822;
		}
		p
		{
			font-size: 60px;
			text-align: left;
		}
		#popper
		{
			position: fixed;
			width: 100%;
			height: 100%;
			margin: 0 auto;
			background: #000000;
			opacity: .7;
			z-index: 15;
			visibility: hidden;
			overflow: hidden;
		}
		#popper-frame
		{
		  position: fixed;
		  width:80%;
		  height:75%;
		  background-color:#FFF;
		  padding:10px;
		  z-index:16;
		  margin: 5% auto;
		  left: 0;
		  right: 0;
		  visibility: hidden;
		  overflow: hidden;
		}
		#popper-frame-inner
		{
		  position: relative;
		  width:100%;
		  height:75%;
		}
		#iframe-outer
		{
			/*background: #1AEE5F;*/
			width: 100%;
			height: 1100px;
			overflow: hidden;
		}
		#node-frame
		{
			/*width: 650px;*/
			margin: 20px 0 0 0;
			width: 100%;
			height: 1200px;
			border: none;
			overflow: hidden;
		}

		#node-frame #messages
		{
			background: #B7DAEC;


		}

	#outer-wrapper
	{
		position: relative;
		/*border: 1px solid #000;*/
		display: block;
		vertical-align: top;
		padding-top: 75px;
		box-shadow: 1px 1px 1px #181A15;
		background: #FFF;
		z-index: 1;
	}

	#panel-overlay
	{
		background: #0D0F0E;
		position: fixed;
		top: 0;
		left: -10px;
		height: 100%;
		overflow-y: scroll;
		overflow-x: hidden; 
		width: 0;
		padding: 0;
		z-index: 11;
		font-size: 80px;
	    -moz-box-shadow:    3px 3px 6px 3px #272822;
	    -webkit-box-shadow: 3px 3px 6px 3px #272822;
	    box-shadow:         3px 3px 6px 3px #272822;

	}
	#outer-panel-overlay
	{
		background: #0D0F0E;
		position: fixed;
		top: 0;
		left: 0;
		height: 100%; 
		width: 0;
		padding: 0;
		z-index: 10;
		opacity: .5;
		font-size: 80px;

	    -moz-box-shadow:    3px 3px 6px 3px #272822;
	    -webkit-box-shadow: 3px 3px 6px 3px #272822;
	    box-shadow:         3px 3px 6px 3px #272822;

	}
		#panel-overlay a
		{
			text-decoration: none;
			/*color: #EC8013;*/
			color: #FFF;

		}
		.window-close
		{
			display: block;
			text-align: right;
			padding: 20px;
			cursor: pointer;
		}
		.window-close a
		{
			/*color: #0D0F0E;*/
			color: #FFF;
		}

		#panel-overlay h2
		{
			font-size: 100px;
		    background: #0D0F0E;
			margin: 50px 20px 20px 20px;
			color: #18A4E7;

		}
		#panel-overlay ul
		{
			width: auto;
		}
		#panel-overlay li:first-child
		{
			border-top: 1px solid #000;
		}
		#panel-overlay li
		{
			padding: 20px;
			border: 1px solid #065890;
			box-shadow: inset 0px 0px 20px #065890;
			/* border-radius: 20px; */
			width: 100%;
			margin: 20px auto;
			font-size: 50px;
			background: linear-gradient(180deg, #378fc1, #065890);
			display: block;
			text-align: left;
		}


		header
		{
			height: auto;
			display: block;
			vertical-align: top;
			margin: 0;
			padding: 0px;
			/*background:url("images/full-stack.png");*/
			background-repeat:no-repeat;
			background-position: right;
			/*background-size:100% 100%;*/
			background-origin:border-box;
/*		    -moz-box-shadow:    inset 0 5px 30px #000000;
		    -webkit-box-shadow: inset 0 5px 30px #000000;
		    box-shadow:         inset 0 5px 30px #000000;*/

		}
			#contact
			{
				display: block;
				vertical-align: top;
				text-align: right;
				width: 100%;
				position: fixed;
				z-index: 9;
				min-width: 750px;
				/*margin: 0px 50px;*/
				color: #FFF;
				font-size: 19px;
				padding: 10px 0 10px 0;
				background: #22231F;
			}
				#contact p
				{
					display: inline-block;
					vertical-align: top;
					text-align: right;
					margin: 0 20px;
					padding: 20px 10px;
				}
				#contact img
				{
					/*position:absolute;
					clip:rect(0px,100px,50px,50px);
					/*rect(<top>, <right>, <bottom>, <left>)*/
					/*background-image: url("images/myglyphs.png");*/
					width: 50px;
					height: 50px;
					/*background-position: -50px 0px;*/

				}
				#contact a
				{
					list-style: none;
					text-decoration: none;
					color: white;
				}
		#js
		{
			background: #3A3C35;
			color: #FFF;
		}
			#js h1
			{
				padding: 40px;
				font-size: 64px;
				text-align: right;
				color: #18A4E7;
				margin: 80px 0 80px 0;
			}#js h1:first-child
			{
				margin: 0 0 80px 0;
			}
			#js h2
			{
				color: #EC8013;
				/*text-decoration: underline;*/
			}
			#ajax, #jquery, #jstring
			{
				margin-bottom: 80px;
			}
				.pblock
				{
					width: auto;
					margin: 0 auto;
					text-align: center;
				}
				.iblock
				{
					
					width: 90%;	
					margin: 0 auto;

				}
				.iblock-text
				{
					visibility: hidden;
					height: 0;

				}
/*				.pblock
				{
					display: block;
					vertical-align: top;
					margin: 0 50px;
					padding: 0 50px; 

				}
				.iblock
				{
					display: inline-block;
					vertical-align: top;
					margin: 10px;
					width: 650px;	

				}
				.iblock p 
				{
					font-size: 40px;
				}*/
				#google-dir
				{
					width: auto;
					margin: 0 auto;
					text-align: center;
				}
				#outer-map-panel
				{
					width: 90%;
					height: auto;
					margin: 0 auto;
					/*background: #FFF;*/
					padding: 20px 0;
					/*border-radius: 20px;*/

				}
					#map-canvas-cover
					{
						height: 450px;
						width: 100%;
						background: none;
						margin: 0 auto;
						position: absolute;
						z-index: 2;
						/*opacity: 0;*/
						padding: 10px 0;
					}

			        #map-panel {
						width: 100%;
						height: auto;
						/*padding: 20px 0;*/
						/*border-radius: 20px;*/
				        /*background-color: #fff;*/
						margin: 10px auto;
						display: inline-block;
						vertical-align: top;
			        }
			        	#directionsPanel
			        	{
			        		/*visibility: hidden;*/
			        		background: #fff;
							color: #000;
							padding: 0 40px;
							margin: 0;
							
			        	}
			        	#map-panel select,#map-panel button
			        	{
							padding: 20px;
							border: 1px solid #065890;
							/*box-shadow: inset 0px 0px 20px #065890;*/
							box-shadow: 2px 2px 5px #000;
							/* border-radius: 20px; */
							width: 100%;
							margin: 20px auto;
							font-size: 50px;
							background: linear-gradient(180deg, #378fc1, #065890);
							display: block;
							text-align: center;
							color: #FFF;
			        	}
			        	#map-panel input
			        	{
							padding: 20px;
							/* border-radius: 20px; */
							width: 100%;
							margin: 20px auto;
							font-size: 50px;
							display: block;
							text-align: left;
							border: 1px solid #161614;
							box-shadow: inset 0px 0px 20px;
			        	}



			        #map-canvas 
			        {
			        	width: 90%;
			        	height: 450px;
			        	/*border-radius: 20px;*/
						margin: 10px auto;
						display: inline-block;
						vertical-align: top;

			        }


				#string-manip
				{
					display: block;
					width: auto;
					text-align: center;
					font-size: 64px;
					margin: 10px;
				}
				#js ul
				{
					width: 650px;
					margin: 0 auto;
					list-style: none;
					padding-bottom: 10px; 
				}
				#js li
				{
					display: inline-block;
					vertical-align: top;
					padding: 10px;
					font-size: 25px;
				}

					#js #jp_container_1
					{
						width: 650px;
						margin: 0 auto;
					}
				


						  #js #main {
						      width:90%;
						      text-align:   center;
						      height: 500px;
						      overflow: hidden;
						  }

						  #js #videoContainer
						  {
						  	width: 90%;
						  	margin: 20px auto;
						  } 

						  #js #scroll {
						      width:  90%;
						      height: auto;
						      display: block;
						      margin: 0 auto;
						      padding: 20px 0;
						      /*background: #cf0;*/
						      overflow:   hidden;

						    }

						    #js #scroll ul {
						      width:  100%;
						      height: 170px;
						      padding:0;
						      margin: 0;
						      display: inline-block;
						      overflow: hidden;
						    }

						    #js #scroll ul li {
						      width:200px;
						      text-align: center;
						      height: 280px;
						      list-style:   none;
						      display: inline-block;
						  }
						    #js #scroll ul li img {
						      width:200px;
						      height: auto;
						  }

						  #js video
						  {
						  	/*#controls { display: none; margin: 10px 30px; background: #31ED2C; }*/
						  }
						  #video-controls
						  {
						  	visibility: hidden;
						  }

				#rails-content, #ci-content, #drupal-content
				{
					width: 200px;
					height: 200px;
					background: #042546;
				}
		#footer
		{
			background: #22231F;
			width: 100%;

		}
			#footer h1
			{
				color: #FFF;
				background: none;
				box-shadow: none;
				border: none;
				width: 90%;
				margin: 0 auto;
			}

			#footer-header
			{
				background-image: url('images/contact-header.png');
				background-size:100% 100%;
				background-repeat:no-repeat;
				width: 100%;
				min-height: 100px;
				margin: 0 auto;
			}


			#contactform
			{

				min-height: 200px;
				width: 100%;
				margin: 0px auto;
				padding: 50px 0; 
			}
				#contactform input, #contactform textarea
				{
					padding: 20px;
					/* border-radius: 20px; */
					width: 90%;
					margin: 20px auto;
					font-size: 50px;
					display: block;
					text-align: left;
					border: 1px solid #161614;
					box-shadow: inset 0px 0px 20px;
				}
				#contactform #submit
				{
					padding: 20px;
					border: 1px solid #065890;
					/*box-shadow: inset 0px 0px 20px #065890;*/
					box-shadow: 2px 2px 5px #000;
					/* border-radius: 20px; */
					width: 90%;
					margin: 20px auto;
					font-size: 50px;
					background: linear-gradient(180deg, #378fc1, #065890);
					display: block;
					text-align: center;
					color: #FFF;

				}

			@media all and (min-width: 1001px) {
					
					body
					{
						background: #35362E;
					}
					
						h2
						{
							padding: 30px;
							font-size: 30px;
						}
						#outer-wrapper 
						{
							position: relative;
							/* border: 1px solid #000; */
							display: block;
							vertical-align: top;
							z-index: 1;
							box-shadow: 1px 1px 3px #161614;
							margin: 0 auto;
							width: 1000px;
						}
							#contact 
							{
								display: block;
								vertical-align: top;
								text-align: right;
								width: 100%;
								min-width: 750px;
								/* margin: 0px 50px; */
								color: #FFF;
								font-size: 19px;
								padding: 10px 0 10px 0;
								background: #22231F;
								position: fixed;
								z-index: 9;
							}
								#contact img 
								{
									width: 35px;
									height: 35px;
								}
								#contact p 
								{
									padding: 10px;
								}
							
							h1.main
							{
								font-size: 30px;
							}
							h1.author
							{
								font-size: 30px;
								padding: 30px 20px;
							}

							li.main 
							{
								margin: 0 10px;
								font-size: 40px;
								text-align: center;
								width: auto;
								padding: 20px;
							}

							li.main.first
							{
								margin: 0px 10px 0px 20px;
								background: #18A4E7;
							}
						#js h1
						{
							margin: 20px 0 0px 0;
							padding: 20px;
							font-size: 30px;
							width: 100%;
							position: relative;
							right: 20px;
						}
							#js h1:first-child 
							{
								margin: 20px 0 0px 0;
							}
								  .iblock
								  {
								  	/*background: #E4F512;*/
								  	height: auto;
								  	display: inline-block;
								  	width: 40%;
								  	margin: 10px;
								  	vertical-align: top;
								  }
								  .iblock-text
								  {
								  	visibility: visible;
								  	height: auto;
								  	display: inline-block;
								  	width: 30%;
								  	margin: 0 10px;
								  }
								  .iblock-text p
								  {
								  	font-size: 20px;
								  }
								  .pblock
								  {
								  	/*background: #D029DE;*/
								  	display: block;
								  	vertical-align: top;
								  }

								  #iframe-outer
								  {
									height: 700px;
									overflow: hidden;
								  }
								  #node-frame
								  { 	
									width: 100%;
									height: 2000px;
									border: none;
									/* overflow: hidden; */
									position: relative;
									top: -1200px;
								  }

								  #goo-outer
								  {
								  	display: block;
									width: auto;
									margin: 0 auto;
									text-align: center;
									vertical-align: top;
								  }
								  	#google-dir
								  	{
								  		width: 60%;
								  		display: inline-block;
										vertical-align: top;
								  	}
								  	#map-canvas-cover
								  	{
								  		width: 40%;
								  	}
								  	#map-canvas
								  	{
								  		margin: 0 auto;
								  	}
								  	#outer-map-panel 
								  	{
										width: 90%;
										height: auto;
										margin: 0 auto;
										/* background: #FFF; */
										padding: 10px 0;
										/* border-radius: 20px; */
									}
								  	#map-panel input
								  	{
								  		padding: 10px;
										/* border-radius: 20px; */
										width: 100%;
										margin: 5px auto;
										font-size: 20px;
										display: block;
										text-align: left;
										border: 1px solid #161614;
										box-shadow: inset 0px 0px 10px;
								  	}
								  	#map-panel select, #map-panel button {
										padding: 10px;
										border: 1px solid #065890;
										box-shadow: 1px 1px 1px #000;
										width: 100%;
										margin: 5px auto;
										font-size: 20px;
										background: linear-gradient(180deg, #378fc1, #065890);
										display: block;
										text-align: center;
										color: #FFF;
									}

			  
				#v-outer
				{
					display: block;
					vertical-align: top;
					width: 90%;
					margin: 0 auto;

				}
				#js #videoContainer 
				{
					width: 60%;
					display: inline-block;
					vertical-align: top;
					margin: 20px;
				}

				#footer-header
				{
					/*background: #E72503;*/
					background-image: url('images/contact-header-big.png');
			  	}
						
						#footer h1
						{
							font-size: 60px;
						}
						#contactform 
						{
							min-height: 200px;
							width: 40%;
							margin: 0px;
							padding: 20px 0;
						}
						#contactform input, #contactform textarea 
						{
							padding: 10px;
							/* border-radius: 20px; */
			    			font-family: 'Lato', sans-serif;
							width: 100%;
							margin: 20px;
							font-size: 20px;
							display: block;
							text-align: left;
							border: 1px solid #161614;
							box-shadow: inset 0px 0px 20px;
						}

						#contactform #submit 
						{
							padding: 10px;
							display: block;
							border: 1px solid #065890;
							/*box-shadow: inset 0px 0px 20px #065890;*/
							box-shadow: 2px 2px 5px #000;
							/* border-radius: 20px; */
							width: 40%;
							margin: 20px;
							font-size: 20px;
							background: linear-gradient(180deg, #378fc1, #065890);
							display: block;
							/* text-align: right; */
							text-align: center;
							color: #FFF;
							position: relative;
							left: 60%;
						}

				/**/
			  

			  /**/
			}

			@media all and (max-width: 1000px) and (min-width: 700px) {
			  #footer-header
				{
					/*background: #EAE413;*/
					background-image: url('images/contact-header-med.png');
			  	}
			}

			@media all and (max-width: 699px) and (min-width: 520px) {
			  #footer-header
				{
					background-image: url('images/contact-header-sm.png');
			  	}
			}
			@media all and (max-width: 519px) and (min-width: 0px) {
			  #footer-header
				{
					background-image: url('images/contact-header-xsm.png');
			  	}
			}

</style>
<!-- stylesheets -->
<!-- jquery -->
 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>

				var directionsDisplay;
		        var directionsService = new google.maps.DirectionsService();
		        var map;
		        var haight = new google.maps.LatLng(37.7699298, -122.4469157);
		        var oceanBeach = new google.maps.LatLng(37.7683909618184, -122.51089453697205);

		        function initialize() {
		          directionsDisplay = new google.maps.DirectionsRenderer();
		          var mapOptions = {
		            zoom: 8,
		            center: haight
		          }
		          map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		          directionsDisplay.setMap(map);
		          
		          directionsDisplay.setPanel(document.getElementById('directionsPanel'));

		          google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
		            computeTotalDistance(directionsDisplay.getDirections());
		          });


		          directionsDisplay2 = new google.maps.DirectionsRenderer();
		          map2 = new google.maps.Map(document.getElementById('popper-frame-inner'), mapOptions);
		          directionsDisplay2.setMap(map2);
		          google.maps.event.addListener(directionsDisplay2, 'directions_changed', function() {
		            computeTotalDistance(directionsDisplay2.getDirections());
		          });

		          calcRoute();
		        }

		        function calcRoute() {
		          var from = document.getElementById('from').value;
		          var destination = document.getElementById('destination').value;
		          var selectedMode = document.getElementById('mode').value;
		          var request = 
		          {
		              origin: from,
		              destination: destination,
		              // Note that Javascript allows us to access the constant
		              // using square brackets and a string value as its
		              // "property."
		              travelMode: google.maps.TravelMode[selectedMode]
		          };

		          directionsService.route(request, function(response, status) {
		            if (status == google.maps.DirectionsStatus.OK) {
		              directionsDisplay.setDirections(response);
		              directionsDisplay2.setDirections(response);
		          	  //$("#directionsPanel").css({"visibility":"visible","overflow-y": "scroll","height": "450px"});
		            }
		          });
		        }

		        function computeTotalDistance(result) 
		        { 
		          var total = 0;
		          var myroute = result.routes[0];
		          for (var i = 0; i < myroute.legs.length; i++) {
		            total += myroute.legs[i].distance.value;
		          }
		          total = total / 1000.0;
		          document.getElementById('total').innerHTML = total + ' km';
		        }

		        google.maps.event.addDomListener(window, 'load', initialize);
				//google maps
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#outer-panel-overlay").hide();
				
				// left panel
				  var panel = false;
				  function sideBar ()
				  {
		          	if (panel == false)
		          	{
					  // $("#outer-wrapper").animate({left:'250px'});

					  $("#outer-panel-overlay").show().animate({width:'100%', visibility:'visible'});
					  $("#panel-overlay").show().animate({width:'80%', visibility:'visible'});
					  $("html, body").css({
							"overflow":"hidden"
					  });	
					  panel = true;
					}
					else
					{
					  // $("#outer-wrapper").animate({left:'0'});
					  $("#outer-panel-overlay").animate({width:'0', visibility:'hidden'},function(){
					  	$("#outer-panel-overlay").hide();
					  });
					  $("#panel-overlay").animate({width:'0', visibility:'hidden'},function(){
					  	$("#panel-overlay").hide();
					  });
					  $("html, body").css({
							"overflow":"visible"
					  });	
						panel = false;
					}
				  }

				  $('.window-close').click(function(){sideBar();});
		          $("#panel-folder").click(function(){sideBar();});
		          $("#outer-panel-overlay").click(function(){sideBar();});
				// left panel

				//google maps

				$('#map-canvas-cover').click(function(){
					$("#panel-overlay").fadeIn( "slow", function() {
					    // Animation complete
						$("#popper").css({
							"visibility":"visible"
						});
						$("#popper-frame").css({
							"visibility":"visible",
		  					'overflow-y': 'scroll'
						});
						
						$("html, body").css({
							"overflow":"hidden"
						});

					  });
				});
				$("#popper").click(function(){
						$("#popper").css({
							"visibility":"hidden"
						});					
						$("#popper-frame").css({
							"visibility":"hidden",
							"overflow" : 'hidden'
						});	
						$("html, body").css({
							"overflow":"visible"
						});				
				});




				// strings

				var counter = 0;
				setInterval(function(){
					var ii = document.getElementById('string-effects');
					if(counter == 1)
					{
						ii.getElementsByTagName("li")[4].style.color = "white";
						ii.getElementsByTagName("li")[0].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML = "*"+document.getElementById('string-manip').innerHTML+"*";		
					}
					else if(counter == 2)
					{
						ii.getElementsByTagName("li")[0].style.color = "white";
						ii.getElementsByTagName("li")[1].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.toUpperCase();
					}
					else if(counter == 3)
					{
						ii.getElementsByTagName("li")[1].style.color = "white";
						ii.getElementsByTagName("li")[2].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.split("").reverse().join("");
					}
					else if(counter == 4)
					{
						ii.getElementsByTagName("li")[2].style.color = "white";
						ii.getElementsByTagName("li")[3].style.color = "#EC8013";
						var arr = [];
						var stringSplit = document.getElementById('string-manip').innerHTML.split("");
						for (var i = 0; i <=  stringSplit.length; i++) {
							if(
								stringSplit[i] == "a" ||
								stringSplit[i] == "e" ||
								stringSplit[i] == "i" || 
								stringSplit[i] == "o" ||
								stringSplit[i] == "u" ||
								stringSplit[i] == "A" ||
								stringSplit[i] == "E" ||
								stringSplit[i] == "I" || 
								stringSplit[i] == "O" ||
								stringSplit[i] == "U"
							)
							{
							}
							else
							{
								arr.push(stringSplit[i])
							}
						};
						document.getElementById('string-manip').innerHTML = arr.join("");
					}
					else if(counter == 5)
					{
						ii.getElementsByTagName("li")[3].style.color = "white";
						ii.getElementsByTagName("li")[4].style.color = "#EC8013";
						document.getElementById('string-manip').innerHTML = "String Example";
						counter=0;
					}
					counter++;
				},3000);
				// var string = document.getElementById('string-manip');
				// console.log(string);
				function stringAdd() {
					document.getElementById('string-manip').innerHTML = "*"+document.getElementById('string-manip').innerHTML+"*";
					}
				function stringUpcase() {
					document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.toUpperCase();
					}
				function stringReverse() {
					document.getElementById('string-manip').innerHTML =document.getElementById('string-manip').innerHTML.split("").reverse().join("");
					}
				function stringRVowels() {
					var arr = [];
					var stringSplit = document.getElementById('string-manip').innerHTML.split("");
					for (var i = 0; i <=  stringSplit.length; i++) {
						if(
							stringSplit[i] == "a" ||
							stringSplit[i] == "e" ||
							stringSplit[i] == "i" || 
							stringSplit[i] == "o" ||
							stringSplit[i] == "u" ||
							stringSplit[i] == "A" ||
							stringSplit[i] == "E" ||
							stringSplit[i] == "I" || 
							stringSplit[i] == "O" ||
							stringSplit[i] == "U"
						)
						{
						}
						else
						{
							arr.push(stringSplit[i])
						}
					};
					document.getElementById('string-manip').innerHTML = arr.join("");
					}
				function stringReset() {
						document.getElementById('string-manip').innerHTML = "Holla at yo boyeeee";
					}

				// strings




		      // video setup

			      	  // video setup
			          var video = document.getElementById('video1');
			          video.volume = .3;

			          function vidLoad()
			          {
			            var video = document.getElementById('video1');
			            //video.muted = true;
			            video.volume = .3;
			            video.play();
			          }

			          function resetMedia()
			          {
			            var video = document.getElementById('video1');
			            video.load();
			            video.volume = .3;
			          }
			      	  // video setup

				      // slideshow array
				        var vidArr = [
				          {img:"a_sf_history.jpg", vid:"a_sf_history.mp4"},
				          {img:"b_kite.jpg", vid:"b_kite.mp4"},
				          {img:"c_kite.jpg", vid:"c_kite.mp4"},
				          {img:"d_soap.jpg", vid:"d_soap.mp4"},
				          {img:"f_luge.jpg", vid:"f_luge.mp4"},
				          {img:"g_tahoe.jpg", vid:"g_tahoe.mp4"},
				          {img:"h_skate.jpg", vid:"h_skate.mp4"},
				          {img:"i_drift.jpg", vid:"i_drift.mp4"},
				          {img:"j_wake.jpg", vid:"j_wake.mp4"},
				          {img:"k_sky.jpg", vid:"k_sky.mp4"}
				        ];
				      // slideshow array

				      // setup carousel

				        for (var i = 0; i < vidArr.length; i++) {
				          
				          $("#scroll ul").append("<li id='"+i+"' class='frame'><img src='images/video_imgs/"+vidArr[i]["img"]+"'/></li>");  
				          

				        };
				      // setup carousel

				      // scroll session //
				          function rotate()
				          {
				              $("#scroll ul").each(function(){

				                  $("#scroll ul").animate({marginLeft:-200},100,function(){
				                    // This code runs after the animation completes
				                    $(this).find("li:last").after($(this).find("li:first"));
				                    // Now we've taken out the left-most list item, reset the margin
				                    $(this).css({marginLeft:0});
				                  })
				              });
				          }

				          var timer = null;
				          function startSetInterval() {
				              timer = setInterval( rotate, 4000);
				          }
				          // start function on page load
				          startSetInterval();

				      // scroll session //

				      // click replace with image //

				          $('#scroll ul li').click( function() {
				            //console.log($(this).attr('id'));
				            var num = $(this).attr('id');
				            var imge = vidArr[num]["img"];
				            var vid = vidArr[num]["vid"];
				            //$('#main').html("<img src='images/video_imgs/"+imge+"'>");
				            $('#videoContainer').html("<video id='video1' width='100%' height='auto' controls poster='http://www.hadleyfellows.com/images/video_imgs/"+imge+"' onload='vidLoad()' onended='resetMedia()'><source src='videos/"+vid+"' type='video/mp4'></video>");
				            //console.log(this);
				            vidLoad();
				          });

				      // click replace with image //

				      // hover the scroll factor

				          $('#scroll').hover(function(){
				            clearInterval(timer);
				          }, function(){
				            startSetInterval();
				          });

		       // video setup



		});
	</script>
<!-- jquery -->

<!-- <body onload="startTime()"> -->
<body>
	<div id="outer-wrapper">
		<div id="js">


			<div id="jquery">
				<h1>JQuery</h1>
					<h2>Video Slideshow</h2>
					<script>
						$(document).ready(function(){

						      // hover the scroll factor
						}); // close document ready
					</script>
					  <div id="v-outer">
						    <div id="videoContainer">
						      <video id="video1" width="100%" height="auto" controls poster="images/video_imgs/a_sf_history.jpg" onload='vid_load()' onended="resetMedia()">
						        <source src="http://www.hadleyfellows.com/videos/a_sf_history.mp4" type="video/mp4">
						      </video>
						    </div>
							<div class="iblock-text">
								<p>This video slideshow requires JQuery and html5. The new features in html5 video makes loading and controlling video playback very easy. The JQuery makes the animation and video playlist code concise.</p>
							</div>
					  </div>
					  <div id="scroll">
					    <ul>
					    </ul>
					  </div>

			</div>
	</div>
</body>
</html>