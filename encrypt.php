<?php
include 'source.php';

global $colors,$colorr,$colorrr;
$colors = array();
$colorr = array();
$colorrr = array();

if (isset($_POST['img_attr'])) {
    $sent = dirname(__FILE__) . '/' . $_POST['img_attr'];
}
else {
    $sent = '';
}
if (isset($_POST["encrypted"])) {
    $message = $_POST["encrypted"];  
} else {  
    $message = '';
}

//$image = imagecreatefrompng("input.png");
$image = imagecreatefrompng($sent);
$width = imagesx($image);
$height = imagesy($image);
$sS = $message;
$des = new DES($key, 'DES-CBC', DES::OUTPUT_BASE64, $iv);
$s = $des->encrypt($sS);

$new_string1 = '';
for ($i=0; $i < strlen($s); $i++) { 
    $new_string = sprintf("%08d",decbin(ord($s[$i])));
    $new_string1 = $new_string1.$new_string;
}

for ($y = 0; $y < $height; $y++)
{
    for ($x = 0; $x < $width; $x++)
    {
        $rgb = imagecolorat($image, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        $colors[] = $r;
        $colors[] = $g;
        $colors[] = $b;
    }
}

$secret_len = strlen($new_string1);
$tempo = $secret_len;
$tempoS = "<#".$secret_len."#>";
$new_string2 = '';
for ($i=0; $i < strlen($tempoS); $i++) { 
    $new_string = sprintf("%08d",decbin(ord($tempoS[$i])));
    $new_string2 = $new_string2.$new_string;
}
$secret_len1 = strlen($new_string2);
$tempoSS = $secret_len1;
$t = 160;
$ml = 8;
$mu = 16;
$counterS = 0;
$counter = 0;
global $counter1;
$counter1 = 0;
global $counter2;
$counter2 = 0;

for ($i=0; $i <$tempoSS-$counterS+$i ; $i++) { 
    $counter2++;
    if ($colors[$i] > $t) {
        $ec  = log2($mu);
        $res = $colors[$i] % $mu;
    }
    else {
        $ec  = log2($ml);
        $res = $colors[$i] % $ml;
    }
    $des = bindec(substr($new_string2,$counterS,$ec));
    $counterS = $counterS + $ec;
    $d = abs($res - $des);
    if ($colors[$i] < $t) {
        if ($colors[$i] < $ml/2) {
            $colorrr[$i] = 0 + $des;
        }
        if (($ml/2) <= $colors[$i] && $colors[$i] < ($t-$ml/2)) {
            if ($d > $ml/2) {
                $av = $ml - $d;
                if ($res > $des) {
                    $colorrr[$i] = $colors[$i] + $av;
                }
                else {
                    $colorrr[$i] = $colors[$i] - $av;
                }
            }
            if ($d <= $ml/2) {
                $av = $d;
                if ($res > $des) {
                    $colorrr[$i] = $colors[$i] - $av;
                }
                else {
                    $colorrr[$i] = $colors[$i] + $av;
                }
            }
        }
        if (($t - $ml/2) <= $colors[$i] && $colors[$i] < $t) {
            $colorrr[$i] = $colors[$i] - $res + $des;
        }
    }
    if ($colors[$i] >= $t) {
        if ($colors[$i] > 255 - $mu/2 + 1) {
            $colorrr[$i] = 255 - $mu + 1 + $des;
        }
        if (($t + $mu/2) < $colors[$i] && $colors[$i] <= (255-$mu/2+1)) {
            if ($d > $mu/2) {
                $av = $mu - $d;
                if ($res > $des) {
                    $colorrr[$i] = $colors[$i] + $av;
                }
                else {
                    $colorrr[$i] = $colors[$i] - $av;
                }
            }
            if ($d <= $mu/2) {
                $av = $d;
                if ($res > $des) {
                    $colorrr[$i] = $colors[$i] - $av;
                }
                else {
                    $colorrr[$i] = $colors[$i] + $av;
                }
            }
        }
        if ($t <= $colors[$i] && $colors[$i] <= ($t+$mu/2)) {
            $colorrr[$i] = $colors[$i] - $res + $des;
        }
    }
}

for ($i=0; $i < $counter2; $i++) { 
    $colors[$i] = $colorrr[$i];
}

$tet = $width*3;
for ($i=$tet; $i < $tet+$tempo-$counter+$i ; $i++) { 
    $counter1++;
    if ($colors[$i] > $t) {
        $ec  = log2($mu);
        $res = $colors[$i] % $mu;
    }
    else {
        $ec  = log2($ml);
        $res = $colors[$i] % $ml;
    }
    $des = bindec(substr($new_string1,$counter,$ec));
    $counter = $counter + $ec;
    $d = abs($res - $des);
    if ($colors[$i] < $t) {
        if ($colors[$i] < $ml/2) {
            $colorr[$i] = 0 + $des;
        }
        if (($ml/2) <= $colors[$i] && $colors[$i] < ($t-$ml/2)) {
            if ($d > $ml/2) {
                $av = $ml - $d;
                if ($res > $des) {
                    $colorr[$i] = $colors[$i] + $av;
                }
                else {
                    $colorr[$i] = $colors[$i] - $av;
                }
            }
            if ($d <= $ml/2) {
                $av = $d;
                if ($res > $des) {
                    $colorr[$i] = $colors[$i] - $av;
                }
                else {
                    $colorr[$i] = $colors[$i] + $av;
                }
            }
        }
        if (($t - $ml/2) <= $colors[$i] && $colors[$i] < $t) {
            $colorr[$i] = $colors[$i] - $res + $des;
        }
    }
    if ($colors[$i] >= $t) {
        if ($colors[$i] > 255 - $mu/2 + 1) {
            $colorr[$i] = 255 - $mu + 1 + $des;
        }
        if (($t + $mu/2) < $colors[$i] && $colors[$i] <= (255-$mu/2+1)) {
            if ($d > $mu/2) {
                $av = $mu - $d;
                if ($res > $des) {
                    $colorr[$i] = $colors[$i] + $av;
                }
                else {
                    $colorr[$i] = $colors[$i] - $av;
                }
            }
            if ($d <= $mu/2) {
                $av = $d;
                if ($res > $des) {
                    $colorr[$i] = $colors[$i] - $av;
                }
                else {
                    $colorr[$i] = $colors[$i] + $av;
                }
            }
        }
        if ($t <= $colors[$i] && $colors[$i] <= ($t+$mu/2)) {
            $colorr[$i] = $colors[$i] - $res + $des;
        }
    }
}
function log2($a) {
    return log10($a) / log10(2);
}

foreach ($colorr as $values) {
    $colors[$tet] = $values;
    $tet++;
}
$gd = imagecreatetruecolor($width, $height);
$w = 0;

for ($y = 0; $y < $height; $y++)
{
    for ($x = 0; $x < $width; $x++)
    {
        $thecolor = imagecolorallocate($gd, $colors[$w], $colors[$w+1], $colors[$w+2]);
        imagesetpixel($gd, $x, $y, $thecolor);
        $w = $w + 3;
    }
}
$resp = imagepng($gd, dirname(__FILE__).'/assets/en_img/encrypted'.time().'.png');
if ($resp) {
    imagedestroy($gd);
    echo "Message encryption successful!";
}
?>