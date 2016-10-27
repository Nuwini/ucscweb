<?php 
include '../../model/config.php';
include '../../controller/searchContent.php';

?>




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<style type="text/css">

	.insideFrame{
		background-color: white;
		margin: 8px;
		height: 75px;
		width: 1225px



	}
	.outsideFrame{
		background-color: lightblue;
		border: 2px solid black;
		height: 125px;
		width: 1250px;
		margin-top: 4px;


	}
		.insideFrame1{
		background-color: white;
		margin: 8px;
		height: 200px;
		width: 1225px



	}
	.outsideFrame1{
		background-color: lightblue;
		border: 2px solid black;
		height: 250px;
		width: 1250px;
		margin-top: 4px;


	}
</style>


</head>
<body>

<div class="wrapper row2">
  <div id="header" class="clear" style="padding-bottom:100px">
    <div class="img">
      <h1><a href="index.html"><img src="../images/demo/logo-ucsc-1.png"/></a></h1>
 
	</div>

  </div>
 	<div  style="background-color:white;height:100px">
  		<div style="float:right">
		<form action="advanceSearch.php"  method= "post">

			<div id="radio">
				<label style="color:black"> search by :</label>
				<input name ="radio" type ="radio"  value="by_date" style="font-color:black">date
				<input name ="radio" type="radio" value="by_headline" style="color:black">headline
				<br> date input format - dd/mm/yyyy

			</div>

			<br><input type= "text"  name = "searchText" placeholder="search >>">
			<input type="submit"  value = "search"> 

			<select id="adv"  name="advanceSearch">
    			<option disabled selected value> advance search </option>
    			<option value = "staff"> search staff </option>
    			<option value = "publication">  publications </option>
    			<option value = "post"> posts </option>
    			<option value = "general"> general </option>
			</select>

		</form>
		</div>
	</div>
</div>
<?php

	$output1 = explode(",",$output1);


?>
<?php
	foreach ($output1 as $item) {
		if($item==""){
				continue;
			}

		?>
		<div class="outsideFrame">
		<?php
			$separate = explode("|",$item);
		?>
			<div style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:20px"><?php echo $separate[0]; ?> </div>
		
			<div class="insideFrame">

				<p> <?php echo $separate[1];?></p>
		

			</div>


		</div>
<?php
		# code...
	}

?>



<?php

	$output4 = explode(",",$output4);


?>
<?php
	foreach ($output4 as $item) {
		if($item==""){
				continue;
			}

		?>


		<div class="outsideFrame1">
			<?php 
			$words =  explode("+", $item)


			?>
			
			<a style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:20px" href="s1.php"><?php echo $words[0]; ?></a>



			
			<div class="insideFrame1">

				
				<img src="<?php echo $words[1]; ?> " style="width:200px;height:200px;float:right">
				<p> <?php echo $words[0] ?></p>


				
				



		

			</div>


		</div>

<?php
		# code...
	}

?>


<?php echo $output3;

?>





</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../view/layout/scripts/postPublicationSearch.js"></script>



</html>