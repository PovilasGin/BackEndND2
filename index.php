<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <heading>
        <?php
            function name($type){
                echo "Povilas <br>";
            
            if($type == "name"){
                echo "mano vardas Povilas <br>";
           }
           else {
               echo "false <br>";
           }
        }
           name("name");


           function emoji($type){
               if($type == "sad"){
                   echo ":( <br>";
               }elseif($type == "happy"){
                   echo ":) <br>";
               }
           }
           emoji("happy");
           emoji("sad")
        ?>
    </heading>
    

</body>
</html>