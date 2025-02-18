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
    // In the QuestionController's index method
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

        // Now, loop through each question and match the Livre ID
        $livres = [];
        foreach ($questions as $question) {
            $livre = $question->getLivre();  // Get the associated Livre for each question
            if ($livre) {
                $livres[] = $livre->getId();  // Store the Livre IDs in an array (avoid duplicates)
            }
        }
        
        // Remove duplicates by converting the array to a unique set of IDs
        $livres = array_unique($livres);
    }

    return $this->render('question/index.html.twig', [
        'questions' => $questions,
        'quiz' => $quiz,
        'quizzes' => $quizzes,
        'livres' => $livres ?? [], // Pass the list of Livre IDs associated with questions
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

        // Create a new question and set the quiz relationship
        $question = new Question();
        $question->setQuiz($quiz);  // Associate the question with the quiz

        // Create form for the new question
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             dump($form->getData());
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

    public function show(Question $question, QuizRepository $quizRepository, int $quizId): Response
{
    // Get the associated Quiz object from the Question
    $quiz = $question->getQuiz();  // This gets the associated Quiz object
    $quizId = $quiz->getId();  // This gets the ID of the associated Quiz

    // You can now use $quiz or $quizId for your logic
    return $this->render('question/show.html.twig', [
        'question' => $question,
        'quiz' => $quiz, // You can pass the full Quiz object to the view if needed
        'quizId' => $quizId, // You can pass the Quiz ID to the view if needed
    ]);
}


    #[Route('/{quizId}/{id}/edit', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, EntityManagerInterface $entityManager, QuizRepository $quizRepository, int $quizId): Response
    {
        // Get the associated Quiz object and its ID
        $quiz = $question->getQuiz();
        $quizId = $quiz->getId();
    
        // Now you can use $quiz or $quizId in your logic
        $form = $this->createForm(QuestionType::class, $question, [
            'quizId' => $quizId,
        ]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_question_index', ['quizId' => $quizId], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'quiz' => $quiz,
            'quizId' => $quizId, // Pass quizId if needed
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
