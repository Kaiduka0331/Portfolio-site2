<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$counter_file = 'counter.txt';
$counter_lenght = 8;

$fp = fopen($counter_file, 'r+');

if ($fp){
    if (flock($fp, LOCK_EX)){

        $counter = fgets($fp, $counter_lenght);
        $counter++;

        rewind($fp);

        if (fwrite($fp,  $counter) === FALSE){
            print('ファイル書き込みに失敗しました');
        }

        flock($fp, LOCK_UN);
    }
}

fclose($fp);

$format = '%0'.$counter_lenght.'d';
$new_counter = sprintf($format, $counter);

for ($i = 0 ; $i <= 9 ; $i++){
    $num = (string)$i;
    $img_num = '<img src="./img/b'.$i.'.png">';
    $new_counter = str_replace($num, $img_num, $new_counter);
}

$size = ' width="16" height="18" border="0">';
$new_counter = str_replace('>', $size, $new_counter);

print($new_counter);

?>
</body>
</html>