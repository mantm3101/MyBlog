<?php

/**
 * Return sizes readable by humans.
 */
function human_filesize($bytes, $decimals = 2)
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

/**
 * Is the mime type an image.
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

/**
 * Return "checked" if true.
 */
function checked($value)
{
    return $value ? 'checked' : '';
}

/**
 * Return img url for headers.
 */
function post_image($value = null)
{
    if (empty($value)) {
        $value = config('blog.post_image');
    }
    if ($value !== "" && !starts_with($value, 'http') && $value[0] !== '/') {
        $value = config('blog.uploads.webpath') . '/' . $value;
    }

    return $value;
}

/**
 * Return DD-MM-YYYY HH:mm:ss date format
 */

function format_normal_date($value = null)
{
    if (!empty($value)) {
        return date('d-m-Y H:m:s', strtotime($value));
    }
    return '';
}
