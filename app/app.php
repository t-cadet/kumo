<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
    'twig.options'    => array(
        'cache' => __DIR__ . '/../var/cache/twig',
        )
));
$app['twig'] = $app->extend('twig', function(Twig_Environment $twig, $app) {
    $twig->addExtension(new Twig_Extensions_Extension_Text());
    return $twig;
});
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1'
));
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\LocaleServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../var/logs/kumo.log',
    'monolog.name' => 'kumo',
    'monolog.level' => $app['monolog.level']
));

// Register services
$app['dao.chapter'] = function ($app) {
    return new kumo\DAO\ChapterDAO($app['db']);
};
$app['admin_pass'] = array(
'f72d100d8043756d17a16fff8f747247daf5d80de8466d87d2a1e6a01710b194c42334ac7809a414f2fafca8c9a7bef1197f02d20a537caf13d009572836d561',
'1b656197e2b6f4cbfeda13cb5342b15042d2440f0d568388b2b15356e58d98125ff9864a5d680138e901f237071730a70bbed022f13ac013b3114a8ed21fbd8f',
'f928b3d903af2a219ba6d92d66e836e2f3521ca4c56eed690b5489884af8e856428702b93e1534a8df8edeec72f046dd1edae9c12bea9d70f9407e49d05d43f2');

// Register error handler
$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    switch ($code) {
        case 404:
            $message = 'The requested resource could not be found.';
            break;
        default:
            $message = "Something went wrong.";
    }
    return $app['twig']->render('error.html.twig', array('message' => $message));
});