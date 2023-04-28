<!DOCTYPE html>

<html>
    <head>
        <title>TestPhPPage</title>
        <link rel="stylesheet" href="main.css">
            <body>
                <header>php testfile</header>
                <h1>Family Relations</h1>
                <?php
               define("Family", "My Family"); // a named constant

               $name1 = "will"; // Define a string variable called name1
               $age1 = "25"; // Define an integer variable called age1
               $likesMusic1 = false; // Define a boolean variable called $likesMusic1

               $name2 = "chuk"; // Define a string variable called name2
               $age2 = "13"; // Define an integer variable called age2
               $likesMusic2 = true; // Define a boolean variable called $likesMusic2

               $name3 = "renzo"; // Define a string variable called name3
               $age3 = "10"; // Define an integer variable called age3
               $likesMusic3 = true; // Define a boolean variable called $likesMusic3

               $name4 = "lily"; // Define a string variable called name3
               $age4 = "8"; // Define an integer variable called age3
               $likesMusic4 = false; // Define a boolean variable called $likesMusic3

               $name5 = "egypt"; // Define a string variable called name3
               $age5 = "1"; // Define an integer variable called age3
               $likesMusic5 = false; // Define a boolean variable called $likesMusic3

               $people = array(
                array("name" => "will", "age" => 25, "likesMusic" => false),
                array("name" => "chuk", "age" => 13, "likesMusic" => true),
                array("name" => "renzo", "age" => 10, "likesMusic" => true),
                array("name" => "lily", "age" => 8, "likesMusic" => false),
                array("name" => "egypt", "age" => 1, "likesMusic" => false)
              );

              for ($i = 0; $i < count($people); $i++) {
                echo "Person " . ($i+1) . ": My name is " . $people[$i]["name"] . ", I am " . $people[$i]["age"] . " years old ";
                
                if ($people[$i]["likesMusic"]) {
                    echo "I do like music!";
                } else {
                    echo "I don't like music.";
                }
                
                echo "<br>";
                
                function printPersonInfo($person) {
                    echo "My name is " . $person["name"] . ", I am " . $person["age"] . " years old";
    
                    if ($person["likesMusic"]) {
                        echo " and I like music!<br>";
                    } else {
                        echo " and I don't like music.<br>";
                    }
                }
    
                for ($i = 0; $i < count($people); $i++) {
                    echo "Person " . ($i + 1) . ": ";
                    printPersonInfo($people[$i]);
                }
            }
            
            echo Family; // Output the value of the named constant to the browser
               
               echo "Person 1: My name is " . $name1 . ", I am " . $age1 . " years old" ; // Output the result to the browser

               if ($likesMusic1) { // Use a conditional statement to check if likesMusic1 is false
                   echo " I don't like music!"; // Output the result to the browser
               } else {
                   echo " I do like music."; // Output the result to the browser
               }
               
               echo "<br>"; // Add a line break for formatting
               
               echo "Person 2: My name is " . $name2 . ", I am " . $age2 . " years old " ; // Output the result to the browser
               
               if ($likesMusic2) { // Use a conditional statement to check if likesMusic2 is true
                   echo " I do like music!"; // Output the result to the browser
               } else {
                   echo " I don't like music."; // Output the result to the browser
               }

                   echo "<br>"; // Add a line break for formatting
               
               echo "Person 3: My name is " . $name3 . ", I am " . $age3 . " years old " ; // Output the result to the browser
               
               if ($likesMusic3) { // Use a conditional statement to check if likesMusic3 is true
                   echo " I do like music!"; // Output the result to the browser
               } else {
                   echo " I don't like music."; // Output the result to the browser
                   echo Family; // Output the value of the named constant to the browser
               }
               echo "Person 4: My name is " . $name4 . ", I am " . $age4 . " years old" ; // Output the result to the browser

               if ($likesMusic4) { // Use a conditional statement to check if likesMusic1 is false
                   echo " I don't like music!"; // Output the result to the browser
               } else {
                   echo " I do like music."; // Output the result to the browser
               }
               
               echo "<br>"; // Add a line break for formatting

               echo "Person 5: My name is " . $name5 . ", I am " . $age5 . " years old" ; // Output the result to the browser

               if ($likesMusic5) { // Use a conditional statement to check if likesMusic1 is false
                   echo " I don't like music!"; // Output the result to the browser
               } else {
                   echo " I do like music."; // Output the result to the browser
               }
               ?>
            </body>
    </head>
</html>