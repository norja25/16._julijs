<?php

/**
 * @param $path
 * @param string $active
 * @return string
 */
function set_active($path, $active = 'nav-active')
{
    return Request::is($path) ? $active : '' ;
}


/**
 * @param array $array
 * @param string $active
 * @return string
 */
function set_expanded($array = array(), $active = 'nav-expanded')
{
    $path = Request::path();
    if (in_array($path, $array))
    {
        return Request::is($path) ? $active : '';
    }



}