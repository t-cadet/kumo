<?php



use Symfony\Component\HttpFoundation\Request;

use kumo\Domain\Chapter;

use kumo\Form\Type\ChapterType;



// Home page

$app->get('/', function () use ($app) {

    $chapters = $app['dao.chapter']->findAll();

    return $app['twig']->render('index.html.twig', array('chapters' => $chapters));

})->bind('home');



// Chapter page

$app->get('/chapter/{id}', function ($id) use ($app) {

    $chapter = $app['dao.chapter']->find($id);

    $count = $app['dao.chapter']->count();

    $font_size = 140;

    if(isset($_COOKIE['fontSize'])) {

    	$font_size = $_COOKIE['fontSize'];

    }

    return $app['twig']->render('chapter.html.twig', array('chapter' => $chapter, 'count' => $count, 'font_size' => $font_size));

})->bind('chapter');



// Infos page

$app->get('/infos', function () use ($app) {

	$count = $app['dao.chapter']->count();

	return $app['twig']->render('infos.html.twig', array('count' => $count));

})->bind('infos');



//Admin

$app->match('/admin', function(Request $request = null) use ($app) {



	if($request AND $request->get('password')){

		//Adds the input to the list of passwords

		$input_pass = $app['session']->get('input');
		
		// Unsafe now that the code is on github, better to get the salt from the DB
		$input_pass[] = hash('sha512', 'baka'.$request->get('password'));

		$app['session']->set('input', $input_pass);

	}



	$input_pass = $app['session']->get('input');



	if($input_pass===$app['admin_pass']) {

	//The passwords are exacts and in the right order

	//Creation of the form and redirection	

		$chapterFormView = null;

    	$chapter = new Chapter();

    	$chapterForm = $app['form.factory']->create(ChapterType::class, $chapter);

    	$chapterForm->handleRequest($request);

    	if ($chapterForm->isSubmitted() && $chapterForm->isValid()) {

       		$app['dao.chapter']->save($chapter);

      		$app['session']->getFlashBag()->add('success', 'Your chapter was successfully added/updated.');

    	}

    	$chapterFormView = $chapterForm->createView();

		return $app['twig']->render('admin_zone.html.twig', array('chapterForm' => $chapterFormView));

	}

	else if(sizeof($input_pass)>=sizeof($app['admin_pass'])) {

	//The passwords are wrong, we clear them	

		$app['session']->set('input', array());

	}



	return $app['twig']->render('admin_log.html.twig');

})->bind('admin');
