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
        $quizzes = $quizRepository->findAll(); // Get all quizzes

        if ($quizId) {
            // Fetch the quiz by its ID
            $quiz = $quizRepository->find($quizId);
            if (!$quiz) {
                throw $this->createNotFoundException('Quiz not found.');
            }

            // Fetch all questions for the specific quiz
            $questions = $questionRepository->findBy(['quiz' => $quiz]);
        }

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
            'quiz' => $quiz,
            'quizzes' => $quizzes,
        ]);
    }

    #[Route('/{quizId}/new', name: 'app_question_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, QuizRepository $quizRepository, int $quizId): Response
    {
        // Fetch the quiz based on quizId
        $quiz = $quizRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found.');
        }

        // Create a new question and set the quiz and livre relationship
        $question = new Question();
        $question->setQuiz($quiz); // Associate the question with the quiz
        $question->setLivre($quiz->getLivre()); // Automatically assign the livre from the quiz

        // Create form for the new question
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the new question to the database
            $entityManager->persist($question);
            $entityManager->flush();

            // Redirect back to the list of questions for the specific quiz
            return $this->redirectToRoute('app_question_index', ['quizId' => $quizId], Response::HTTP_SEE_OTHER);
        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{quizId}/{id}', name: 'app_question_show', methods: ['GET'])]
    public function show(Question $question, int $quizId): Response
    {
        // Get the associated Quiz object from the Question
        $quiz = $question->getQuiz();

        return $this->render('question/show.html.twig', [
            'question' => $question,
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{quizId}/{id}/edit', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, EntityManagerInterface $entityManager, int $quizId): Response
    {
        // Get the associated Quiz object
        $quiz = $question->getQuiz();

        // Create form for editing the question
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_question_index', ['quizId' => $quizId], Response::HTTP_SEE_OTHER);
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{quizId}/{id}', name: 'app_question_delete', methods: ['POST'])]
    public function delete(Request $request, Question $question, EntityManagerInterface $entityManager, int $quizId): Response
    {
        // Ensure CSRF token is valid before deleting
        if ($this->isCsrfTokenValid('delete' . $question->getId(), $request->request->get('_token'))) {
            // Remove the question and persist the changes
            $entityManager->remove($question);
            $entityManager->flush();
        }

        // Redirect back to the list of questions for the specific quiz
        return $this->redirectToRoute('app_question_index', ['quizId' => $quizId], Response::HTTP_SEE_OTHER);
    }
}