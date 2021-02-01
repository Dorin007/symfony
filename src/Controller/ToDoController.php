<?php
namespace App\Controller;

use App\Entity\Task;
use App\Form\Type\ToDoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ToDoController extends AbstractController
{
    /**
     * Page to create new To Do.
     *
     * @Route("/todo", name="toDo.new", methods="GET")
     *
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $task = new Task();

        $form = $this->createForm(ToDoType::class, $task);

        return $this->render('to_do/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}