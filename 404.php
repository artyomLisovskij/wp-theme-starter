<!DOCTYPE html>
<html>
	<head>
		<title>Page not found</title>
		<style type="text/css">
			$srcsans: "Source Sans Pro", sans-serif;
			$lightgrey: #b5b5b5;
			$medgrey: #808080;
			$break-smallheight: 600px;
			$break-medheight: 900px;
			.container {
			  width: 100%;
			  height: 100%;
			  height: 100vh;
			  overflow: hidden !important;
			}
			h1 {
			  font-family: $srcsans;
			  font-weight: bold;
			  font-size: 90px;

			  letter-spacing: 20px;

			  text-transform: uppercase;
			  text-align: center;
			  color: $lightgrey;
			  margin: 0px;
			  padding: 0px;
			}
			h2 {
			  font-family: $srcsans;
			  font-size: 30px;
			  font-weight: 600;
			  letter-spacing: 20px;
			  text-transform: uppercase;
			  text-align: center;
			  color: $lightgrey;
			  line-height: 50px;
			  padding: 0px;
			  margin: 0px;

			  a {
			    color: $lightgrey;
			    text-decoration: none;
			    border-bottom: 5px solid $lightgrey;
			    margin: 0;
			    padding: 0;
			    span {
			      letter-spacing: 0px !important;
			      padding-right: 3px;
			    }
			    &:hover {
			      color: $medgrey;
			      border-bottom: 5px solid $medgrey;
			    }
			  }
			}
			#scene ul {
			  width: 100% !important;
			  height: 100% !important;
			  height: 100vh !important;
			  overflow: hidden;
			  position: relative;
			}
			.text {
			  position: relative;
			  top: 50%;
			  -webkit-transform: translateY(-50%) !important;
			  -ms-transform: translateY(-50%) !important;
			  transform: translateY(-50%) !important;
			  z-index: 3;
			  display: block;
			}
			.toppattern {
			  margin-top: -700px;
			  left: -100px !important;
			  position: absolute;
			  z-index: 2;
			  @media screen and (max-height: $break-smallheight) {
			    margin-top: -900px;
			  }
			  @media screen and (max-height: $break-medheight) {
			    margin-top: -850px;
			  }
			}
			.bottompattern {
			  margin-top: 350px;
			  left: 900px !important;
			  position: absolute;
			  z-index: 1;

			  @media screen and (max-height: $break-smallheight) {
			    margin-top: -100px;
			  }
			  @media screen and (max-height: $break-medheight) {
			    margin-top: 30px;
			  }
			}
			.sidepattern {
			  top: 350px !important;
			  left: -250px !important;
			  position: absolute;
			  z-index: 1;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="text">
				<h1>Page not found [404] </h1>
				<h2>Go<a href="/" >hom<span>e</span></a></h2>
			</div>
			<ul id="scene" >
				<li class="layer sidepattern" data-depth="0.40"><img src="http://arielbeninca.com/404assets/img/sidepattern.jpg" alt=""></li>
				<li class="layer toppattern" data-depth="0.20"><img src="http://arielbeninca.com/404assets/img/toppattern.jpg" alt=""></li>
				<li class="layer bottompattern" data-depth="0.70"><img src="http://arielbeninca.com/404assets/img/bottompattern.jpg" alt=""></li>
			</ul>
		</div>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://rawgithub.com/wagerfield/parallax/master/deploy/jquery.parallax.js"></script>
		<script>
			$(document).ready(function(){
				$('#scene').parallax();
			});
		</script>
	</body>
</html>
