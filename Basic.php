<!Doctype html>
    <html lang="english">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width", initial-scale=1.0">
            <title>Tutorial</title>

        </head>
        <body>
            <div class="container">
                This is my first php website
                <?php

                echo"Hello Tejas";

                //secret website
                /*

                multiline code
                

                */
              $varible1 = 5;
              $varible2 = 5;
              echo"$varible1";
              echo"$varible2";
              echo $varible1+$varible2;

            //   Arithmetic operator

            echo"<br>";
            echo "The value of varible1 + varible 2 is";
            echo"<br>";
            echo $varible1+$varible2;

            echo "<br>";
            echo" The value of varible1 - varible 2 is";
            echo "<br>";
            echo $varible1 - $varible2;
            echo "<br>";
            echo " The value of varible 1 * Value of varible 2 is";
            echo "<br>";
            echo $varible1 * $varible2;
            echo "<br>";
            echo " The value of varible 1 / value of varible 2 is";
            echo "<br>";
            echo $varible1 / $varible2;

            // Assignment operator
            echo"<br>";
            $newvar = $varible1;
            // $newvar +=3;
            // $newvar -=3;
            $newvar *=3; 
            echo"<br>";
            echo "The value of new varible is";
            echo $newvar;
            echo"<br>";
            
            // Comparison OPerators

            echo " <h1> Hello Tejas </h1>";

            echo "The value of 4==1";
            echo var_dump(4==1);
            echo "<br>";
            
            echo "The value of 4!=1";
            echo var_dump(4!=1);
            echo "<br>";
            
            echo "The value of 4<=1";
            echo var_dump(4<=1);
            echo "<br>";
            
            echo "The value of 4>=1";
            echo var_dump(4>=1);
            echo "<br>";

           
            //increment Decrement operator

            $varible1++;
            $varible1--;
            
            // Logical Operator
            echo "<br>";
            $myvar = (true and true);
            
            echo var_dump($myvar);

            echo "<br>";
            $myvar = (false) and (true);
            echo var_dump($myvar);


            echo "<br>";
            $myvar = (false or true);
            echo var_dump($myvar);

            echo"<br>";
            $myvar = (false xor false);
            echo var_dump($myvar);
                ?>

                <?php
                define('pi', 3.14);

                // 1 string
                // 2 Integer
                // 3 Float 
                // 4 Boolean
                // 5 Array 
                // 6 Object


                echo "<br><h1>Data Types</h1><br>";

                $myvar =" Hello My Name Is Tejas";
                echo var_dump($myvar);
                 
                echo "<br>";
                $myvar1 = 67;
                echo var_dump($myvar1);

                echo "<br>";
                $myvar2 = 67.1;
                echo var_dump($myvar2);
                
                echo "<br>";
                $myvar3 =true;
                echo var_dump($myvar3);

                echo pi;

                




                  ?>
            </div>
        </body>
    </html>
</!Doctype>