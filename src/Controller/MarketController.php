<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarketController extends AbstractController
{
    /**
     * @Route("/market/{_locale}/{company}/{path}",requirements={"path":".{0,}","_locale": "en|en_US|es|es_AR|fr|fr_FR|pt|pt_BR"})
     * @param $company
     * @param $_locale
     * @return Response
     */
    public function index($company, $_locale): Response
    {
        return $this->render('market/index.html.twig', ["lang" => $_locale]);
    }
}
