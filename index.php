<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
		<title>Is it the future yet?</title>
		<style type="text/css">
			body {
				background-color: white;
				color: black;
				text-align: center;
			}
			div#content {
				margin-top: 50px;
				font-family: sans-serif;
				font-size: 200%;
			}
		</style>
	</head>
	<body>
		<div id="content">
			<img src="logo.png" width="512" height="210" alt="Is it the future?" />
			<p>
				<?php
				$future = new DateTime(date("Y-m-d", mktime(0, 0, 0, 10, 21, 2015)));
				$today = new DateTime(date("Y-m-d", mktime(0, 0, 0)));
				$interval = $today->diff($future);
				if (intval($interval->format("%a")) == 0) {
					echo "Yes, it is!";
				} else {
					echo "Nope, you still have ".$interval->format("%a")." days to become a scientist/engineer and invent the stuff you are missing.\n";
				}
				?>
			</p>
		</div>
	</body>
</html>
