<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enabm";

$conn = new mysqli($servername,$username, $password,$dbname);
if ($conn->connect_error)
{
    die("Csatlakozási hiba" . $conn->connect_error);
}
else{
    echo "Csatlakozás sikeres";
}

$sql= "DROP TABLE IF EXIST emberek";

if($conn -> query($sql)===true)
{
    echo "Sikeres táblatörlés";
}
else{
    echo "Nem sikerülta tábla törlés";
}

$sql ="CREATE TABLE IF NOT EXISTS emberek(
id int unsigned AUTO_INCREMENT PRIMARY KEY,
vezeteknev varchar(30) not null,
keresztnev varchar(30) not null,
beosztas varchar(50)not null,
regiszt_datum timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
";
if($conn -> query($sql)===true)
{
    echo "Sikeres tábla létrehozás";
}
else{
    echo "Nem sikerülta tábla létrehozás";
}

$conn ->close();