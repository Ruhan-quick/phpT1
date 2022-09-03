<?php
// session_start();
if (isset($_POST['name'])) {
    $DH = '127.0.0.1:3309';
    $DN = 'sform';
    $DUN = 'root';
    $DP = '';
    try {
        $dbc = mysqli_connect($DH, $DUN, $DP, $DN);
    } catch (Exception $e) {
        die('MySQL Connect Error: ' . $e->getTraceAsString());
        exit();
    }
    // echo "ok";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];


    $sql = "INSERT INTO `usr` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());
";
    echo $sql;

    if ($dbc->query($sql) == true) {
        echo "Successfully Inserted";
    } else {
        echo "Error: $sql <br> $dbc->error";
    }

    $dbc->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TV Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Telugu&display=swap" rel="stylesheet">
</head>

<body>
    <img class="bg1" src="./bg1.jpg">
    <div class="container">
        <h1>Welcome to TV Form</h1>
        <p>Enter Your Details</p>
        <p class="submitMsg">Thanks for submitting your request.</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email address">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone address">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other infoes"> </textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>

    <script src="index.js">
        // INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'test name', '22', 'male', 'test@gmail.com', '993923231', 'good text', '2022-08-27 17:19:16.000000');
        // INSERT INTO `usr` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'TestN', '22', 'male', 'test@gmail.com', '993923231', 'Good php', current_timestamp());   
    </script>
</body>

</html>