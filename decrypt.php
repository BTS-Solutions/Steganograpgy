<?php
include 'source.php';

$des = new DES($key, 'DES-CBC', DES::OUTPUT_BASE64, $iv);

function log2($a) {
    return log10($a) / log10(2);
}

global $tempo1;
global $tempo2;
$final_output = '';
$len_output = '';
function checking($a) {
    if ($a < 160) {
        $ec  = log2(8);
        $res = $a % 8;
    }
    if ($a >= 160) {
        $ec  = log2(16);
        $res = $a % 16;
    }
    
    $rr = sprintf("%0".$ec."d",decbin($res));
    
    return $rr;
}

if (isset($_FILES['file']['name'])) {
    $sent = file_get_contents( $_FILES['file']['tmp_name'] );
}
else {
    $sent = '';
}

$image = imagecreatefromstring($sent);
$width = imagesx($image);
$height = imagesy($image);
global $lennn;
$lennn = 0;

for ($x = 0; $x < $width; $x++)
{
    $y = 0;
    $rgb = imagecolorat($image, $x, $y);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;
    $b = $rgb & 0xFF;
    $tempo2 .= checking($r);
    $tempo2 .= checking($g);
    $tempo2 .= checking($b);
}
for ($i=0; $i < strlen($tempo2); $i+=8) { 
    $len_output .= chr(intval(substr($tempo2, $i, 8),2));
}
if (preg_match('/<#(.*?)#>/', $len_output, $match) == 1) {
        $lennn = intval($match[1]);   
}

for ($y = 1; $y < $height; $y++)
{
    for ($x = 0; $x < $width; $x++)
    {
        $rgb = imagecolorat($image, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        $tempo1 .= checking($r);
        $tempo1 .= checking($g);
        $tempo1 .= checking($b);
        if (strlen($tempo1) > $lennn) {
            break 2;
        }
    }
}

$new_array = substr($tempo1, 0, $lennn);

for ($i=0; $i < strlen($new_array); $i+=8) { 
    $final_output .= chr(intval(substr($new_array, $i, 8),2));
}

$answer = $des->decrypt($final_output);

echo $answer;

?>
