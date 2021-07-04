<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view.css">
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
              <a href="view.html" class="active">View</a>
              </li>
              <li class="item">
              <a href="transaction.php">Transaction</a>
              </li>
        </ul>
      </nav>
    <div class="table-data">
        <table cellpadding="7px">
            <tr>
            <thead class="thead">
                <th>id</th>
                <th>Name</th>
                <th>Account</th>
                <th>Balance</th>
                <th>Email</th>
                <th>Option</th>
            </thead>
            </tr>
        <?php
        include("config.php");
        error_reporting(0);
        $query='select * from customer';
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
        if($total>0){
        while($result=mysqli_fetch_assoc($data)){
            echo"
            <tbody>
             <tr>
                <td>".$result[id]."</td>
                <td>".$result[name]."</td>
                <td>".$result[account]."</td>
                <td>".$result[balance]."</td>
                <td>".$result[email]."</td>
                <td><button><a href='transfer.php?id=$result[id]
                &name=$result[name] &account=$result[account]&balance=$result[balance]&email=$result[email]'>Transfer</a></button></td>
                </tr>
                </tbody>
        ";

    }
}
else{
    echo "<tr colspan='6'>no record found</tr>";
}
        ?>

        </table>
    </div>
</div>
</body>

</html>