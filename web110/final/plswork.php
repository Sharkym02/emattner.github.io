<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB 110 DHTML</title>
    <meta charset="utf-8">
    <!--
        Web 110 Final
        Eric Mattner
        12/11/23
    -->
<link rel="stylesheet" type="text/css" href="final.css">
<style>
html {
    background-color: tan;
}
.wrapper {
    background-color: tan;
}
header {
    border: thin solid grey;
}
h1 {
    font-size: 30px;
    color: black;
    background-color: grey;
    padding:15px
}
nav {
    display: flex;
    background-color: darkgrey;
}
nav>div {
    padding: 10px;
    margin-right: 0px;
    margin-left: 100px;
}
nav>div>a {
    color:black;
    text-decoration: none;
}
.inputField {
    border: thin solid grey;
    font-size: 20px;
    margin: 10px;
    padding: 30px;
    color: black;
    background-color: peachpuff;
}
.explainField {
    border: thin solid grey;
    font-size: 20px;
    margin: 10px;
    padding: 30px;
    color: black;
    background-color: peachpuff;
}
.explainField > h2 {
    font-size: 30px;
    color: black;
    background-color: peachpuff;
}
.outputField {
    border: thin solid grey;
    margin: 10px;
    padding: 30px;
    color: black;
    background-color: peachpuff;
}
.functionField {
    border: thin solid grey;
    font-size: 20px;
    margin: 10px;
    padding: 30px;
    color: black;
    background-color: peachpuff;
}
.functionField > h2 {
    font-size: 30px;
    color: black;
    background-color: peachpuff;
}
</style>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1> WEB 110 Final- Video </h1>
            <nav>
                <div> <a href="audio.html"> Audio </a></div>
                <div> <a href="video.html"> Video </a></div>
                <div> <a href="DHTML.html"> DHTML </a></div>
            </nav>
        </header>
        <br>
        <div class="explainField">
            <h2>
                Interactive DHTML
            </h2>
            <br>
            <p>
                HTML webpages will often have forms, or javascript code that interacts with the user and/or their computer. 
            </p>
        </div>
        <div class="functionField">
            <h2>Form</h2>
            <br>
            <p>
                This form takes in your inputs and reads it back to you
            </p>
            <br>
            <div>
                <h2>Submitted Values</h2>
                <?php
                    $one = $_POST["1"];
                    $two = $_POST["2"];
                    $three = $_POST["3"];
                    echo "Your 3 inputs were $one, $two, and $three";
                ?> 
            </div>
        </div>
        <div class="functionField">
            <h2>JavaScript</h2>
            <p>
                This Function displays the current date and time based on your computer
            </p>
            <br>
                <p><span id="time">XXXX</span></p>
        </div>
    </div>
<script>
    function setTime() {
        const d = new Date();
        document.getElementById('time').innerHTML = d.toLocaleString();
    }
    setInterval(setTime, 1000)
</script>
</body>
</html>