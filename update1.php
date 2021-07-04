<?php
    include("config.php");
        $Sender=$_GET['sender'];
        $sendername=$_GET['sendername'];
        $Receiver=$_GET['receiver'];
        $Balance=$_GET['amount'];
        $query1="SELECT * FROM customer Where id=$Sender";
        $sender_balance=mysqli_query($conn,$query1);
        $sql=mysqli_fetch_assoc($sender_balance);
        if($sql['balance']>$Balance){
        $update_sender="UPDATE customer SET balance=balance-$Balance WHERE id=$Sender";
        $data1=mysqli_query($conn,$update_sender);
        $update_receiver="UPDATE customer SET balance=balance+$Balance WHERE id=$Receiver";
        $data2=mysqli_query($conn,$update_receiver);
        $receivername="SELECT * FROM customer WHERE id=$Receiver";
        $data4=mysqli_query($conn,$receivername);
        $query2=mysqli_fetch_assoc($data4);
        $receiver=$query2['name'];
        $query="INSERT INTO transaction(sender, receiver, balance) values ('$sendername','$receiver','$Balance')";
        $data=mysqli_query($conn,$query);
        if($data){
            echo "<script>
    
            alert('Transaction Successful');
            window.location='transaction.php';
         </script>";
        }

         }
        else{
            echo "<script>
            
            alert('Insufficient Balance');
            window.location='view.php';
        </script>";
        }
   
    ?>