<?php
    function setPNGHeader(){
        header("Content-Type: image/png");
        header("Expires: -1");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Pragma: no-cache");
    }

    function makeCaptcha($source, $len){
        $c = "";
        for ($i = 0; $i < $len; $i++)
            $c .= substr($source, rand(0, strlen($source) -1), 1);
        return $c;
    }


    function makePNGCaptcha($captcha){
        $img = imagecreatefromjpeg("captcha.jpeg");
        $font = "PlaypenSanst.ttf";
        $color = imagecolorallocate($img, 255, 255, 0);
        imagettftext($img, 30, -7, 10, 45, $color, $font ,$captcha);
        imagepng($img);
        imagedestroy($img);
    }
?>