<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/question')]
class QuestionController extends AbstractController
{
    #[Route('/{quizId?}', name: 'app_question_index', methods: ['GET'])]
    public function index(QuestionRepository $questionRepository, QuizRepository $quizRepository, ?int $quizId = null): Response
    {
        $questions = [];
        $quiz = null;

        if ($quizId) {
            $quiz = $quizRepository->find($quizId);
            if (!$quiz) {
                throw $this->createNotFoundException('Quiz not found.');
            }
            $questions = $questionRepository->findBy(['quiz' => $quiz]);
        } else {
            $questions = $questionRepository->findAll();
        }

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{quizId}/new', name: 'app_question_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, QuizRepository $quizRepository, int $quizId): Response
    {
        $quiz = $quizRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found.');
        }

        $question = new Question();
        $question->setQuiz($quiz);

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('app_question_index', ['quizId' => $quizId], Response::HTTP_SEE_OTHER);
        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{quizId}/question/{id}', name: 'app_question_show', methods: ['GET'])]
    public function show(Question $question, int $quizId): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    #[Route('/{quizId}/question/{id}/edit', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, EntityManagerInterface $entityManager, int $quizId): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_question_index', ['quizId' => $quizId], Response::HTTP_SEE_OTHER);
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{quizId}/question/{id}', name: 'app_question_delete', methods: ['POST'])]
    public function delete(Request $request, Question $question, EntityManagerInterface $entityManager, int $quizId): Response
    {
        if ($this->isCsrfTokenValid('delete' . $question->getId(), $request->request->get('_token'))) {
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_question_index', ['quizId' => $quizId], Response::HTTP_SEE_OTHER);
    }
}
