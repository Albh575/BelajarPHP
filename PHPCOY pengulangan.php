<form method="post">
angka pertama : <input type="Text" name="angka1"> 
angka kedua : <input type="Text" name="angka2">
    <input type="submit">
</form>

<?php
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    if ($angka2 < $angka1){
        echo "Angka 2 harus lebih besar";
        }
    
    else {
            for($i = 1;$i<=$angka2;$i++){
            $hasil = $angka1 + $i;
            echo "$angka1 +$i = $hasil <br/>";
            }
}

 ?> 
