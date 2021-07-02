<?php

namespace App\Controller;

use App\Entity\Company;
use App\Form\LoginType;
use App\Entity\Chauffeur;
use App\Form\CompanyType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthentificationController extends AbstractController
{
    /**
     * @Route("/authentification", name="authentification")
     */
    public function index(): Response
    {
        $chauffeur = new Chauffeur();
        $form = $this->createForm(LoginType::class,$chauffeur);
        return $this->render('authentification/index.html.twig', [
            'controller_name' => 'AuthentificationController','form'=>$form->createView()
        ]);
    }
    /**
     * @Route("/authentification/register", name="register") 
     */
    public function register(): Response
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class,$company);
        return $this->render('authentification/register.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}
