<?php

session_start();

if (
	isset($_SESSION['usermail'])

	&& !empty($_SESSION['usermail'])
) {

	?>
<head><link rel="stylesheet" href="styleHome.css"></head>
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
	
	border: 2px solid #7CFC00 ;
	
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
border: 3px solid deepskyblue;
    border-radius: 7px;
	    font-size: 20px;
    margin-bottom: 30px;
    margin-left: 50px;
    box-shadow: -10px 2px 20px deepskyblue;
    padding: 10px;
}
fieldset{

	padding: 30px 60px;
	border: 2px solid deepskyblue ;
	border-width: 4px;
	border-radius: 10px;
	border-color: deepskyblue;
	box-shadow: -5px 5px 30px deepskyblue;
}



	

</style>


	<?php
?>



<div class="frm">
<fieldset>
<legend class="lg">Add New Transactions</legend>
	<form action="transprocess.php" method="POST" enctype="multipart/form-data">
		<lebel for="prvar">Transaction ID: </lebel>
		<input type="text" id="prvar" name="prvar">
		<br><br>
		<lebel for="prname">Payment Method:</lebel>
		<input type="text" id="prname" name="prname">
		<br><br>
		<lebel for="prprice">Amount: </lebel>
		<input type="text" id="prprice" name="prprice">
		<br><br>
		<lebel for="pr">Supplier (Reg No): </lebel>
		<input type="text" id="pr" name="pr">
		<br><br>
		<lebel for="prsku">Date: </lebel>
		<input type="date" id="prsku" name="prsku">
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