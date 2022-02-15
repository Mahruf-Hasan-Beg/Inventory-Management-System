<?php

session_start();

if (
	isset($_SESSION['username1'])

	&& !empty($_SESSION['username1'])
) {

?>

	<head>
		<link rel="stylesheet" href="stylesuphome.css">
	</head>


<style>

.frm{
	font-size: 20px;

	width: 400px;
	margin: 120px auto 0px auto;

}
input[type=text]{
	width: 100%;
	height: 30px;
	display: inline-block;
	
	border: 2px solid chocolate ;
	
	border-radius: 10px;
	border-color: chocolate;

}
input[type=submit]{
	font-size: 15px;
	background-color: chocolate;
	margin:auto   50px 40px 80px;
	width: 40%;
	height: 30px;
	display: inline-block;
	border-radius: 10px;
	border-color: chocolate;

}

input[type=submit]:hover{
	cursor: pointer;
	background-color: chocolate;
	color: white;


}

.lg{
    border: 3px solid white;
    border-radius: 7px;
	font-size: 20px;
    margin-bottom: 30px;
    margin-left: 60px;
    background-color: floralwhite;
}
fieldset{

	padding: 30px 50px;
	border: 2px solid white ;
	border-width: 4px;
	border-radius: 10px;
	border-color: white;
	box-shadow: -15px 15px 30px chocolate;
}


	

</style>
	<?php
	?>
	<div class="frm">
<fieldset>
<legend class="lg">New Products Info</legend>
	<form action="supaddprocess.php" method="POST" enctype="multipart/form-data">
		
		<lebel for="prname">Code:</lebel>
		<input type="text" id="prname" name="prname">
		<br><br>
		<lebel for="prsku">Name of Product:</lebel>
		<input type="text" id="prsku" name="prsku">
		<br><br>
		<lebel for="ty">Type of Product:</lebel>
		<input type="text" id="ty" name="ty">
		<br><br>
		<lebel for="prprice">Your Reg No:</lebel>
		<input type="text" id="prprice" name="prprice">
		<br><br>
		<lebel for="prreg">Availability:</lebel>
		<input type="text" id="prreg" name="prreg">
		<br><br>
		<lebel for="prvar">Available Date</lebel>
		<input type="date" id="prvar" name="prvar">
		<br><br>



		<input type="submit" value="Add">


	</form>
</fieldset>
</div>

<?php


} else {
?>
	<script>
		location.assign("Login.php");
	</script>
<?php

}

?>