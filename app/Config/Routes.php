<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Blog::index');
$routes->get('/tag/(:segment)', 'Blog::postsByTag/$1');
$routes->get('/category/(:segment)', 'Blog::postsByCategory/$1');
$routes->get('/(:segment)', 'Blog::details/$1');
// $routes->get('/casestudy', 'CaseStudy::index');
// $routes->get('/casestudy/(:segment)', 'CaseStudy::details/$1');
// $routes->get('/casestudy/tag/(:segment)', 'CaseStudy::postsByTag/$1');
// $routes->get('/casestudy/category/(:segment)', 'CaseStudy::postsByCategory/$1');
