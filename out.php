<?php
/**
 * DES encryption class implemented by openssl, supports various PHP versions
 * [Source code] - https://www.programmersought.com/article/9653624024/
 */
class DES
{
    /**
           * @var string $method encryption and decryption method, available via openssl_get_cipher_methods()
     */
    protected $method;
 
    /**
           * @var string $key encryption and decryption key
     */
    protected $key;
 
    /**
           * @var string $output output format none, base64, hex
     */
    protected $output;
 
    /**
           * @var string $iv encryption and decryption vector
     */
    protected $iv;
 
    /**
     * @var string $options
     */
    protected $options;
 
         // type of output
    const OUTPUT_NULL = '';
    const OUTPUT_BASE64 = 'base64';
    const OUTPUT_HEX = 'hex';
 
    /**
     * DES constructor.
     * @param string $key
     * @param string $method
           * ECB DES-ECB, DES-EDE3 ($iv is empty when in ECB mode)
     *      CBC DES-CBC、DES-EDE3-CBC、DESX-CBC
     *      CFB DES-CFB8、DES-EDE3-CFB8
     *      CTR
     *      OFB
     *
     * @param string $output
     *      base64、hex
     *
     * @param string $iv
     * @param int $options
     */
    public function __construct($key, $method = 'DES-ECB', $output = '', $iv = '', $options = OPENSSL_RAW_DATA | OPENSSL_NO_PADDING)
    {
        $this->key = $key;
        $this->method = $method;
        $this->output = $output;
        $this->iv = $iv;
        $this->options = $options;
    }
 
    /**
           * Encryption
     *
     * @param $str
     * @return string
     */
    public function encrypt($str)
    {
        $str = $this->pkcsPadding($str, 8);
        $sign = openssl_encrypt($str, $this->method, $this->key, $this->options, $this->iv);
 
        if ($this->output == self::OUTPUT_BASE64) {
            $sign = base64_encode($sign);
        } else if ($this->output == self::OUTPUT_HEX) {
            $sign = bin2hex($sign);
        }
 
        return $sign;
    }
 
    /**
           * Decrypt
     *
     * @param $encrypted
     * @return string
     */
    public function decrypt($encrypted)
    {
        if ($this->output == self::OUTPUT_BASE64) {
            $encrypted = base64_decode($encrypted);
        } else if ($this->output == self::OUTPUT_HEX) {
            $encrypted = hex2bin($encrypted);
        }
 
        $sign = @openssl_decrypt($encrypted, $this->method, $this->key, $this->options, $this->iv);
        $sign = $this->unPkcsPadding($sign);
        $sign = rtrim($sign);
        return $sign;
    }
 
    /**
           * Fill
     *
     * @param $str
     * @param $blocksize
     * @return string
     */
    private function pkcsPadding($str, $blocksize)
    {
        $pad = $blocksize - (strlen($str) % $blocksize);
        return $str . str_repeat(chr($pad), $pad);
    }
 
    /**
           * to fill
     * 
     * @param $str
     * @return string
     */
    private function unPkcsPadding($str)
    {
        $pad = ord($str{strlen($str) - 1});
        if ($pad > strlen($str)) {
            return false;
        }
        return substr($str, 0, -1 * $pad);
    }
 
}
 
$key = 'key123456';
$iv = 'iv123456';
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

$image = imagecreatefrompng("newImage_ahun4.png");
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

echo $answer = $des->decrypt($final_output);
echo "<br>";

?>