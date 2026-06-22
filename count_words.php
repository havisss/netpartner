<?php
$urls = [
    'Home' => 'http://127.0.0.1:8000/',
    'About' => 'http://127.0.0.1:8000/about',
    'Contact' => 'http://127.0.0.1:8000/contact',
    'Portfolio' => 'http://127.0.0.1:8000/portfolio'
];

foreach ($urls as $name => $url) {
    $html = @file_get_contents($url);
    if ($html) {
        $text = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $html);
        $text = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $text);
        $text = strip_tags($text);
        
        // Use a simpler method to count words correctly accounting for spaces and newlines
        $words = str_word_count($text);
        echo $name . ': ' . $words . ' kata' . PHP_EOL;
    } else {
        echo $name . ': Halaman tidak ditemukan' . PHP_EOL;
    }
}
