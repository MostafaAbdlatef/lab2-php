<?php

// ################################# 1 ################################################
// a- Using nl2br() Function
//      echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
// b- Using Headeer
//      header('Content-type: text/plain');
//      echo "Line 1\nLine 2";
// ################################# 2 ################################################
// a- str_shuffle() Function : Randomly shuffle all characters of a string:
//      echo str_shuffle("Hello World");
// b- wordwrap() Function: Wrap a string into new lines when it reaches a specific length:
//      $string = "An example of a long word is: Supercalifragulistic";
        // echo wordwrap($string,10,"<br>")
// c- strcmp() Function: Compare two strings (case-sensitive):
        // echo strcmp("Hello world!","Hello world!");
        // <p>If this function returns 0, the two strings are equal.</p>
        // ################################# 3 ################################################ 
        // $valArr = [12, 45, 10, 25];
        // $valArr = array(12, 45, 10, 25);
        // $sum = 0;
        // foreach ($valArr as $value) {
        //      $sum += $value;
        //   }
        //   echo "Sum = $sum"."<br>";
        //   echo "Av =" .$sum/2;
        //   echo "<hr>"
                  // ################################# 4 ################################################ 
        //  $age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
        //a- ascending order sort by value
        // asort($age);
        // foreach($age as $x => $x_value) {
        //     echo "Key=" . $x . ", Value=" . $x_value;
        //     echo "<br>";
        //   }
        //b- ascending order sort by Key
        //  ksort($age);
        //  foreach($age as $x => $x_value) {
        //  echo "Key=" . $x . ", Value=" . $x_value;
        //  echo "<br>";
        //   }
        //c- descending order sort by value
        // arsort($age);
        // foreach($age as $x => $x_value) {
        // echo "Key=" . $x . ", Value=" . $x_value;
        // echo "<br>";
        //   }
         //c- descending order sort by key
        //  krsort($age);
        //  foreach($age as $x => $x_value) {
        //  echo "Key=" . $x . ", Value=" . $x_value;
        //  echo "<br>";
        //      }
                      // ################################# 4 ################################################ 
        $students = [
        ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
        ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
        ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
        ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
        ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
    ];



echo"<h1>PHP Q2_2022<h1>";
echo '<table border="1">';
echo '<tr><th>Name</th><th>Email</th><th>Gender</th></tr>';
echo "<tr style ='color:red;'><td>". $students[0]['name'] ."</td><td>" . $students[0]['email'] . "</td><td>" . $students[0]['status'] . "</td></td>";
echo "<tr><td>". $students[1]['name'] ."</td><td>" . $students[1]['email'] . "</td><td>" . $students[1]['status'] . "</td></td>";
echo "<tr><td>". $students[2]['name'] ."</td><td>" . $students[2]['email'] . "</td><td>" . $students[3]['status'] . "</td></td>";
echo "<tr style ='color:red;'><td>". $students[3]['name'] ."</td><td>" . $students[3]['email'] . "</td><td>" . $students[3]['status'] . "</td></td>";
echo "<tr><td>". $students[4]['name'] ."</td><td>" . $students[4]['email'] . "</td><td>" . $students[4]['status'] . "</td></td>";





















?>