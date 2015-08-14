<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/count_repeats", function () use ($app) {
        $my_RepeatCounter = new RepeatCounter;
        $your_repeats = $my_RepeatCounter->countRepeats($_GET['word'], $_GET['string']);
        return $app['twig']->render('view.html.twig', array('result' => $your_repeats));
    });

    return $app;
 ?>
