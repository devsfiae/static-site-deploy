<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta property="og:title" content="Bar/Restaurant La Mediterranea">
<meta property="og:description" content="Cocktails">
<meta property="og:image" content="http://la-mediterranea.eu/img/cocktails.png">
<meta property="og:url" content="http://la-mediterranea.eu/cocktails.php">
<meta property="og:type" content="website">
<html>
<head>
<style>
* {
    box-sizing: border-box;
}
html {
    color: silver;
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
.middelcolumn h2 {
    text-align: center;
}
.middelcolumn p {
    text-align: left;
}
.footer {
    background-color: black;
    color: silver;
    height: 10vh;
    padding: 10px;
    text-align: center;
}
</style>
</head>
<body>
<div class="header">
    <h1>Drinks @La Mediterranea</h1>
</div>

<div class="row">
    <div class="leftcolumn">
        <hr />
        <h2>Navigation</h2>
    <ul>
        <li><a href="index.html">Start</a></li>
        <li><a href="reserve.html">Reservierung</a></li>
        <li><a href="card.php">Speisekarte</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="team.html">Unser Team</a></li>
    </ul>
    <hr />
    <!-- Add the dropdown field here -->
    <select name="category_dropdown" id="categoryDropdown">
            <option value="" disabled selected>Direkt zu</option>
            <option value="#1">Fruchtig erfrischend</option>
            <option value="#2">Fruchtig/süß</option>
            <option value="#3">Süß/cremig</option>
            <option value="#4">Herb/Trocken</option>
            <option value="#5">Alkoholfrei</option>
            <option value="#6">Heiße Getränke</option>
        </select>
    <h2>Happy Hour</h2>
    <p>
    17:00-19:00 Uhr<br />
    alle Cocktails<br />
    -20%<br /><br />
    <hr />
    <h2>Cocktail des Tages</h2>
    Mojito 💣💣💣💣<br />
    Mit der Frische von Minze<br />
    € 7,50/0,35 l</p>
    <p><img src="img/beach_sunset_cocktail.jpg" alt="La Mediterranea" style="width:150px;height:150px;"></p>
</div>

<div class="middelcolumn">
    <h1>Unsere Cocktails</h1>
    <?php include 'db.php'; ?>
    </div>
</div>

<div class="footer">
<hr />
<p>© 2024 by Hiba, Irina Puya & Heiko</p>
</div>
<script>
    // Eventlistener für Dropdown-Änderungen
    document.getElementById("categoryDropdown").addEventListener("change", function() {
        var selectedValue = this.value;
        if (selectedValue) {
            // Scrollen zur ausgewählten Kategorie
            window.location.href = selectedValue;
        }
    });
</body>
</html>
