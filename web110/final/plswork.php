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
</head>
<body>
    <div class="wrapper">
        <header>
            <h1> WEB 110 Final- DHTML </h1>
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