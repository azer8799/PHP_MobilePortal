<!DOCTYPE html>

<!--

To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates and open the template in the editor.
-->

<html>

<head>

<title></title>
</head>
<body background="https://www.fonewalls.com/wp-content/uploads/Amoled-Background-HD-Wallpaper-177.jpg">
 <?php
  error_reporting(E_ERROR);
 ?>

    
<div class="container">
<header>
<h1>Mobile Bookings</h1>
</header>
 



<article>


<form action="" method="post">
   <div style="align-items: center; color: blueviolet; margin-left:250px">
               
            </div>
                          <h1 style="color: black">Search and book your Mobiles </h1> 
            <div style="color: burlywood;border-color: black">

 <p style="color:lightsalmon">Mobile name : <input style="border-color:black;margin-right: 20px" type="text"   name="mname"  required="" ></p><button type="submit"> SEARCH </button>   
</form>

<?php

// Create connection
$conn = mysqli_connect("localhost","root", "","mobile shop");

// Check connection
 

echo "Connected successfully";
if(isset($_POST['mname'])){

$MobileName = $_POST['mname'];
$sql = "select * from mobiles where Name LIKE '%$MobileName%' and reserved='NO'";

$result = mysqli_query($conn, $sql);
?>
<table border="1">
<tr>

<th>Name</th>
<th>company</th>
<th>mobile_model</th>

<th>features</th>
<th>price</th>
<th>reserved</th>

</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>

<td><?php echo $row['Name']; ?></td>

<td><?php echo $row['company']; ?></td>

<td><?php echo $row['mobile_model']; ?></td>

<td><?php echo $row['features']; ?></td>

<td><?php echo $row['price']; ?></td>

<td><?php echo $row['reserved']; ?></td>

</tr>

<?php

}?>

</table><?php } ?>
    
<form action="" method="post">
    <div style="align-items: center; color: blueviolet; margin-left:250px">
               
            </div>
      

<p style="color:lightsalmon">enter mobile model: <input style="border-color:black;margin-left: 20px" type="text"   name="rmname"  required="" ></p>
<button type="submit"> Reserve</button>
</form>

<?php

// Create connection
$conn = mysqli_connect("localhost","root", "","mobile shop");

// Check connection
 if (!$conn) {
die("Connection failed!!!!!! " . mysqli_connect_error());
 }

echo "Connected successfully";
if(isset($_POST['rmname'])){

$MobileName = $_POST['rmname'];
$sql = "Update `mobiles` SET Reserved ='YES' where Name='$MobileName'";

$result = mysqli_query($conn, $sql);

}
?>

</article>

</div>

</body>

</html>
