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
					$page_title = "Reetec Electrical Services | Inspection & Testing Services";
					include ("includes/header.html");
				?>
				<section id="sidebar" class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
					<?php
						include ("includes/sidebar.html");
					?>
				</section>
				<section id="mainbody" class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<?php
						include ("includes/inspection.html");
					?>
				</section>
			</div>
		</div>
	</body>

</html>
