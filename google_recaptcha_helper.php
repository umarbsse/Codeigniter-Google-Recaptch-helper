<?php
    function is_google_recaptcha_enable(){
        // INSERT YOU LOGIN BELLOW IF YOU WANT TO ENABLE OR DISABLE GOOGLE RECAPTCHA USING SOME CONDIITONS
        $is_recaptcha_enable = true;
        return $is_recaptcha_enable;
    }
    function get_google_recaptcha_public_key(){
        // ENTER YOU GOOGLE RECAPTCHA PUBLIC KEY BELLOW
        return 'GOOGLE_RECAPTCHA_PUBLIC_KEY';
    }
    function get_google_recaptcha_secret_key(){
        // ENTER YOU GOOGLE RECAPTCHA SECRET KEY BELLOW
        return 'GOOGLE_RECAPTCHA_SECRET_KEY';
    }
    function get_html_if_google_recaptcha_enable(){
        echo '<center><div class="g-recaptcha" data-sitekey="'.get_google_recaptcha_public_key().'"></div><br/></center>';
    }
    function verify_google_recaptcha(){
        if (isset($_POST['g-recaptcha-response'])) {
            $ci = &get_instance();
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.get_google_recaptcha_secret_key().'&response='.$ci->input->post('g-recaptcha-response',true);
            $response = file_get_contents($url);
            $response = json_decode($response);if ($response->success == true) {
                return true;
            }
        }
        return false;        
    }

    function google_recaptcha_get_real_ip(){

        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet

        {

        $ip=$_SERVER['HTTP_CLIENT_IP'];

        }

        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy

        {

        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

        }

        // check if isset REMOTE_ADDR and != empty

        elseif(isset($_SERVER['REMOTE_ADDR']) && ($_SERVER['REMOTE_ADDR'] != '') && ($_SERVER['REMOTE_ADDR'] != NULL))

        {

            $ip = $_SERVER['REMOTE_ADDR'];

        // you're probably on localhost

        } else {

        $ip = "127.0.0.1";

        }

        return $ip;

    }
?>