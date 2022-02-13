<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="use.css">
</head>

<body>

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

<div class="container">
        <h2 class="text-center pt-4">TRANSACTION</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Balance</th>
            </tr>
        </thead>
        <tbody>

          <?php
          include 'config.php';
          $selectquery = " select * from users";
          $query = mysqli_query($conn,$selectquery);
          $numofrows = mysqli_num_rows($query);

           while($rows = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="color:black;background-color:pink">Transact</button></a></td> 
               </tr>
             <?php
          }
           ?>
</tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
</body>
</html>