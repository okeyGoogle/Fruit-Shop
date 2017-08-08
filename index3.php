<?php
$fruit=array
(
array("оранжевый сочный апельсин", "спелая сладкая клубника", "желтый кислый лимон", "спелая малина", "вкусный крупный виноград", "красное ароматное яблоко"),
array("апельсин", "клубника", "лимон", "малина", "виноград", "яблоко"),
array("images/o.png", "images/s.png", "images/l.png", "images/w.png", "images/v.png", "images/a.png")
);

//1-1
echo "<img style=\"width: 200px;height: 200px;position: absolute; top: 20px\" src='".$fruit[2][0]."'>";
echo "<br />";
echo "<p style=\"position: absolute;top: 260px;\">".$fruit[0][0]."</p>";
echo "<br />";
echo "<p style=\"position: absolute;top: 220px; left: 70px; color: #ff6600; font-weight: bold; text-decoration: underline;\">".$fruit[1][0]."</p>";

//1-2
echo "<img style=\"width: 200px;height: 200px;position: absolute;top: 20px;left: 243px;\" src='".$fruit[2][1]."'>";
echo "<br />";
echo "<p style=\"position: absolute;left: 230px;top: 260px; \">".$fruit[0][1]."</p>";
echo "<br />";
echo "<p style=\"position: absolute;top: 220px; left: 280px; color: red; font-weight: bold; text-decoration: underline;\">".$fruit[1][1]."</p>";
echo "<br />";

//1-3
echo "<img style=\"width: 200px;height: 200px;position: absolute;top: 20px;left: 455px;\" src='".$fruit[2][2]."'>";
echo "<br />";
echo "<p style=\"position: absolute;top: 260px;left: 466px;\">".$fruit[0][2]."</p>";
echo "<br />";
echo "<p style=\"position: absolute;top: 220px;left: 520px; color: #ffff00; font-weight: bold; text-decoration: underline;\">".$fruit[1][2]."</p>";
echo "<br />";

//2-1
echo "<img style=\"width: 200px;height: 200px; position: absolute;top: 320px;\" src='".$fruit[2][3]."'>";
echo "<br />";
echo "<p style=\"position: absolute;top: 540px; left: 40px\">".$fruit[0][3]."</p>";
echo "<br />";
echo "<p style=\"position: absolute;top: 500px; left: 70px; color: #ff0066; font-weight: bold; text-decoration: underline;\" >".$fruit[1][3]."</p>";
echo "<br />";

//2-2
echo "<img style=\"width: 200px;height: 200px;position: absolute;top: 320px;left: 207px;\" src='".$fruit[2][4]."'>";
echo "<br />";
echo "<p style=\"position: absolute;top: 540px;left: 231px;\">".$fruit[0][4]."</p>";
echo "<br />";
echo "<p style=\"position: absolute;top: 500px;left: 280px; color: #993399; font-weight: bold; text-decoration: underline;\">".$fruit[1][4]."</p>";
echo "<br />";

//2-3
echo "<img style=\"width: 200px;height: 200px;position: absolute;top: 320px;left: 434px;\" src='".$fruit[2][5]."'>";
echo "<br />";
echo "<p style=\"position: absolute;top: 540px;left: 461px;\">".$fruit[0][5]."</p>";
echo "<br />";
echo "<p style=\"position: absolute;top: 500px;left: 520px; color: #800000; font-weight: bold; text-decoration: underline;\">".$fruit[1][5]."</p>";
?>