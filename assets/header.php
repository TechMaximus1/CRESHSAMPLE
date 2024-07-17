<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="assets/style.css">
    <link rel= "stylesheet" href="indexstyle.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <!-- <img src="assets/images/logoIcon.png" alt="logo" height='50vh'/> -->
            <a href="index.php"><h1> CREST</h1></a>

            <div class="head" id="headLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="newsNevent.php">NEWS & EVENT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </header>

    <banner class="ban">
        <h1>Welcome To CREST</h1>
        <br/>
        <h2>Admission Going On</h2>
        <p>To enroll click on the link below</p>
        <a href="" class="ban-btn">Admission Form</a>
    </banner>

    <!-- -----JavaScript for Toggle Menu------ -->
    <script>

        var headLinks = document.getElementById("headLinks");

        function showMenu(){
            headLinks.style.right = "0";
        }
        function hideMenu(){
            headLinks.style.right = "-200px";
        }
    </script>
    
