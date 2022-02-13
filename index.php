<html>
    <head>
        <title>
            INTERNSHIP
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="body.css">
    </head>
    <body>
    <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
	echo"<br>";
    $email=$_POST['email'];
	echo"<br>";
    $balance=$_POST['balance'];

    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
            
                     echo '<script type="text/javascript">';
			echo ' alert("Hurray! User created.")';  
			echo '</script>';
                    
    }
  }
  ?>
        <div class="logo">
             <a href="#"><img src="logo.png"></a> 
        </div>
        <div class="topnav">
	      <a href="transactionhistory.php">TRANSACTION HISTORY</a>
		<a href="transaction.php">TRANSACTION</a>
            <a href="viewcustomer.php">USERS</a>
            <a href="user.php">ABOUT US</a>
            <a href="index.php">HOME</a>
            <div class="ti">
                <a href="#">UCAN BANK</a>
            </div>
        </div>
        <img src="3.jpg">
        <div class="tj">
            <h1>WELCOME TO UCAN BANK</h1>
            
        </div>

        <div class="loginbox">
                <h1>REGISTER</h1>
                <form method="post">
                    <p>Name</p>
                    <input type="text" name="name" placeholder="name">
                    <p>Email</p>
                    <input type="text" name="email" placeholder="email">
                    <p>Balance</p>
                    <input type="text" name="balance" placeholder="Balance"></input>
                    <input type="submit" name="submit" value="Submit">
                    
                </form>
                
            </div>
        
    </body>
</html>