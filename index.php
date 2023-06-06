<!DOCTYPE html>
<html>
    <head>
        <title>TestPhPPage</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header>Module4-2</header>
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
        
        // Multi-dimensional array
        $people = array(
            array("name" => "will", "age" => 25, "likesMusic" => false),
            array("name" => "chuk", "age" => 13, "likesMusic" => true),
            array("name" => "renzo", "age" => 10, "likesMusic" => true),
            array("name" => "lily", "age" => 8, "likesMusic" => false),
            array("name" => "egypt", "age" => 1, "likesMusic" => false)
        );

        // Iterated and accessed one-dimensional array
        $fruits = array("Apple", "Banana", "Orange");
        for ($i = 0; $i < count($fruits); $i++) {
            echo "Fruit " . ($i + 1) . ": " . $fruits[$i] . "<br>";
        }

        // While loop
        $counter = 1;
        while ($counter <= 5) {
            echo "Counter: " . $counter . "<br>";
            $counter++;
        }

        // Called function
        function printPersonInfo($person) {
            echo "My name is " . $person["name"] . ", I am " . $person["age"] . " years old";

            if ($person["likesMusic"]) {
                echo " and I like music!<br>";
            } else {
                echo " and I don't like music.<br>";
            }
        }

        // Call the function for each person
        for ($i = 0; $i < count($people); $i++) {
            echo "Person " . ($i + 1) . ": ";
            printPersonInfo($people[$i]);
        }

        ?>
    </body>
</html>
