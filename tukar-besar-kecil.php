<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Besar Kecil</title>
</head>
<body>
    <?php
        function tukar_besar_kecil($string)
        {
            $output = "";
            for ($i = 0; $i < strlen($string); $i++){
                if (ctype_lower($string[$i])){
                    $output .= strtoupper($string[$i]);
                } else {
                    $output .= strtolower($string[$i]);
                }
            }
            return $output ."<br>";
        }

        echo tukar_besar_kecil("Hello World") ."<br>";
        echo tukar_besar_kecil("I aM aLAY") ."<br>";
        echo tukar_besar_kecil("My Name is Bond!!") ."<br>";
        echo tukar_besar_kecil("IT sHOULD bE me") ."<br>";
        echo tukar_besar_kecil("001-A-3-5TrdYW") ."<br>";
    ?>
    
</body>
</html>