<?php
namespace App\Controller;

use App\Entity\Job;
use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/jobs")
 */
class JobController extends AbstractController
{
    /**
     * @var MessageGenerator
     */
    private $messageGenerator;

    public function __construct(MessageGenerator $messageGenerator)
    {
        $this->messageGenerator = $messageGenerator;
    }
    /**
     * Lists all job entities.
     *
     * @Route("/list", name="job.list", methods="GET")
     *
     * @return Response
     */
    public function list() : Response
    {
//        $this->messageGenerator->print();
//        $jobShow = $this->generateUrl('job.show');
        $jobs = $this->getDoctrine()->getRepository(Job::class)->findAll();

        return $this->render('job/list.html.twig', [
            'jobs' => $jobs,
        ]);
    }

    /**
     * Finds and displays a job entity.
     *
     * @Route("job/{id}", name="job.show", methods="GET", requirements={"id" = "\d+"})
     *
     * @param Job $job
     *
     * @return Response
     */
    public function show(Job $job) : Response
    {
        return $this->render('job/show.html.twig', [
            'job' => $job,
        ]);
    }
}
