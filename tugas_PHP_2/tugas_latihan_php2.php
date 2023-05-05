<?php
echo "Soal Nomor 1 <br>";

// soal 1 fungsi untuk mencetak masing-masing pattern 

// Triangle Upside Left
echo "Triangle Upside Left <br>";
function triangleUpsideLeft(){
    for ($i=1; $i <= 5 ; $i++) { 
        for($j=1; $j<=$i;$j++){
            echo "* ";
        }
        echo "<br>";
    }
}
triangleUpsideLeft();
echo "<br>";

// Triangle upside Right
echo "Triangle Upside Right <br>";
function triangleUpsideRight(){
    for($i = 0; $i <= 5; $i++) {
        for($j = 1; $j <= 5 - $i; $j++) {
            echo " &nbsp&nbsp";
        }
        for($j = 1; $j <= $i; $j++) {
            echo " *";
        }
        echo "<br>";
    }
}
triangleUpsideRight();
echo "<br>";

// Triangle Downside Left
echo "Triangle Downside Left <br>";
function triangleDownsideLeft(){
    for ($i=5; $i>=1 ; $i--) { 
        for ($j=1; $j <= $i ; $j++) { 
            echo "* ";
        }
        echo "<br>";
    }
}
triangleDownsideLeft();
echo "<br>";

// Triangle Downside Right
echo "Triangle Downside Right <br>";
function triangleDownsideRight(){
    for($i = 5; $i >= 0; $i--) {
        for($j = 5; $j >= 0 + $i; $j--) {
            echo " &nbsp&nbsp";
        }
        for($j = 1; $j <= $i; $j++) {
            echo " *";
        }
        echo "<br>";
    }
}

triangleDownsideRight();

echo "Soal Nomor 2 <br>";
echo " conditional statement agar dapat memilih pattern yang ingin di cetak  berdasarkan nama fungsi yang dikirimkan lewat argument<br>";
// echo "<br>";
function memilihPattern($pilih){
    if($pilih == "triangleUpsideLeft"){
        echo "Pilihan : triangleUpsideLeft <br>";
        triangleUpsideLeft();
    }
    if($pilih == "triangleUpsideRight"){
        echo "Pilihan : triangle Upside Right<br>";
        triangleUpsideRight();
    }
    if($pilih == "triangleDownsideLeft"){
        echo "Pilihan : triangle Downside Left<br>";
        triangleDownsideLeft();
    }
    if($pilih == "triangleDownsideRight"){
        echo "Pilihan : triangle Downside Right<br>";
        triangleDownsideRight();
    }
}
memilihPattern("triangleUpsideLeft");
echo "<br>";
memilihPattern("triangleUpsideRight");
echo "<br>";
memilihPattern("triangleDownsideLeft");
echo "<br>";
memilihPattern("triangleDownsideRight");
echo "<br>";


echo "Soal no 3";
echo "<br>";

function soalNomorTiga(string $pattern, int $row = 5, string $symbol){
    if($pattern == "triangleUpsideLeft"){
        echo "Pilihan : triangleUpsideLeft <br>";
        for ($i=1; $i <= $row ; $i++) { 
            for($j=1; $j<=$i;$j++){
                echo "$symbol ";
            }
            echo "<br>";
        }
    }
    if($pattern == "triangleUpsideRight"){
        echo "Pilihan : triangle Upside Right<br>";
        for($i = 0; $i <= $row; $i++) {
            for($j = 1; $j <= $row - $i; $j++) {
                echo " &nbsp&nbsp";
            }
            for($j = 1; $j <= $i; $j++) {
                echo " $symbol";
            }
            echo "<br>";
        }
    }
    if($pattern == "triangleDownsideLeft"){
        echo "Pilihan : triangle Downside Left<br>";
        for ($i=$row; $i>=1 ; $i--) { 
            for ($j=1; $j <= $i ; $j++) { 
                echo "$symbol ";
            }
            echo "<br>";
        }
    }
    if($pattern == "triangleDownsideRight"){
        echo "Pilihan : triangle Downside Right<br>";
        for($i = $row; $i >= 0; $i--) {
            for($j = $row; $j >= 0 + $i; $j--) {
                echo " &nbsp&nbsp";
            }
            for($j = 1; $j <= $i; $j++) {
                echo " $symbol";
            }
            echo "<br>";
        }
    }
}
soalNomorTiga("triangleUpsideLeft", 5, "$");
echo "<br>";
soalNomorTiga("triangleUpsideRight", 10, "#");
echo "<br>";
soalNomorTiga("triangleDownsideLeft", 10, "@");
echo "<br>";
soalNomorTiga("triangleDownsideRight", 7, "*");
echo "<br>";

?>