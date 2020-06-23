<?php include("head_nav.html"); ?>

<?php 

    session_start(); // to allow variable transfer between pages...
    include("config.php");

    // Connect to database... 
$dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno()) {
echo "Connection failed:".mysqli_connect_error();
exit;
}

?>
            
             <div class="box main">
            <h2>Home</h2>
                 
                 <p>
                 On this website I will be reviewing all my favourite dishes for breakfast, lunch and dinner.
                I will be talking about why these are my favourite dishes and what I love about each of them. I will also be giving each dish a rate out of 5 stars. 
                 </p>
                         
                 <p>
                I have decided to include quite simple but delicious dishes that are quite well known but also dishes that I regularly have. 
                 </p>
                 
            </div>   <!-- / main -->
  
            
<?php include("footer.html"); ?>