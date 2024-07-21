<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>
    <title>Drinks@La Mediterranea</title>
    <style>
* {
    box-sizing: border-box;
}
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}
.header {
    background-color: black;
    color: silver;
    padding: 20px;
    text-align: left;
    height: 10vh;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
.leftcolumn {
    color: silver;   
    width: 20%;
    height: 80%;
    padding: 20px;
    float: left;
}
.leftcolumn ul {
    list-style-type: square;
    margin: 0;
    padding: 0;
}

.middelcolumn {
    color: silver;
    width: 60%;
    height: 80%;
    padding: 20px;
    text-align: left;
    float: left;
    background-image: none;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}
.middelcolumn h1 {
    text-align: center;
}
.middelcolumn p {
    text-align: center;
}
.footer {
    background-color: black;
    color: silver;
    height: 10vh;
    padding: 10px;
    text-align: center;
}
</style>
<body>
<div class="row">
<div class="middlecolumn">
<p>
<?php
    $servername = "localhost";
    $username = "v078803";
    $password = "HibaIrinaPuyaHeiko2024_";
    $dbname = "v078803";

    // Erstellen Sie eine Verbindung
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->query("SET NAMES 'utf8'");

    // Überprüfen Sie die Verbindung
    if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
    }
    for ($categoryId = 1; $categoryId <= 6; $categoryId++) {
        $sql = "SELECT cocktails.*, degrees.degree_name, categories.category_name FROM cocktails 
                LEFT JOIN degrees ON cocktails.degree_id = degrees.degree_id
                LEFT JOIN categories ON cocktails.category_id = categories.category_id
                WHERE cocktails.category_id = $categoryId";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Ausgabe des category_name als Überschrift
            $row = $result->fetch_assoc();
            echo "<h2 id='" . $row["category_id"] . "'>" . $row["category_name"]. "</h2><hr>";
    
            // Ausgabe der Daten jeder Zeile
            do {
                echo "<p>#". $row["cocktail_id"]. " " . $row["cocktail_name"]. "<br>";
                echo $row["cocktail_description"]. "<br>";
                echo "€ ". $row["price"]. "/ ". $row["volume"]. "l<br>";
                echo "‰: " . $row["degree_name"]. "</p><br>";
            } while($row = $result->fetch_assoc());
        }
    }
    
    
    
    
    $conn->close();
?>
</p>
</div>
</div>
</body>
