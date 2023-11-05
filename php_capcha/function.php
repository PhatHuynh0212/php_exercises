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
        $img = imagecreatefromjpeg("./img/captcha.jpg");
        $fontSize = [28, 30, 33, 35];
        $angle = [-7, -3, 3, 5];
        $x = 20;
        $y = 50;
        $color = [
            imagecolorallocate($img, 0, 0, 0),
            imagecolorallocate($img, 17, 200, 5),
            imagecolorallocate($img, 16, 206, 189),
            imagecolorallocate($img, 245, 10, 10)
        ];
        $font = [
            "./fonts/PlaypenSanst.ttf",
            "./fonts/Butcherman.ttf",
            "./fonts/MontserratAlternates.ttf",
            "./fonts/PixelifySans.ttf"
        ];
        
        imagettftext($img, $fontSize[rand(0,3)], $angle[rand(0,3)], $x, $y, $color[rand(0,3)], $font[rand(0,3)] ,$captcha);

        imagepng($img);
        imagedestroy($img);
    }
?>