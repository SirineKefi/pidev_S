<?php

namespace VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Voyage/Default/readVoyageReserv.html.twig');
    }
}
