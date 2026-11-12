<?php
// Single place for site-wide settings and shared text.
// Change a value here and it updates on every page.

const SITE = [
    'name'        => 'holidayhomes.lu',
    'tagline'     => 'The home for your home abroad',
    'place'       => 'Luxembourg',
    'contact'     => 'Adrian',            // used in "Talk to Adrian", "Adrian will call you"
    'contact_url' => '#',                 // TODO: cal.com link or contact page
    'countries'   => ['Spain', 'Italy', 'France'],
    // While the site lives on test.holidayhomes.lu, keep search engines out.
    'noindex'     => true,
];

function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
