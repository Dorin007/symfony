<?php
namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// accessing services like this only works if you extend Controller
class ProductController extends AbstractController
{
    public function newAction()
    {
        // only works if your service is public
        $messageGenerator = $this->get(MessageGenerator::class);
    }
}