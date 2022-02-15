<?php

session_start();

if (
	isset($_SESSION['usermail'])

	&& !empty($_SESSION['usermail'])
) {

	?>
<head><link rel="stylesheet" href="styleHome.css"></head>
	<?php
?>

<style>

.frm{
	font-size: 20px;

	width: 400px;
	margin: 90px auto 0px auto;

}
input[type=text]{
	width: 100%;
	height: 35px;
	display: inline-block;
	
	border: 1.5px solid #7CFC00 ;
	
	border-radius: 10px;
	border-color: deepskyblue;
	

}
input[type=submit]{
	font-size: 15px;
	background-color: deepskyblue;
	margin:auto   50px 40px 80px;
	width: 40%;
	height: 30px;
	display: inline-block;
	border-radius: 10px;
	border-color: deepskyblue;

}

input[type=submit]:hover{
	cursor: pointer;
	background-color: #7CFC00;
	color: black;


}

.lg{
	background-color: white;
border: 3px solid white;
    border-radius: 10px;
	    font-size: 20px;
    margin-bottom: 30px;
    margin-left: 68px;
    box-shadow: -10px 2px 20px deepskyblue;
    padding: 5px;
}
fieldset{

	padding: 30px 60px;
	border: 2px solid white ;
	border-width: 4px;
	border-radius: 20px;
	border-color:white;
	box-shadow: -5px 5px 30px deepskyblue;
}


	

</style>

<div class="frm">
<fieldset>
<legend class="lg">Add New Product</legend>
	<form action="addprocess.php" method="POST" enctype="multipart/form-data">
		<lebel for="prvar">Varient:</lebel>
		<input type="text" id="prvar" name="prvar" required>
		<br><br>
		<lebel for="prname">Name:</lebel>
		<input type="text" id="prname" name="prname" required>
		<br><br>
		<lebel for="prsku">SKU:</lebel>
		<input type="text" id="prsku" name="prsku" required>
		<br><br>
		<lebel for="prprice">Price Per Unit:</lebel>
		<input type="text" id="prprice" name="prprice" required>
		<br><br>
		<lebel for="prreg">From Supplier(Reg No):</lebel>
		<input type="text" id="prreg" name="prreg" required>
		<br><br>
		<lebel for="prpart">Part No:</lebel>
		<input type="text" id="prpart" name="prpart" required>
		<br><br>
		<lebel for="primage">Image:</lebel>
		<input type="file" id="primage" name="primage">
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