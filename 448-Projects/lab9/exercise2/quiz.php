<?php
    $percent = 0;
    $q1 = $_POST["question1"]; // 100
    $q2 = $_POST["question2"]; // 250
    $q3 = $_POST["question3"]; // 0
    $q4 = $_POST["question4"]; // 25
    $q5 = $_POST["question5"]; // 1
    $percent += ($q1 == 100) * 20;
    $percent += ($q2 == 250) * 20;
    $percent += ($q3 == 0) * 20;
    $percent += ($q4 == 25) * 20;
    $percent += ($q5 == 1) * 20;
    echo "<h1>QUIZ Results:</h1>";
    // question 1
    echo "<h2>Question 1: What is 10 * 10?</h2>";
    echo "Your Answer: $q1<br />";
    echo "Correct Answer: 100<br />";
    // question 2
    echo "<h2>Question 2: What is 50 * 5?</h2>";
    echo "Your Answer: $q2<br />";
    echo "Correct Answer: 250<br />";
    // question 3
    echo "<h2>Question 3: What is 0 * 0?</h2>";
    echo "Your Answer: $q3<br />";
    echo "Correct Answer: 0<br />";
    // question 4
    echo "<h2>Question 4: What is 5 * 5?</h2>";
    echo "Your Answer: $q4<br />";
    echo "Correct Answer: 25<br />";
    // question 5
    echo "<h2>Question 5: What is -1 * -1?</h2>";
    echo "Your Answer: $q5<br />";
    echo "Correct Answer: 1<br />";
    // total correct
    echo "<h1>Summary</h1>";
    $totalCorrect = $percent / 20;
    echo "<h2>Total Correct: $totalCorrect";
    echo "<h2>Percent Score: $percent%";
?>