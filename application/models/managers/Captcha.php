<?php

/**
 * Description of Captcha
 *
 * @author Kristof
 */
class Captcha {

    function createData() {
        $vals = array(
            //If a "word" is not supplied, the function will generate a random ASCII string.
            'word' => '', 
            'img_path' => './captcha/',
            'img_url' => 'http://localhost/tedx/assets/images/captcha.png',
            'font_path' => './system/fonts/texb.ttf',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 7200
        );
        
        return $vals;
    }

}
