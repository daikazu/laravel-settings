<?php
if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return \Daikazu\LaravelSettings\Facades\LaravelSettings::setting($key, $default);
    }
}
