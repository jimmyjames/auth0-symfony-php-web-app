<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecuredController extends Controller
{
    /**
     * @Route("/secured", name="secured")
     */
    public function indexAction(Request $request)
    {
        return $this->render('secured.html.twig');
    }
}
