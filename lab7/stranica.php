<?php
/*
 
 */



require_once 'vendor/autoload.php';
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;


try {
    // stvorimo novu Silex aplikaciju
    $app = new Silex\Application();
	
	$app['debug'] = true;
	
    // registriramo dodatne komponente
    // Silex je u osnovi framework na koji se dodaju komponente, a router je najvažniji dio.
    // registriramo podršku za TWIG
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/views',
    ));
    // registriramo podršku za IDIORM kroz PARIS
    $app->register(new FranMoreno\Silex\Provider\ParisServiceProvider());
	
	// podrška za sesije u Silexu! 
    $app->register(new Silex\Provider\SessionServiceProvider());

$app->register(new Silex\Provider\ValidatorServiceProvider());

$app->register(new Silex\Provider\TranslationServiceProvider(), array(
'translator.domains' => array(),
));


$form = $app['form.factory']->createBuilder('form')

 ->add('naziv', 'text', array(
		    	'required' => true,
		        'constraints' => array(new Assert\NotBlank(), new Assert\Length(array('min' => 5)))
		    ))
->add('tip', 'text', array(
		    	'required' => true,
		        'constraints' => array(new Assert\NotBlank(), new Assert\NotBlank())
		    ))
 ->add('veggie', 'choice', array(
    'choices'  => array('DA' => 'DA', 'NE' => 'NE'),
    'required' => false,
))
		     ->add('halal', 'choice', array(
    'choices'  => array('DA' => 'DA', 'NE' => 'NE'),
    'required' => false,
))
		      ->add('kosh', 'choice', array(
    'choices'  => array('DA' => 'DA', 'NE' => 'NE'),
    'required' => false,
))

 ->add('cijena', 'text', array(
		    	'required' => true,
		        'constraints' => array(new Assert\NotBlank(), new Assert\NotBlank())
		    ))
		    

->getForm();
	

		// prikaži odgovarajući template

		return $app['twig']->render('MojTemplate.twig',  array(
    'twig.path' => __DIR__.'/views'));
	
	


include_once('logic/idiormUse.php');

		// podatak iz baze
    
		$tipoviDelicija= ORM::for_table('delicije')->find_many();

		$alergeni=ORM::for_table('alergeni')->find_many();

    $app->run();
}

	
catch (Exception $ex) {
    echo $ex->getMessage();
}

		

	
	

 
