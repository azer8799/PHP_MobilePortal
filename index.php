<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Library</title>
    </head>
    <body background="https://www.freegreatpicture.com/files/147/18429-hd-color-background-wallpaper.jpg">
        <?php
        
        $user_name = $user_id = $phone_no = $shipping_address= $email_id = $password = "" ;
        if($_SERVER["REQUEST_METHOD"]=="POST"){
           $user_name = $_POST['user_name'];
            $user_id = $_POST['user_id'];
            $phone_no = $_POST['phone_no'];
            $shipping_address = $_POST['shipping_address'];
            $email_id= $_POST['email_id'];
            $password = $_POST['password'];
            
            $con = mysqli_connect("localhost","root","","mobile_db");
                       
        }
			$query = "INSERT INTO `mobile` VALUES (user_name, user_id, phone_no, shipping_address, email_id,password) VALUES ('$user_name', '$user_id', '$phone_no', '$shipping_address','$email_id','$password')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("success");
			            }
                                    else
                                    {
                                        echo ("Fail"); 
                                    }
                        
        ?>
         
        
        <form  action="" method="post">
            
            <div style="align-items: center; color:orange; margin-left:10px">
                <h1>Welcome to Moblie portal</h1>
            </div>
            <div style="color:yellowgreen; ">
                
                <p>User_Name: <input type="text"   name="user_name" placeholder="Name" > </p>
                <p>User_id: <input style="border-color:white;" type="text"   name="user_id" placeholder="id"></p>   
          <p>Phone_Number: <input type="text"   name="phone_no" placeholder="Contact"></p> 
           <p>Address: <input type="text"   name="shipping_address" placeholder="address"></p>
            <p>Email: <input type="text"   name="email_id" placeholder="email"></p>
         <p>Password:    <input type="text"   name="password" placeholder="Password"></p>  
         <div style="margin-left:10px">
             <button style="background-color:blueviolet; font-size: 20px; font-weight: lighter;" type="submit"  name="submit" value="Register" >SIGN-UP</button>
         </div>
            </div>
        </form>

        
    </body>
</html>




