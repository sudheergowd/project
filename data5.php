<?php
  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "root";
  
// Password is empty
$password = "";
$dbname="database";
  
// Creating a connection
$conn = new mysqli($servername, 
            $username, $password,$dbname);

if($conn)
{
 
}

if(isset($_POST['register']))

{
  $fname =$_POST['fname'];
  $lname =$_POST['lname'];
  $gender=$_POST['gender'];
  
  $mobile =$_POST['mobile'];
  

  $query = "INSERT INTO table1 values('$fname','$lname','$gender','$mobile')";
  
  if(mysqli_query($conn,$query))
  {
  echo "<script>alert('Updated Successfully')</script>";
  header('location:home1.php');
  }
  else
  {
    echo "error".mysqli_error($conn);
  }
  
}   
?>
<html>
  <head>
    <title>Profile Page</title>
 
  </head>
<style>
form{
width:300px;
height:auto;
border:15px solid yellow;
padding 100px;
margin:auto;
}
h1{
border-sizing:border-box;
background-color:skyblue;
width:auto;
margin:auto;
padding-bottom:10px;

}

div{
padding:10px;
}
div.firstname{
padding:25px;
border-sizing:border-box;
background-color:pink;

}
div.lastname{
padding:15px;
}
div.email{
padding:15px;
}
input[type]{
border:2px solid black;
border-radius:4px;

}
div.signup{
border-sizing:border-box;
margin:100%;
}

<?php
session_start();
?>
</style>
  <body background="image3.jpg">
  <a href="logout.php">LOGOUT</a>
        <h2>Welcome, <?php echo $_SESSION['username'] ?> </h2><center>
<form method="post" action="">
<div>
            <h1><center>Your Profile</h1>
        
  		<div class="form-group" >
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  id="firstName"
                  name="fname" required
                />
              </div>
              <div class="form-group ">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  id="lastName"
                  name="lname" required
                />
              </div>
              <div class="form-group" >
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class=""
                    ><input
                      type="radio"
                      name="gender"
                      value="male"
                      id="male" reqired
                    />Male</label
                  >
                  <label for="female" class=""
                    ><input
                      type="radio"
                      name="gender"
                      value="female"
                      id="female" reqired
                    />Female</label
                  >
                  <label for="others" class=""
                    ><input
                      type="radio"
                      name="gender"
                      value="others"
                      id="others" required
                    />Others</label
                
                </div>
              </div>
              
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  id="number"
                  name="mobile" required
                />
              </div>
       
              <div align="center">      
	<input
	 type="Submit" 	 
	 value="Update"
     name="register"
	/>
      </div>      
  
</div>
</form>
  </body>
</html>
