<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/secured", name="secured")
 */
class SecuredController extends Controller
{
    /**
     * @Route("/", name="secured_index")
     */
    public function indexAction()
    {
        return $this->render('secured/index.html.twig');
    }
}
