<?php
function redirect($path)
{
    header('Location:'. URL_ROOT . $path );
}
