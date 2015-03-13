<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Anagram.php";

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('form.twig');
  });

  $app->get("/results", function() use ($app) {
    $repeat = new RepeatCounter;
    $user_input = $repeat->countRepeats($_GET['keyword'], $_GET['bank']);
    return $app['twig']->render('results.twig', array('result' => $user_input));
  });

  return $app;
?>
