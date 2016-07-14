<!-- <?php

$page = $_SERVER['REQUEST_URI'];

switch ($page) {
	case '/reetec-uk/':
		$load = 'index.html';
		break;
	default:
		$load = '404.html';
}

?>

 -->
<!DOCTYPE html>

<html lang="en">

	<head>
		<?php
			include ("includes/headinfo.html");
		?>
	</head>

	<body>
		<div class="container-fluid">
			<div id="wrapper">
				<?php
					$page_title = "Reetec Electrical Services | Home";
					include ("includes/header.html");
				?>
				<section id="sidebar" class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
					<?php
						include ("includes/sidebar.html");
					?>
				</section>
				<section id="mainbody" class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<?php
						include ("includes/index.html");
					?>
				</section>
			</div>
		</div>
	</body>

</html>
