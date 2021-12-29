
<! DOCTYPE html>
<html>
	<head>
		<title>Medal Standings</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="olympic.css">
		<script src="javascript.js"></script>
	</head>	
	
	<body onload="disnone()">



	<div class="window1">

		  <h2>Medal Standings</h2><br>
		
			<div class="left box">Country <br><br>
				Afghanistan: <?php 
				include 'Config.php'; 
				echo $conn->query("SELECT Country FROM standings WHERE Country = 'Afghanistan'")->num_rows;?><br>
				<progress id="file" value="<?php 
				include 'Config.php'; 
				echo $conn->query("SELECT Country FROM standings WHERE Country = 'Afghanistan'")->num_rows;?>" max="20">  </progress><br>
				Albania: <?php 
				include 'Config.php'; 
				echo $conn->query("SELECT Country FROM standings WHERE Country = 'Albania'")->num_rows;?><br>
				<progress id="file" value="<?php 
				include 'Config.php'; 
				echo $conn->query("SELECT Country FROM standings WHERE Country = 'Albania'")->num_rows;?>" max="20"> </progress><br>
				Algeria: <?php 
				include 'Config.php'; 
				echo $conn->query("SELECT Country FROM standings WHERE Country = 'Algeria'")->num_rows;?><br>
				<progress id="file" value="<?php 
				include 'Config.php'; 
				echo $conn->query("SELECT Country FROM standings WHERE Country = 'Algeria'")->num_rows;?>" max="20">  </progress>


			</div>
			<div class="right box">
				Details for:
				<select  id="countries1" onchange="selected(this)" >
		      <option value=""></option>
					<option value="Afghanistan">Afghanistan</option>
					<option value="Albania">Albania</option>
					<option value="Algeria">Algeria</option>
				</select>
				 
							<div class="Albanias">
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Albania' && Medals = 'gold'" ;
							    
								$result = $conn->query($sql);

								while ($row = $result->fetch_assoc()) {
									$medals_gold_alb[] = $row['Sport'];
								}
								if (isset($medals_gold_alb)) {
									foreach ($medals_gold_alb as $medal) {
										echo "Gold:" .$medal . "<br>";
									}
								}else{
									echo "Gold: -";
								}
							?>
							</div >
							<div class="Albanias">
								
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Albania' && Medals = 'silver'" ;
							    
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) {
									$medals_silver_alb[] = $row['Sport'];
								}
								if (isset($medals_silver_alb)) {
								foreach ($medals_silver_alb as $medal) {
									echo "Silver:" .$medal . "<br>";
								}
								}else{
									echo " Silver: -";
								}
							?>
							</div>
							<div class="Albanias">
								
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Albania' && Medals = 'bronze'" ;
							    
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) {
									$medals_bronze_alb[] = $row['Sport'];
								}
								if (isset($medals_bronze_alb)) {
								foreach ($medals_bronze_alb as $medal) {
									echo "Bronze:" .$medal . "<br>";
								}
							}else{
									echo "Bronze: -";
								}
							?>
							</div>
						<div class="Algerias">
								<?php
									include 'Config.php';

									$sql = " SELECT Sport FROM standings WHERE Country = 'Algeria' && Medals = 'gold'" ;
								    
									$result = $conn->query($sql);
									while ($row = $result->fetch_assoc()) {
										$medals_gold_alg[] = $row['Sport'];
									}
									
									if (isset($medals_gold_alg)) {
										foreach ($medals_gold_alg as $medal) {
											echo "Gold:" .$medal . "<br>";
										}	
									}else{
										echo "Gold: -";
									}
								?>
							</div >
							<div class="Algerias">
								
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Algeria' && Medals = 'silver'" ;
							    
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) {
									$medals_silver_alg[] = $row['Sport'];
								}
							
								
								if (isset($medals_silver_alg)) {
									foreach ($medals_silver_alg as $medal) {
										echo "Silver:" .$medal . "<br>";
									}	
								}else{
									echo "Silver: -";
								}
								?>
							</div>
							<div class="Algerias">
								
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Algeria' && Medals = 'bronze'" ;
							    
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) {
									$medals_bronze_alg[] = $row['Sport'];
								}
								
								if (isset($medals_bronze_alg)) {
									foreach ($medals_bronze_alg as $medal) {
										echo "Bronze:" .$medal . "<br>";
									}	
								}else{
									echo "Bronze: -";
								}
								?>
							</div>
							<div class="Afganistans">
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Afghanistan' && Medals = 'gold'" ;
							    
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) {
									$medals_gold_afg[] = $row['Sport'];
								}
								
								if (isset($medals_gold_afg)) {
									foreach ($medals_gold_afg as $medal) {
										echo "Gold:" .$medal . "<br>";
									}	
								}else{
									echo "Gold: -";
								}
								?>
							</div >
							<div class="Afganistans">
								
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Afghanistan' && Medals = 'silver'" ;
							    
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) {
									$medals_silver_afg[] = $row['Sport'];
								}
								
								if (isset($medals_silver_afg)) {
									foreach ($medals_silver_afg as $medal) {
										echo "Silver:" .$medal . "<br>";
									}	
								}else{
									echo "Silver: -";
								}
								?>
							</div>
							<div class="Afganistans">
							<?php
								include 'Config.php';

								$sql = " SELECT Sport FROM standings WHERE Country = 'Afghanistan' && Medals = 'bronze'" ;
							    
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) {
									$medals_bronze_afg[] = $row['Sport'];
								}
								
								if (isset($medals_bronze_afg)) {
									foreach ($medals_bronze_afg as $medal) {
										echo "Bronze:" .$medal . "<br>";
									}	
								}else{
									echo "Bronze: -";
								}
								?>
							</div>
				</div>
			</div>	



</body>
</html>

