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
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php
					$page_title = "Reetec Electrical Services | Home";
					include ("includes/header.html");
					include ("includes/index.html");
					// include ("includes/" . $load);
				?>
			</div>
		</div>
	</body>

</html>
