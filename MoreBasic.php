<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head> 
<style>
*{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}
.container{
    padding: 23px;
    margin: auto;
    max-width: 80%;
    background-color: rgb(252, 198, 198);
}
</style>

<body>
    <div class="container">
    <h1>Sujit Is Smart</h1>    
    <p>Your Party Status Here:</p>
    
    <?php
    // If Else Statement
    $age= 7;
    if($age>=18){
        echo "you can go to the party";

    }
    else if($age==7){
        echo "You are only 7 year old";

    }
    else{

            echo "you cannot go to the party";
        }
    

    ?>
    

    <?php
    // Array statement
    echo "<br>";
    $language = array("English", "Marathi", "Maths","Social-Science");
    echo count($language); 
    echo "<br>";
    echo $language[1]; 
    echo "<br>";
    echo $language[2]; 
    echo "<br>";
    echo $language[3]; 

    // Loops in PHP
$a = 10;
    // while ($a<=10);{
        while ($a <= 10) {
            echo "<br>";
            echo "The value of a is";
            echo $a++;
        }
    // echo "The value of a is";
    // echo $a++;
// }
   


    ?>


    </div>

    
</body>
</html>