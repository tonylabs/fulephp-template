<?php
return array
(
    '_root_' => 'home/index',  // The default route
    '_404_' => 'base/404',    // The main 404 route
    'about' => 'home/about',
    'case' => 'home/case',
    'case/(:any)' => 'home/case/$1',
    'admin' => 'admin/dashboard/',
    'support/(:any)' => 'support/index/$1/$1'
);