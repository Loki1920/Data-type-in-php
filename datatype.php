<?php
// string datatype
$name = "lucky";
$friend = "rohan";
echo "$name is friend of $friend";
echo "<br>";

// integer datatype
$income = 455;
$debt = 500;
echo "income is :$income and debt is: $debt";
echo "<br>";

//float datatype
$income = 455.55;
$debt = 1000.55;
echo "income is :$income and debt is :$debt<br>";

// bool datatype
$x = true;
$is_friend = false;
echo "x is :" ,var_dump($x),"<br>";
echo "is they friend:" ,var_dump($is_friend),"<br>";

// array
$friends = array("dhruv","himanshu","kshitij","ajay","antush");
echo "friends are:",var_dump($friends),"<br>";
echo $friends[0],"<br>",$friends[1],"<br>",$friends[2],"<br>",$friends[3],"<br>",$friends[4],"<br>";

// NULL
$name = NULL;
echo var_dump($name);

?>