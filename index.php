<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Tick-e : Ticket Booking Made Easy</title>
</head>
<body>
    <div class="navBar">
        <img src="img/logo.svg" class="logo">

        <a href="PHP HERE" class="navItem"><h2>Concerts</h2></a>
        <a href="PHP HERE" class="navItem"><h2>Events</h2></a>
        <a href="PHP HERE" class="navItem"><h2>Festivals</h2></a>

        <span class="searchBar"><i class="fas fa-search"></i> Search Events</span>

        <button class="loginButton">login</button>
    </div>
    <div class="mainCont">

    <div class="mainBanner">
        <h2>Find <i>your</i> event</h2>
        <h4>Search by event type and location now</h4>
    </div>

    <div class="eventsNear">
        <div class="eventsNearTitle"><i class="fas fa-map-marker-alt"></i> Events near, <span>Manchester</span></div>
        <?php
        $location = "Manchester";
            db();
            global $link;
            $query = "SELECT * FROM events limit 4";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $month = $row['month'];
                    $day = $row['day'];
                    $time = $row['time'];
                    $img = $row['img'];

        ?>
        <div class="eventsNearItem">
            <img src="<?php echo $img;?>">
            <div class="eventsNearDate">
                <div class="dateBold"><?php echo $month;?></div>
                <div class="dateThin"><?php echo $day;?></div>
                <div class="dateThin"><?php echo $time;?></div>
            </div>
            <div class="eventsNearMore">
                <center><span class="eventsNearName"><?php echo $name;?></span></center>
                <center><a href="PHP HERE"><button class="moreInfo">More Info <i class="fas fa-chevron-right"></i></button></a></center>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>

    <div class="topConcerts">
        <h1>Top Concerts<hr></h1>
    <div class="topConcertsItems">

        <div class="displayItem">
            <img src="img/eventsNear/exDisplay/injuryreserve.jpg"><br>
            <div class="displayText">
                <p class="displayItemDate"><b>OCT</b><br>12<br>19:00</p>
                <span class="displayItemTitle">Injury Reserve</span><br>
                <span class="displayItemLocation">Manchester O2 Arena, Manchester</span><br>
                <span class="displayItemLink"><a href="SOME MORE PHP">Book Now</a></span>
            </div>
        </div>

        <div class="displayItem">
            <img src="img/eventsNear/exDisplay/injuryreserve.jpg"><br>
            <div class="displayText">
                <p class="displayItemDate"><b>OCT</b><br>12<br>19:00</p>
                <span class="displayItemTitle">Injury Reserve</span><br>
                <span class="displayItemLocation">Manchester O2 Arena, Manchester</span><br>
                <span class="displayItemLink"><a href="SOME MORE PHP">Book Now</a></span>
            </div>
        </div>

    </div>
    </div>

    </div>
</body>
</html>