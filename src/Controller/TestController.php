<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    /**
     * @Route("/",name="home")
     */
    public function indexAction(){
        print 1; exit();
        return $this->render('test/index.html.twig',['some'=>'My name']);
    }

}