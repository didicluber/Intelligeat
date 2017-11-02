<?php

namespace Plat\PlatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlatBundle:Default:index.html.twig');
    }
}
