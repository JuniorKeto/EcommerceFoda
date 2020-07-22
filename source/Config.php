<?php
define("ROOT", "http://localhost/EcommerceFoda");

/**
 * @param string|null $uri
 * @return string
 *       
 */

function url(string $uri = null): string {
    if($uri){
        return ROOT . "/{$uri}";
    }

    return ROOT;
}