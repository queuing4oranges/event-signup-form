 <?php
    // if (isset($_GET['submit'])) {
    //     echo $_GET['name'];
    //     echo $_GET['email'];
    //     echo $_GET['event'];
    // }

    // if (isset($_POST['submit'])) {
    //     //check if name is there
    //     if (empty($_POST['name'])) {
    //         echo 'How would you like to be called?';
    //         echo '<br>';
    //     } else {
    //         echo htmlspecialchars($_POST['name']); //echo out for confirmation
    //         echo '<br>';
    //     }
    $name = '';
    $email = '';
    $event = '';
    $errors = array('name' => '', 'email' => '', 'event' => '');


    if (isset($_POST['submit'])) {

        //check if name is there
        if (empty($_POST['name'])) {
            $errors['name'] = '*How would you like to be called?';
        } else {
            $name = $_POST['name']; //grabs the date from the input
            if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
                $errors['name'] = '*Name must be letters and spaces only.';
            }
        }
        //check if email is there
        if (empty($_POST['email'])) {
            $errors['email'] = '*Please provide an email.';
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = '*Email must be a valid email address.';
            }
        }
        //check if event is chosen
        if (empty($_POST['event'])) {
            $errors['event'] = '*Please let us know which event you would like to join.';
            $event = $_POST['event'];
        } else {
            $event = $_POST['event'];
            if (!preg_match('/^\d+(\.\d+)*$/', $event))
                $errors['event'] = '*The date can only contain numbers.';
        }
    }


    //checking for any errors and then redirecting
    if (array_filter($errors)) {
        // echo 'errors in the form';
    } else {
        // echo 'form is valid';
        header('Location: index.php');
    }





    //end of post check

    ?>

 <!DOCTYPE html>
 <html lang="en">
 <?php require_once "header.php"; ?>

 <section class='container'>
     <h4 class='center'>Book Your Date</h4>
     <form class='form' action='book.php' method='POST'>
         <div class='form-container'>
             <label>Your Name:</label>
             <input type='text' name='name' value=<?php echo htmlspecialchars($name) ?>>
             <div class='red-text'><?php echo $errors['name']; ?></div>

             <label>Your Email:</label>
             <input type='text' name='email' value=<?php echo htmlspecialchars($email) ?>>
             <div class='red-text'><?php echo $errors['email']; ?></div>

             <label>Event Date [dd.mm.yy]:</label>
             <input type='text' name='event' value=<?php echo htmlspecialchars($event) ?>>
             <div class='red-text'><?php echo $errors['event']; ?></div>
         </div>
         <div class='btn'>
             <input type='submit' name='submit' value='submit' class='btn'>
         </div>

     </form>


 </section>




 <?php require_once 'footer.php'; ?>

 </html>