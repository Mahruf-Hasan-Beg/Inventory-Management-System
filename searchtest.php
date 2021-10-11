<?php
if(isset($_GET['search'])
    
    
    && !empty($_GET['search']))

{
$hello=$_GET['search'];


  if($hello==15){
     echo "Hello";


  }
  else{
    echo "Not 15";
  }
 


}
else
{
  echo "Wrong input";
}

?>