<?php


include __DIR__ . '/../app/core/routes.php';

$routes = new Routes();
$routes->get('/login', [userControllers::class, 'login']);
$routes->get('/', [ArticlsControllers::class, 'index']);
$routes->post('/register', [userControllers::class, 'register']);
$routes->get('/addCategory', [categoryControllers::class, 'addCategory']);
$routes->post('/addArticls', [ArticlsControllers::class, 'addArticls']);
$routes->get('/getCategory', [categoryControllers::class, 'getCategory']);
$routes->post('/updateArticls', [ArticlsControllers::class, 'updateArticle']);
$routes->get('/updateFormulaire', [ArticlsControllers::class, 'formulaireArticle']);
// $routes->get('/formulaireArticle', [ArticlsControllers::class, 'formulaireArticle']);
$routes->get('/deleteArticle', [ArticlsControllers::class, 'deleteArticls']);
// $routes->post('/articls', [ArticlsControllers::class, 'getAll']);
return $routes;
