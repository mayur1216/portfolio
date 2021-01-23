<?php

$db = mysqli_connect('localhost','root','','portfolio');

if(isset($_POST['submit'])){

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $text = mysqli_real_escape_string($db, $_POST['text']);
  
  $sql = "INSERT INTO `contact_form` (`name`, `email`, `message`) VALUES ('$username', '$email', '$text')";
  
  $run = mysqli_query($db,$sql);
  
  if($run){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Data Inserted!</strong> Your data is inserted successfully.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    
  
  }else{
    echo '<div class="alert alert-danger" role="alert">
    Not Inserted!!
  </div>';
  mysqli_close;
  
  
  }
  
  }
  
?>