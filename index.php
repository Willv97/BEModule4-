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
    define('Family', 'My Family'); // Named constant

    $people = array();

    // Function to add a person to the array
    function addPerson($name, $age, $likesMusic, $favoriteArtist) {
        global $people;
        $person = array(
            "name" => $name, // string variable
            "age" => $age,
            "likesMusic" => $likesMusic,
            "favoriteArtist" => $favoriteArtist // string variable
        );
        $people[] = $person;
    }

    // Add people to the array based on user input
    addPerson("will", 25, false, "");
    addPerson("chuk", 13, true, "");
    addPerson("renzo", 10, true, "");
    addPerson("lily", 8, false, "");
    addPerson("egypt", 1, false, "");

    define('familymembers', count($people)); // Named constant

    // For loop that displays the favorite artist for each person
    foreach ($people as $person) {
        if (empty($person["favoriteArtist"])) {
            echo "No favorite artist specified for " . $person["name"] . ".<br>";
        } else {
            echo "The favorite artist of " . $person["name"] . " is: " . $person["favoriteArtist"] . "<br>";
        }
    }

    // Process the form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve favorite artists from the form
        $favoriteArtists = $_POST["favoriteArtists"];

        // Update the favorite artists for each person
        for ($i = 0; $i < count($people); $i++) {
            $people[$i]["favoriteArtist"] = $favoriteArtists[$i];
        }

        // Display the favorite artists entered by the user
        foreach ($people as $person) {
            echo "Favorite artist for " . $person["name"] . ": " . $person["favoriteArtist"] . "<br>";
        }
    }
    ?>

    <!-- HTML form to enter favorite artists -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <?php foreach ($people as $person): ?>
            <label for="<?php echo $person["name"]; ?>">Favorite artist for <?php echo $person["name"]; ?>:</label>
            <input type="text" name="favoriteArtists[]" id="<?php echo $person["name"]; ?>"><br>
        <?php endforeach; ?>
        <input type="submit" value="Submit">
    </form>

    <?php
    // While loop
    $counter = 1;
    while ($counter <= count($people)) {
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
    foreach ($people as $person) {
        echo "Person: ";
        printPersonInfo($person);
    }
    ?>
</body>
</html>
