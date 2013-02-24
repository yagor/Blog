<?php
  function get_ip() {
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        if (is_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        foreach( explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']) as $ip ) {
            $ip=trim($ip);
            if (is_ip($ip))
                return $ip;
        }
    }
    return $_SERVER['REMOTE_ADDR'];
}
echo get_ip();
?>
