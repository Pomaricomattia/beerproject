<?php 
function connectUser($connect,$login,$pwd){
        
    $sql = "SELECT pseudo,motdepasse FROM admin WHERE pseudo='$login' AND motdepasse='$pwd' ;";
    $recup = mysqli_query($connect,$sql) or die(mysqli_error($connect));

    if(mysqli_num_rows($recup)){
        return mysqli_fetch_assoc($recup);
    }else{
        return false;
    }
}


?>