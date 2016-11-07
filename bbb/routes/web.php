<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('log/{logtype}', function ($logtype) {
	return 'hello ' . $logtype;
});




$app->get('upgrade', function () {
return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
#        return "hello upgrade";
}); 

$app->get('json', function () {

	return response()->json(['name' => 'Abigail', 'state' => 'CA']);

}); 



$app->get('responsedemo', function () {
	return response($content, $status)->header('Content-Type', $value);


});

$app->get('downloaddemo', function () {
	$pathToFile = '/data/wwwroot/default/bbb/app/Http/Controllers/ExampleController.php';
	return response()->download($pathToFile);

});


$app->get('redirectdemo', function () { 
             
});



$app->get('ctl', 'UserController@store');

$app->get('dbConn', 'dbConnController@select');









$app->get('/', function () use ($app) {
	return "hello lumen";   
# return $app->version();
});
