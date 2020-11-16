<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    function checkAnswers()
    {
        $q1Answer = $_POST["q1"];
        $q2Answer = $_POST["q2"];
        $q3Answer = $_POST["q3"];
        $q4Answer = $_POST["q4"];
        $q5Answer = $_POST["q5"];

        echo "Question 1: Who won the league in 2019-2020 season?" . "<br>";
        echo "    You answered: " . $q1Answer . "<br>";
        echo "    Correct answer: " . "Liverpool" . "<br><br>";

        echo "Question 2: Which team holds the record for the most tittle wins?" . "<br>";
        echo "    You answered: " . $q2Answer . "<br>";
        echo "    Correct answer: " . "Manchester United" . "<br><br>";

        echo "Question 3: Who was the last player to win the Golden Boot at a World Cup while on a English club team?" . "<br>";
        echo "    You answered: " . $q3Answer . "<br>";
        echo "    Correct answer: " . " Harry Kane" . "<br><br>";

        echo "Who among the following teams have won the Premier League?" . "<br>";
        echo "    You answered: " . $q4Answer . "<br>";
        echo "    Correct answer: " . "Blackburn Rover" . "<br><br>";

        echo "  Question 5: What player scored in both a Machester Derby, and a Liverpool Derby, in the same calendar year?" . "<br>";
        echo "    You answered: " . $q5Answer . "<br>";
        echo "    Correct answer: " . "Nicolas Anelka" . "<br><br>";

    }

    function computeGrade()
    {
        $q1Answer = $_POST["q1"];
        $q2Answer = $_POST["q2"];
        $q3Answer = $_POST["q3"];
        $q4Answer = $_POST["q4"];
        $q5Answer = $_POST["q5"];

        $percentCorrect = 0;
        $questionsAnsweredCorrectly = 0;

        if($q1Answer == "Liverpool")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20;
        }

        if($q2Answer == "Manchester United")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20;
        }

        if($q3Answer == "Harry Kane")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20;
        }

        if($q4Answer == "Blackburn Rover")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20;
        }

        if($q5Answer == "Nicolas Anelka")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20;
        }

        echo "Quesions Answered Correctly: " . $questionsAnsweredCorrectly . "<br>";
        echo "Percent Correct: " . $percentCorrect . "%" . "<br>";
    }

    checkAnswers();
    computeGrade();


?>
