<!DOCTYPE html>

<!-- Salih Salih, 000795395-->

<?php

    $msgs = ["Our tax dollars at work — ain’t it grand?",
    "My fortune cookie is encouraging bad behavior.",
    "Error: Fortune Not Found.",
    "That’s kind of dark, don’t you think?",
    "Dang, fortune cookie. Dang.",
    "Snowflakes gonna snowflake.",
    "Yup, that about sums it up.",
    "Does this cookie know something we don’t?",
    "I guess I shouldn’t have taken the extra fortune cookie from the “empty” table…",
    "Fortune cookie fortunes my husband and I got.",
    "Hardy har-har-har! Everyone’s a comedian.",
    "My dog always gets the 3rd fortune cookie from PF Chang’s. This was her’s tonight",
    "We apologise again for the fault in the subtitles…",
    "OUCH! Come on now, cookie!",
    "This is diet advice I can get behind.",
    "You heard the cookie… let’s get out of here!",
    "This is an emphatic “no” from me, but thanks anyway.",
    "Is that a threat?",
    "Um… okay?",
    "If you say so.",
    "Another knee-slapper from the folks at the cookie factory.",
    "Most ironic fortune ever.",
    "My fortune cookie knows I’ve reached my full potential.",
    "That simply can’t be right!",
    "I got two fortunes in my fortune cookie. Should I be worried?",
    "It may be true, but that’s a pretty confusing way to put it.",
    "I don’t like the fortune cookie my wife got for our anniversary.",
    "I just ate way too much Chinese food. Could that be it?",
    "Probably the strangest fortune cookie I’ve ever seen.",
    "It may not be a real fortune, but it’s still good advice.",
    "The fortune you seek is in another cookie.",
    "A closed mouth gathers no feet.",
    "A conclusion is simply the place where you got tired of thinking.",
    "A cynic is only a frustrated optimist.",
    "A foolish man listens to his heart. A wise man listens to cookies.",
    "You will die alone and poorly dressed.",
    "A fanatic is one who can't change his mind, and won't change the subject.",
    "If you look back, you'll soon be going that way.",
    "You will live long enough to open many fortune cookies.",
    "An alien of some sort will be appearing to you shortly.",
    "Do not mistake temptation for opportunity.",
    "Flattery will go far tonight.",
    "He who laughs at himself never runs out of things to laugh at.",
    "He who laughs last is laughing at you.",
    "He who throws dirt is losing ground.",
    "Some men dream of fortunes, others dream of cookies.",
    "The greatest danger could be your stupidity.",
    "We don't know the future, but here's a cookie.",
    "The world may be your oyster, but it doesn't mean you'll get its pearl.",
    "You will be hungry again in one hour.",
    "The road to riches is paved with homework."];

    $name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);

    $number = filter_input(INPUT_GET, "number", FILTER_VALIDATE_INT);

    $color = filter_input(INPUT_GET, "color");

    $min = filter_input(INPUT_GET, "min", FILTER_VALIDATE_INT);

    $max = filter_input(INPUT_GET, "max", FILTER_VALIDATE_INT);

?>

<html>

    <head>
        <title>Fortune Cookies</title>

        <meta charset="UTF-8">
        
        <style>

            * {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align: center;
                background-color: plum;
                color: indigo;
                padding: 0px 25px 25px 25px;
            }



            .cookies {
                border-radius: 25px;
                background-color: <?=$color?>;
                border-style: solid;
                color: <?=$color?>;
                
            }

            .cookies:hover {
                background-color: pink;
            }


        </style>

    </head>

    <body>
        <h1>Hi <?=$name?>, enjoy your cookies!</h1>

        <section>
    
            <?php 
                for($i = 0 ; $i < $number; $i++) 
                {
                    echo '<div class="cookies">';
                    echo "<br>";

                    echo $msgs[rand(0,count($msgs)-1)] . "<br>";
                    for ($j = 0; $j < 7; $j++) { echo rand($min, $max) . " "; }
                
                    echo "</div>";
                    echo "<br>";
                }
            ?>
    
        </section>

    </body>


</html>
