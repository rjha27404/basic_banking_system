<?php
include('config.php');
error_reporting(0);
$id=$_GET['id'];
$name=$_GET['name'];
$account=$_GET['account'];
$balance=$_GET['balance'];
$email=$_GET['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="transfer.css">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
              
        </div>
        <ul>
              <li class="item">
              <a href="index.html">Home</a>
              </li>
              <li class="item">
              <a href="user.php">Create</a>
              </li>
              <li class="item">
              <a href="view.php" class="active">View</a>
              </li>
              <li class="item">
              <a href="transaction.php">Transaction</a>
              </li>
        </ul>
    </nav>
    <table cellpadding="7px">
            <tr>
            <thead class="thead">
                <th>id</th>
                <th>Name</th>
                <th>Account</th>
                <th>Balance</th>
                <th>Email</th>
            </thead>
            </tr>
            <tbody>
             <tr>
                <td><?php echo"$id"?></td>
                <td><?php echo"$name"?></td>
                <td><?php echo"$account"?></td>
                <td><?php echo"$balance"?></td>
                <td><?php echo"$email"?></td>
                </tr>
                </tbody>
    </table>
    <form action="update1.php" class="form-group" method="get">
        <label for="sender">Transfer From</label><br>
        <input type="textt" name="sendername" value="<?php echo"$name"?>">
        <input type="textt" name="sender" value="<?php echo"$id"?>" hidden><br>
        <label for="receiver">Transfer To</label><br><br>
        <select name='receiver' id='sel' required >
            <option value="" selected disabled>Choose</option>
            <?php
                include("config.php");
                $sql1="SELECT * FROM customer Where id!=$id";
                
                $result1=mysqli_query($conn,$sql1);
                if(!$result1){
                    echo"Query Unsuccessful";
                }
                while($row1=mysqli_fetch_assoc($result1)){
                ?>
                <option name="receiver" value="<?php echo $row1['id'];?>">
                <?php echo $row1['name'];?>(Balance:
                <?php echo $row1['balance'];?>)
                </option>

                        
            <?php
            
                }
            ?>
        </select><br>
        <label for="amount">Amount</label><br>
        <input type="number" name="amount"><br>
        <button type="submit" class="btn" value="submit">Transfer</button>
        
    </form>
    </body>
</html>
