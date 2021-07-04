<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BASIC BANKING SYSTEM</title>
    <link rel="stylesheet" href="user.css" />
  </head>

  <body>
    <nav id="navbar">
      <div id="logo"></div>
      <ul>
        <li class="item">
          <a href="index.html">Home</a>
        </li>
        <li class="item">
          <a href="user.php" class="active">Create</a>
        </li>
        <li class="item">
          <a href="view.php">View</a>
        </li>
        <li class="item">
          <a href="transaction.php">Transaction</a>
        </li>
      </ul>
    </nav>
    <form method="POST" class="user">
      <h1>New User Creation</h1>
      <img src="user.png" />
      <div class="user-item">
          <label for="name">Name</label><br />
          <input type="text" name="name" required /><br />
          <label for="account">Account Number</label><br />
          <input type="number" name="account" required /><br />
          <label for="balance">Balance</label><br />
          <input type="number" name="balance" required /><br />
          <label for="balance">Email</label><br />
          <input type="email" name="email" required /><br />
          <input
            type="submit"
            value="Submit"
            name="submit"
            class="button"
            onclick="alertfun()"
          />
        <input type="reset" value="Reset" class="button" />
      </div>
    </form>
    <script>
      function alertfun() {
        alert("New User Created");
      }
    </script>
  </body>
</html>

  <?php
  if(isset($_POST['submit']))
  {
  include("config.php");
  $Name=$_POST['name'];
  $Account=$_POST['account'];
  $Balance=$_POST['balance'];
  $Email=$_POST['email'];
  $query="INSERT INTO customer(name, account, balance, email) values ('$Name','$Account','$Balance','$Email')";
  $data=mysqli_query($conn,$query);
  if($data){
      echo "";
  }
  else{
      echo "Failed to insert data into database";
  }

  }
  ?>
