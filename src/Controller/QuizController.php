<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Form\QuizType;
use App\Form\QuestionType;
use App\Entity\Question;
use App\Entity\TentativeQuiz;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

#[Route('/quiz')]
final class QuizController extends AbstractController
{
    #[Route(name: 'app_quiz_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $quizzes = $entityManager
            ->getRepository(Quiz::class)
            ->findAll();

        return $this->render('quiz/index.html.twig', [
            'quizzes' => $quizzes,
        ]);
    }

    #[Route('/new', name: 'app_quiz_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $quiz = new Quiz();
    $form = $this->createForm(QuizType::class, $quiz);
    $form->handleRequest($request);

    // Check if the quiz already has 10 questions
    if (count($quiz->getQuestions()) >= 10) {
        $this->addFlash('error', 'You cannot add more than 10 questions to this quiz.');
        return $this->redirectToRoute('app_quiz_new');
    }

    if ($form->isSubmitted() && $form->isValid()) {
        foreach ($quiz->getQuestions() as $question) {
            $entityManager->persist($question);
        }

        // Set the same livre (book) for all questions if it's the first question
        if ($quiz->getQuestions()->count() > 0) {
            $livre = $quiz->getQuestions()->first()->getLivre();
            foreach ($quiz->getQuestions() as $question) {
                $question->setLivre($livre);
            }
        }

        $entityManager->persist($quiz);
        $entityManager->flush();

        return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('quiz/new.html.twig', [
        'quiz' => $quiz,
        'form' => $form,
    ]);
}
#[Route('/setup', name: 'app_quiz_setup')]
public function setup(Request $request, EntityManagerInterface $entityManager): Response
{
    $quiz = new Quiz();
    $quizForm = $this->createForm(QuizType::class, $quiz);
    $quizForm->handleRequest($request);

    $question = new Question();
    $questionForm = $this->createForm(QuestionType::class, $question);
    $questionForm->handleRequest($request);

    if ($quizForm->isSubmitted() && $quizForm->isValid()) {
        $entityManager->persist($quiz);
        $entityManager->flush();
    }

    if ($questionForm->isSubmitted() && $questionForm->isValid()) {
        $entityManager->persist($question);
        $entityManager->flush();
    }

    return $this->render('quiz/setup.html.twig', [
        'quizForm' => $quizForm->createView(),
        'questionForm' => $questionForm->createView(),
    ]);
}


    #[Route('/{id}/submit', name: 'app_quiz_submit', methods: ['POST'])]
#[ParamConverter('quiz', class: 'App\Entity\Quiz')]
public function submit(Quiz $quiz, Request $request, EntityManagerInterface $entityManager): Response
{
    // Get submitted answers
    $submittedData = $request->request->all('answers'); 

    if (!is_array($submittedData)) {
        throw new BadRequestHttpException('Invalid answers format.');
    }

    $score = 0;
    $totalQuestions = count($quiz->getQuestions());

    foreach ($submittedData as $questionId => $answer) {
        // Fetch the question
        $question = $entityManager->getRepository(Question::class)->find($questionId);
        if (!$question) {
            continue;
        }

        // Ensure that optionCorrect is not null and decode it properly
        $correctOption = $question->getOptionCorrect();

        if ($correctOption !== null) {
            // Compare submitted answer with correct ones
            if ($answer === $correctOption) {
                $score++;
            }
        } else {
            // Handle case where there's no correct option, if needed
            // You could log this or continue with the loop
            continue;
        }
    }

    // Save attempt
    $tentativeQuiz = new TentativeQuiz();
    $tentativeQuiz->setUtilisateur($this->getUser());
    $tentativeQuiz->setLivre($quiz->getLivre());
    $tentativeQuiz->setDateTentative(new \DateTime());
    $tentativeQuiz->setScore($score);

    $entityManager->persist($tentativeQuiz);
    $entityManager->flush();

    return $this->redirectToRoute('app_quiz_score', [
        'id' => $tentativeQuiz->getId(),
        'score' => $score,
        'totalQuestions' => $totalQuestions,
    ]);
}

#[Route('/quiz/score/{id}/{score}/{totalQuestions}', name: 'app_quiz_score')]
public function quizScore(int $id, int $score, int $totalQuestions, EntityManagerInterface $entityManager): Response
{
    // Fetch the TentativeQuiz by ID
    $tentativeQuiz = $entityManager->getRepository(TentativeQuiz::class)->find($id);

    // Check if the tentativeQuiz exists
    if (!$tentativeQuiz) {
        throw $this->createNotFoundException('The tentative quiz does not exist.');
    }

    return $this->render('quiz/score.html.twig', [
        'tentativeQuiz' => $tentativeQuiz,
        'score' => $score,
        'totalQuestions' => $totalQuestions,
    ]);
}



#[Route('/{id}', name: 'app_quiz_show', methods: ['GET'])]
public function show(Quiz $quiz, EntityManagerInterface $entityManager): Response
{
    // Fetch questions related to this quiz
    $questions = $entityManager->getRepository(Question::class)->findBy(['quiz' => $quiz]);

    // Decode the options for each question (only if it's a string)
    foreach ($questions as $question) {
        $options = $question->getOptions();
        if (is_string($options)) {
            $question->setOptions(json_decode($options, true)); // Decode if it's a JSON string
        }
    }

    return $this->render('quiz/show.html.twig', [
        'quiz' => $quiz,
        'questions' => $questions, // Pass the decoded options to the template
    ]);
}



    #[Route('/{id}/edit', name: 'app_quiz_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QuizType::class, $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('quiz/edit.html.twig', [
            'quiz' => $quiz,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_quiz_delete', methods: ['POST'])]
    public function delete(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        // Fixing CSRF validation issue
        if ($this->isCsrfTokenValid('delete'.$quiz->getId(), $request->get('token'))) {
            $entityManager->remove($quiz);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
    }
}
