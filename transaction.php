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
              <!-- <img src="rahuljha.jpg" alt="rahul" /> -->
        </div>
        <ul>
                <li class="item">
                    <a href="index.html">Home</a>
                </li>
                <li class="item">
                    <a href="user.php">Create</a>
                </li>
                <li class="item">
                    <a href="view.php">View</a>
                </li>
                <li class="item">
                    <a href="transaction.php"  class="active">Transaction</a>
                </li>
        </ul>
      </nav>
    <div class="table-data">
        <table cellpadding="7px">
            <tr>
                <thead class="thead">
                        <th>t_id</th>
                        <th>Transfer From</th>
                        <th>Transfer To</th>
                        <th>Balance</th>
                        <th>Date</th>
                </thead>
            </tr>


        <?php
            include("config.php");
            error_reporting(0);
            $query='select * from transaction';
            $data=mysqli_query($conn,$query);
            $total=mysqli_num_rows($data);
            if($total>0){
                while($result=mysqli_fetch_assoc($data)){
                    echo"
                    <tbody>
                    <tr>
                            <td>".$result[transaction_id]."</td>
                            <td>".$result[sender]."</td>
                            <td>".$result[receiver]."</td>
                            <td>".$result[balance]."</td>
                            <td>".$result[date]."</td>
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