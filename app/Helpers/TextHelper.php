<?php

namespace App\Helpers;

class TextHelper
{
    public static function extractText($htmlContent, $wordLimit = 40)
    {
        // Strip HTML tags
        $textContent = strip_tags($htmlContent);

        // Limit the text to the specified number of words
        $words = explode(' ', $textContent);
        if (count($words) > $wordLimit) {
            $words = array_slice($words, 0, $wordLimit);
            $textContent = implode(' ', $words) . '...';
        }

        return $textContent;
    }
}
