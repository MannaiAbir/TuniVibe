<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\ArticleType;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use \DateTime;


#[Route('/article')]
final class ArticleController extends AbstractController
{
    #[Route(name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/index2', name: 'app_article_index2', methods: ['GET'])]
    public function index2(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/admin.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
<<<<<<< HEAD
                        $this->getParameter('images_directory'),
=======
                        $this->getParameter('uploads_directory'),
>>>>>>> 4f151ce4df8e3002be4787cbdb5ce73435b4aac6
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'L\'upload de l\'image a échoué.');
                    return $this->redirectToRoute('app_article_new');
                }

<<<<<<< HEAD
                $article->setImage('uploads/images/'.$newFilename);
=======
                $article->setImage('uploads/'.$newFilename);
>>>>>>> 4f151ce4df8e3002be4787cbdb5ce73435b4aac6
            }

            $article->setCreatedAt(new \DateTimeImmutable());
            $article->setUpdatedAt(new \DateTimeImmutable());


            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }



    #new de l'admin 

    #[Route('/new2', name: 'app_article_new2', methods: ['GET', 'POST'])]
    public function new2(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
<<<<<<< HEAD
                        $this->getParameter('images_directory'),
=======
                        $this->getParameter('uploads_directory'),
>>>>>>> 4f151ce4df8e3002be4787cbdb5ce73435b4aac6
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'L\'upload de l\'image a échoué.');
                    return $this->redirectToRoute('app_article_new2');
                }

<<<<<<< HEAD
                $article->setImage('uploads/images/'.$newFilename);
=======
                $article->setImage('uploads/'.$newFilename);
>>>>>>> 4f151ce4df8e3002be4787cbdb5ce73435b4aac6
            }

            $article->setCreatedAt(new \DateTimeImmutable());
            $article->setUpdatedAt(new \DateTimeImmutable());


            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/new2.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }



    #show de user

    #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
public function show(Article $article, CommentaireRepository $commentaireRepository): Response
{
    // Vérification du statut de l'article avant de l'afficher
    if ($article->getStatus() !== 'published') {
        throw $this->createNotFoundException('Article non trouvé ou non publié.');
    }

    $commentaires = $commentaireRepository->findBy(['article' => $article]);

    return $this->render('article/show.html.twig', [
        'article' => $article,
        'commentaires' => $commentaires,
    ]);
}



        #show de l'admin

        #[Route('/{id}/admin', name: 'app_article_show2', methods: ['GET'])]
        public function show2(Article $article, CommentaireRepository $commentaireRepository): Response
        {
            $commentaires = $commentaireRepository->findBy(['article' => $article]);
    
            return $this->render('article/show2.html.twig', [
                'article' => $article,
                'commentaires' => $commentaires,
            ]);
        }




        # comments de user


    #[Route('/{id}/comments', name: 'app_article_comments', methods: ['GET'])]
    public function comments(Article $article): Response
    {
        return $this->render('article/comments.html.twig', [
            'article' => $article,
            'commentaires' => $article->getCommentaires(),
        ]);
    }


    # comments de admin


    #[Route('/{id}/comments2', name: 'app_article_comments2', methods: ['GET'])]
    public function comments2(Article $article): Response
    {
        return $this->render('article/comments2.html.twig', [
            'article' => $article,
            'commentaires' => $article->getCommentaires(),
        ]);
    }


    #edit de user

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'L\'upload de l\'image a échoué.');
                    return $this->redirectToRoute('app_article_edit', ['id' => $article->getId()]);
                }

                $article->setImage('uploads/'.$newFilename);
            }

            $article->setUpdatedAt(new \DateTimeImmutable());

            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }




    #edit de admin

    #[Route('/{id}/edit2', name: 'app_article_edit2', methods: ['GET', 'POST'])]
    public function edit2(Request $request, Article $article, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'L\'upload de l\'image a échoué.');
                    return $this->redirectToRoute('app_article_edit2', ['id' => $article->getId()]);
                }

                $article->setImage('uploads/'.$newFilename);
            }

            $article->setUpdatedAt(new \DateTimeImmutable());

            $entityManager->flush();

            return $this->redirectToRoute('app_article_index2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit2.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }



 # delete de user 
    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            if ($article->getImage()) {
                $imagePath = $this->getParameter('uploads_directory').'/'.basename($article->getImage());
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }



    # delete de user 
    #[Route('/{id}/admin', name: 'app_article_delete2', methods: ['POST'])]
    public function delete2(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            if ($article->getImage()) {
                $imagePath = $this->getParameter('uploads_directory').'/'.basename($article->getImage());
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index2', [], Response::HTTP_SEE_OTHER);
    }



    # commenter de user 



    #[Route('/{id}/commenter', name: 'app_article_commenter', methods: ['GET', 'POST'])]
public function commenter(Request $request, Article $article, EntityManagerInterface $entityManager): Response
{
    $commentaire = new Commentaire();
    $form = $this->createForm(CommentaireType::class, $commentaire);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $commentaire->setArticle($article);
        $commentaire->setPostedAt(new \DateTimeImmutable());

        $entityManager->persist($commentaire);
        $entityManager->flush();

        return $this->redirectToRoute('app_article_show', ['id' => $article->getId()], Response::HTTP_SEE_OTHER);
    }

    return $this->render('commentaire/new.html.twig', [
        'article' => $article,
        'form' => $form->createView(),
    ]);
}


 # commenter de admin



 #[Route('/{id}/commenter2', name: 'app_article_commenter2', methods: ['GET', 'POST'])]
 public function commenter2(Request $request, Article $article, EntityManagerInterface $entityManager): Response
 {
     $commentaire = new Commentaire();
     $form = $this->createForm(CommentaireType::class, $commentaire);
     $form->handleRequest($request);
 
     if ($form->isSubmitted() && $form->isValid()) {
         $commentaire->setArticle($article);
         $commentaire->setPostedAt(new \DateTimeImmutable());
 
         $entityManager->persist($commentaire);
         $entityManager->flush();
 
         return $this->redirectToRoute('app_article_show2', ['id' => $article->getId()], Response::HTTP_SEE_OTHER);
     }
 
     return $this->render('commentaire/new.html.twig', [
         'article' => $article,
         'form' => $form->createView(),
     ]);
 }




 #[Route('/article/{id}/edit-status', name: 'app_article_edit_status', methods: ['POST'])]
public function editStatus(Article $article, Request $request, EntityManagerInterface $entityManager): Response
{
    $status = $request->request->get('status');

    // Vérification si le statut est valide
    if (in_array($status, ['published', 'draft', 'pending'])) {
        $article->setStatus($status);
        $entityManager->flush(); // Utilisation de l'EntityManager pour persister les changements
    } else {
        $this->addFlash('error', 'Statut invalide.');
    }

    return $this->redirectToRoute('app_article_index2');
}

 

}


