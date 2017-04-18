<?php
error_reporting(E_ALL);
 
function sql_die() {
    if (!headers_sent()) header("HTTP/1.0 500 Internal Server Error");
    die("SQL Error: " . mysql_error());
}
 
function check_auth() {
    if (isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) do {
        
       $bd = mysqli_connect("localhost","phpsite","");
        $bd or sql_die();
        mysqli_select_db($bd, 'phpsite') or sql_die();
        
        $_SERVER['PHP_AUTH_USER'] = mysqli_real_escape_string($bd, $_SERVER['PHP_AUTH_USER']);
        $_SERVER['PHP_AUTH_PW'] = mysqli_real_escape_string($bd, $_SERVER['PHP_AUTH_PW']);
        
        $query = "SELECT * FROM `userlist` WHERE `user`='".$_SERVER['PHP_AUTH_USER']."' AND `pass`='".$_SERVER['PHP_AUTH_PW']."' LIMIT 1";
        $lst = mysqli_query($bd, $query) or sql_die();
        $UserData = mysqli_fetch_assoc($lst);
        mysqli_free_result($lst);
        
        if (!$UserData) break;
        // if (!$UserData['is_admin']) break;
        
        return true;
    } while (false);
    header("HTTP/1.0 401 Unauthorized");
    header("WWW-Authenticate: Basic realm=\"Admin Page\"");
    exit();
}
 
check_auth();
?>