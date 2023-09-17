<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    #[Route('/', name: 'app_article')]
    public function index(Request $request, ArticleRepository $articleRepository, PaginatorInterface $paginator): Response
    {
        $query = $articleRepository->createQueryBuilder('a')
            ->getQuery();
    
        $articles = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Récupère le numéro de page à partir de la requête, par défaut 1
            4 // Nombre d'articles par page
        );
    
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
    
}
