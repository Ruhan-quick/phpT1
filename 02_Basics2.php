<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: gray;
        margin: auto;
        padding: 20px;
    }
</style>

<body>
    <div class="container">

        Bismillah, This is a container.
        <h1>Let's Learn about php</h1>

        <?php
        $age = 27;
        if ($age > 20) {
            echo "You are in";
        } else {
            echo " You are out";
        }
        echo "<br/>";
        $lang = array("c++", "python", "php", "js", "java");
        echo $lang[2];
        echo "<br/>";
        echo count($lang);
        $a = 0;
        while ($a <= 10) {
            # code...
            echo "This is the value of current a: ";
            echo $a++;
            echo "<br/>";
        }
        $a = 0;
        while ($a < count($lang)) {
            # code...
            echo "This is the value of current lang: ";
            echo $lang[$a];
            echo "<br/>";
            $a++;
        }
        foreach ($lang as $val) {
            echo "<br/> Lang: ";
            echo $val;
        }

        function print5()
        {
            echo "Five";
        }

        print5();
        print5();
        print5();



        ?>
        <script>
            console.log("hello");
        </script>
    </div>
</body>

</html>