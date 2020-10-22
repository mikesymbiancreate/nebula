<?php  

$default = 'style.css'; // define stylesheets 
$monocss = 'stylemono.css'; 
$contrastcss = 'stylecontrast.css'; 

$expire = time()+60*60*24*1; // 24 Hours) 

if ( (isset($_GET['css'])) && ($_GET['css'] == $monocss) ) { // set mono css 
    $_SESSION['css'] = $_GET['css'];  
    setcookie('css', $_GET['css'], $expire, "/"); 
    } 

if ( (isset($_GET['css'])) && ($_GET['css'] == $contrastcss) ) { // set contrast css 
    $_SESSION['css'] = $_GET['css'];  
    setcookie('css', $_GET['css'], $expire, "/");  
    } 

if ( (isset($_GET['css'])) && ($_GET['css'] == $default) ) { // set default css 
    $_SESSION['css'] = $_GET['css'];  
    setcookie('css', $_GET['css'], $expire, "/");  
    }  

if (isset($_COOKIE['css'])) { // check for css stored in cookie 
    $savedcss = $_COOKIE['css'];  
    } else { 
    $savedcss = $default; 
    } 

if ($_SESSION['css']) { // use session css else use cookie css 
    $css = $_SESSION['css']; 
    } else { 
    $css = $savedcss; 
    }  

// the filename of the stylesheet is now stored in $css 
echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/'.$css.'">'; 
?>