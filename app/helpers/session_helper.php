<?php
//flash message setup
function flashSet($name, $message, $class = 'alert alert-success') {
    $_SESSION[$name] = $message;
    $_SESSION[$name.'_class'] = $class;
}
