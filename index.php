<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 5/8/2018
 * Time: 13:45
 */

require_once "Users.php";
$Users = new Users();
echo "<table>"; // start a table tag in the HTML

foreach($Users->GetCursists() as $key => $value){   //Creates a loop to loop through results
    echo"<tr>";
    foreach($value as $key2 => $value2){
        echo "<td>$key2</td> ";
        echo "<td>$value2</td>";
    }
    echo"</tr>";
}

echo "</table>"; //Close the table in HTML