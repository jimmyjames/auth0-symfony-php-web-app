<?php

namespace AppBundle\Controller;

use Dotenv\Dotenv;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $dotenv = new Dotenv(__DIR__ . '/../../..');
        $dotenv->load();
        return $this->render('index.html.twig', array(
            'AUTH0_DOMAIN' => getenv('AUTH0_DOMAIN'),
            'AUTH0_CLIENT_ID' => getenv('AUTH0_CLIENT_ID'),
            'AUTH0_CLIENT_SECRET' => getenv('AUTH0_CLIENT_SECRET')
        ));
    }
}

