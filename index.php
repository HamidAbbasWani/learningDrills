<?php
session_start();
include("functions\\navigationItems.php");
include("functions\\products.php");
include("functions\\footer.php");
include("functions\\authentication.php");
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>MedicalStore</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style\bs\css\bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="style\css\index.css"/>
		<script src="style\bootstrap\js\jquery.js"></script>
		<script src="style\bs\js\bootstrap.js"></script>
		<script src="ajax\products.js"></script>
		<script src="ajax\useraccess.js"></script>
		<script src="javascript\login.js"></script>
		<script src="javascript\uservalidation.js"></script>
		<script src="javascript\functioncall.js"></script>
	</head>
	<body>
		<main class="container-fluid">
			<!--Header section starts here -->
			<header id="header" class="row bg-success">
				<div class="col-md-3">
					<iframe class="header_slide" src="includes\index_support_file.php">
					</iframe>
				</div>
				<div id="search" class="col-md-6">
					<form autocomplete="on" action="includes/searcheditems.php" method="post" accept-charset="UTF-8">
						<input id="search_box" class="text-uppercase" type="search" name="search" placeholder="Search Product" required/>
						<input id="search_submit" class="btn btn-sm btn-block" type="submit" value="Search" name="search_submit"/>
					</form>
				</div>
				<div class="col-md-3">
					<iframe class="header_slide" src="includes\index_support_file.php">
					</iframe>
				</div>
			</header>
			<!--Navigation menu starts here -->
			<nav class="row">
				<div id="nav" class="navbar navbar-inverse text-uppercase">
					<div id="brand" class="navbar-header col-md-3">
						<a class="navbar-brand" href="">Medical Store <span class="glyphicon glyphicon-home"></span></a>
					</div>
					<ul id="left_tabs" class="nav navbar-nav col-md-6">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle item-left" data-toggle="dropdown">medicines<span class="caret"></span></a>
							<ul class="dropdown-menu left_tabs_dropdown">
								<li><a class="dropdown-header text-center" href="">By Condition</a></li>

								<li><a href=""><?php ByCondition();?></a></li>
							</ul>
						</li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle item-left" data-toggle="dropdown">personal care<span class="caret"></span></a>
							<ul  class="dropdown-menu left_tabs_dropdown">
								<li><a href=""><?php personalCare();?></a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle item-left" data-toggle="dropdown">family care<span class="caret"></span></a>
							<ul  class="dropdown-menu left_tabs_dropdown">
								<li><a href=""><?php familyCare();?></a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle item-left" data-toggle="dropdown">ayush<span class="caret"></span></a>
							<ul  class="dropdown-menu left_tabs_dropdown">
								<li><a href=""><?php ayush();?></a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle item-left" data-toggle="dropdown">fitness<span class="caret"></span></a>
							<ul  class="dropdown-menu left_tabs_dropdown">
								<li><a href=""><?php fitness();?></a></li>
							</ul>
						</li>
					</ul>
					<ul id="right_tabs" class="nav navbar-nav col-md-3">
						<li>
							<a class="item-right" href="#" onclick="callRegister();" ondblclick="hideRegister()" style="text-transform:capitalize;">
									<span id="change_register"><?php echo registerVisibility();?></span><span class="glyphicon glyphicon-user"></span>
							</a>
						</li>
						<li>
							<a  class="item-right" style="text-transform:capitalize;" href="#" onclick="signOut();showSignIn();" ondblclick="hideSignIn()">
								<span id="sign_change"><?php echo signInVisibility();?></span><span class="glyphicon glyphicon-sign-up"></span>
							</a>
						</li>
						<li><a class="item-right" href="#" style="text-transform:capitalize;">cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					</ul>
				</div>
			</nav>
			<!--Sign in section starts from here-->
			<article class="row container-fluid" id="signin_section">

			</article>
			<!--User registration section starts from here-->
			<article class="row container-fluid" id="register_section">

			</article>
			<!--Main image slider starts here -->
			<article class="row" id="first_article">
				<section class="col-md-12" id="main_slider">
					<iframe src="includes\index_support_file2.php">
					</iframe>
				</section>
			</article>
			<!--First item section starts here -->
			<article class="row container-fluid fourth-section">
					<section class="row container-fluid">
					<a onmouseover="this.style.color='white';" class="col-md-12 btn btn-block head-button" href="includes\category.php">Category</a>
					</section>
					<?php category();?>
					<div id="category">
					</div>
					<section class="row container-fluid">
					<button id="change_category_content" onclick="category()" class="col-md-12 btn btn-block btn-success buttons">View More</button>
					</section>
			</article>
			<!--Second item section starts here -->
			<article class="row container-fluid first-section">
					<section class="row container-fluid">
					<a onmouseover="this.style.color='white';" class="col-md-12 btn btn-block head-button" href="includes\bestdeals.php">Best Deals</a>
					</section>
					<?php bestDeals();?>
					<div id="bestdeals">
					</div>
					<section class="row container-fluid">
					<button id="change_deals_content" onclick="bestDeals()" class="col-md-12 btn btn-block btn-success buttons">View More</button>
					</section>
			</article>
			<!--Third item section starts here -->
			<article class="row container-fluid second-section">
					<section class="row container-fluid">
					<a onmouseover="this.style.color='white';" class="col-md-12 btn btn-block head-button" href="includes\offers.php">Offers</a>
					</section>
					<?php offers();?>
					<div id="offers">
					</div>
					<section class="row container-fluid">
						<button id="change_offer_content" onclick="offers()" class="col-md-12 btn btn-block btn-success buttons">View More</button>
					</section>
			</article>
			<!--Fourth item section starts here -->
			<article class="row container-fluid third-section">
					<section class="row container-fluid">
					<a onmouseover="this.style.color='white';" class="col-md-12 btn btn-block head-button" href="includes\topbrands.php">Top Brands</a>
					</section>
					<?php brands();?>
					<div id="brands">
					</div>
					<section class="row container-fluid">
					<button id="change_content" onclick="brands()" class="col-md-12 btn btn-block btn-success buttons">View More</button>
					</section>
			</article>

			<aside>
			</aside>
			<footer class="container-fluid">
				<div class="row">
					<a href="" class="btn btn-danger btn-block buttons col-md-12">Back</a>
				</div>
				<article  id="footer_1" class="row">
						<table class="table table-condensed col-md-12">
							<tr class="footer-heading">
								<td>company information</td>
								<td>Need Help?</td>
								<td>categories</td>
								<td>stay in touch</td>
								<td>trusted since 1992</td>
							</tr>
							<?php footerData();?>
						</table>

				</article>
				<article id="footer_2" class="row">
					<section class="col-md-6 footer-heading">
						<p>Copyright &copy; 2019 MedicalStore private LTD.<br>All Rights Reserved</p>
					</section>
					<section id="policy" class="col-md-6 footer-heading">
						<a href="" >Sitemap</a><span> | </span><a href="">Privacy Policy</a><span> | </span><a href="">Terms of use</a>
					</section>
				</article>
			</footer>
		</main>
	</body>
</html>
