 <?php
    // if (isset($_GET['submit'])) {
    //     echo $_GET['name'];
    //     echo $_GET['email'];
    //     echo $_GET['event'];
    // }

    if (isset($_POST['submit'])) {
        //check if name is there
        if (empty($_POST['name'])) {
            echo 'How would you like to be called?';
            echo "<br>";
        } else {
            echo htmlspecialchars($_POST['name']); //echo out for confirmation
            echo "<br>";
        }
        //check if email is there
        if (empty($_POST['email'])) {
            echo 'Please provide an email!';
            echo "<br>";
        } else {
            echo htmlspecialchars($_POST['email']);
            echo "<br>";
        }
        //check if event is chosen
        if (empty($_POST['event'])) {
            echo 'Please let us know to which event you would like to come.';
            echo "<br>";
        } else {
            echo htmlspecialchars($_POST['event']);
            echo "<br>";
        }
    } //end of post check



    ?>

 <!DOCTYPE html>
 <html lang="en">
 <?php require_once "header.php"; ?>

 <section class="container">
     <h4 class="center">Book Your Date</h4>
     <form class="form" action="book.php" method="POST">
         <label>Your Name:</label>
         <input type="text" name="name">
         <label>Your Email:</label>
         <input type="text" name="email">
         <label>Event Date:</label>
         <input type="text" name="event">
         <div>
             <input type="submit" name="submit" value="submit" class="btn">
         </div>

     </form>


 </section>




 <?php require_once "footer.php"; ?>

 </html>