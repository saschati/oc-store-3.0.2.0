<?php


/**
 * @param string $key
 * @param mixed  $default
 *
 * @return mixed
 */
function env(string $key, $default = null)
{
    $value = (getenv($key) ?? $_ENV[$key] ?? $_SERVER[$key]);

    if ($value === false) {
        return $default;
    }

    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;

        case 'false':
        case '(false)':
            return false;
    }

    return $value;
}
