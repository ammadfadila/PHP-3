<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf</title>
</head>
<body>
    <?php
        
        function ubah_huruf($str)
        {
           $abjad = "abcdefghijklmnopqrstuvwxyz";
            $output = "";
            for ($i = 0; $i < strlen($str); $i++){
                $position = strrpos($abjad, $str[$i]);
                $output .= substr($abjad, $position+1,1);
            }
            return $output;
        }
    
        echo ubah_huruf("wow") ."<br>" ;
        echo ubah_huruf("developer") ."<br>" ;
        echo ubah_huruf("laravel") ."<br>" ;
        echo ubah_huruf("keren") ."<br>" ;
        echo ubah_huruf("semangat") ."<br>" ;
    ?>
    

    
</body>
</html>