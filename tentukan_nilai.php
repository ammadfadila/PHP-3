<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai</title>
</head>
<body>
        <?php
            function nilai_lebih_besar($int)
            {
                $output = "";
                if ($int >= 85 && $int <= 100){
                    $output .= "Sangat Baik";
                } else if ($int >= 70 && $int < 85){
                    $output .= "Baik";
                } else if ($int >= 60 && $int < 70){
                    $output .= "Cukup";
                }  
                else{
                    $output .= "Kurang";
                }
                return $output;
            }
        
        echo nilai_lebih_besar(98) ."<br>";
        echo nilai_lebih_besar(76) ."<br>";
        echo nilai_lebih_besar(67) ."<br>";
        echo nilai_lebih_besar(43) ."<br>";
        ?>
</body>
</html>