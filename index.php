 <?php

    require_once "DB.php";
    // require_once "Country.php";

    //connect to db
    $success = DB::connect(
        '127.0.0.1',
        'speed_dating',
        'root',
        ''
    );

    $sql = "SELECT * FROM `sd_info`";

    $result = DB::select($sql, [], "");

    // var_dump($result);
    // echo gettype($result);

    $user_list = [];
    foreach ($result as $user_info) {
        array_push($user_list, $user_info);
    }
    var_dump($user_list);
    echo gettype($user_list);

    ?>

 <!DOCTYPE html>
 <html lang="en">


 <?php require_once "header.php"; ?>

 <h4>Booking System</h4>
 <div class='container'>
     <div class="row">
         <?php foreach ($user_list as $user) { ?>
             <div class='table-container'>
                 <h6><?php echo ($user->name) ?></h6>
                 <h6><?php echo ($user->email) ?></h6>
                 <h6><?php echo ($user->event) ?></h6>
             </div>



         <?php  } ?>
         <?php  ?>
     </div>

 </div>



 <?php require_once "footer.php"; ?>

 </html>