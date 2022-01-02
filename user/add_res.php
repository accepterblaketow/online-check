<?php
        include "../conn.php";
        $q="SELECT * FROM room WHERE `c` > 0";
        $ans=mysqli_query($db,$q);
        while($row=mysqli_fetch_assoc($ans)){
            echo "<option value=".$row['id'].">".$row['rname']." 剩餘房數 :".$row['c']." NT$ ".$row['p']."</option>";
        }
?>