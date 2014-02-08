<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ninja Gold Game</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div id="container">
		<div id="top">
			<?php echo "<h3> Total Gold = ". $this->session->userdata('total_gold') . "</h3>" ?>
			<!-- This is where User's the Total Gold will go -->
		</div>
		<div id="middle">
			<div class="place">
				<h2>Farm</h2>
				<h3>(earns 10-20 golds)</h3>
				<form action="gold/farm" >
					<input type="hidden" name="building" value="farm">
					<input type="submit" value="Find Gold!">
				</form>
			</div>
			<div class="place">
				<h2>Cave</h2>
				<h3>(earns 5-10 golds)</h3>
				<form action="gold/cave" >
					<input type="hidden" name="building" value="cave">
					<input type="submit" value="Find Gold!">
				</form>
			</div>	
			<div class="place">
				<h2>House</h2>
				<h3>(earns 2-5 golds)</h3>
				<form action="gold/house" >
					<input type="hidden" name="building" value="house">
					<input type="submit" id="one" value="Find Gold!">
				</form>
			</div>	
			<div class="place">
				<h2>Casino</h2>
				<h3>(earns/takes 0-50 golds)</h3>
				<form action="gold/casino" >
					<input type="hidden" name="building" value="casino">
					<input type="submit" value="Find Gold!">
				</form>
			</div><br><br>
			<div id="reset">
				<form action="gold/reset" >
					<input type="hidden" name="building" value="reset">
					<input type="submit" value="Reset">
				</form>
			</div>
		</div>
		<div id="bottom">
		<?php

		$activities = $this->session->userdata('activity');

		foreach ($activities as $log => $value) 
		{
			echo "<label>". $value . "<br></label>";
		}
		?>
		
		</div>
	</div>
</body>
</html>