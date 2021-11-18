<?php

namespace App\Controller;

use App\Entity\Page;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index(): Response
    {
        /*$entityManager = $this->getDoctrine()->getManager();
        $page = new Page();
        $page->setKeywords('Какое то Keywords');
        $page->setDescription('some Description');
        $page->setConfirmed(true);
        $page->setTitle('some titile');
        $entityManager->persist($page);
        $entityManager->flush($page);*/
        $page = $this->getDoctrine()->getRepository(Page::class)->find(1);

        return $this->render('page/index.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/addSome", name="addSome")
     * @return Response
     */
    public function addSome(): Response
    {
        return $this->render('page/addSome.html.twig', []);
    }
}
