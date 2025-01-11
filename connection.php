<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $conn = mysqli_connect("localhost","root","","book_store");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (!$conn) {
        Notify("Database connectivity failed contact admin");
        die();
      }
      
      
      // Start session 
      if(!session_id()) session_start(); 
       
      
      //To send pop up msg to user
      function Notify($message)
      {
        echo "<SCRIPT>
              alert('$message');
          </SCRIPT>";
      }
    function RedirectAfterMsg($message, $location)
{
  Notify($message);
  echo "<SCRIPT>window.location = '$location';</SCRIPT>";
}
function Alert($msg)
{
  echo "<script>
    alert('$msg');
    document.getElementById('notify').innerHTML='Test';
    </script>";
}
?>
