<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    session_start();

    if(empty($_SESSION['testwordinput'])){
        $_SESSION['testwordinput'] = array();
    }

    if(empty($_SESSION['testcomparisoninput'])){
        $_SESSION['testcomparisoninput'] = array();
    }


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));


    $app->get("/", function() use ($app) {
      return $app['twig']->render('index.html.twig');
    });

    $app->post("/enter_word", function() use ($app){
        $_SESSION['testwordinput'] = array();
        $push_word = $_POST['first_word'];
        array_push($_SESSION['testwordinput'] , $push_word);

      return $app['twig']->render('index.html.twig', array('word'=> $push_word));

    });

  $app->post("/add_compare", function() use ($app){

      $inputted_list = $_POST['comparison_words'];

      array_push($_SESSION['testcomparisoninput'], $inputted_list);
      $testarray = $_SESSION['testcomparisoninput'];
      $original_word= ($_SESSION['testwordinput'][0]);

    return $app['twig']->render('index.html.twig', array('tests'=> $testarray, 'word'=> $original_word ));
    });


    return $app;
 ?>
