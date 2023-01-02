<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect("localhost","root","","researchquran");
$s = "SELECT * FROM `wordswer`";
$result = $conn->query($s);
while($row = mysqli_fetch_array($result)){
    $word = $row['word'];
    $ayat = $row['ayat_id'];
    $refer = $row['reference'];
$r ="UPDATE `words_x` SET `simple_word`= '".$word."' WHERE `ayat_id`= ".$ayat." AND `reference`= ".$refer;
}
$final = $conn->query($r);
if($final){
    echo 'your data updated Successfully';
}
else{
    echo 'check your query';
}
?> -->



<h1>how to connect with jenkins edit teacher </h1>
