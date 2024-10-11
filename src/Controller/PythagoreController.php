<?php

namespace App\Controller;

use App\Utility\HUtility;
use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    public $pythagoreUtility;

    function __construct(PythagoreUtility $pythagoreUtility){
        $this->pythagoreUtility = $pythagoreUtility;
    }
    // public function __construct(PythagoreUtility $pythagoreUtility){
        
    //     $this->pythagoreUtility=$pythagoreUtility;
    // }
    #[Route('/pythagore/view', name: 'app_pythagore')]
    public function displayPythagoreAction(): Response
    {
        $recupTablePythagore = $this->pythagoreUtility->display();
        return $this->render('pythagore/displayPythagore.html.twig', [
            //'controller_name' => 'PythagoreController',
            'tablePythagore'=> $recupTablePythagore,
        ]);
    }
}
?>