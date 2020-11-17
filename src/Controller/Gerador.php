<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Geradorrand;


class Gerador extends AbstractController
{
    /**
    * @Route("/gerador", name="gerador_", methods={"POST"})
    */
    public function numrand(Request $request)
    {
        $data = $request->request->all();
        $geradornum = new Geradorrand();
        $geradornum->setNumeroMinimo($data['numerominimo']);
        $num1 = $geradornum->getNumeroMinimo($data['numerominimo']);
        $geradornum->setNumeroMaximo($data['numeromaximo']);
        $num2 = $geradornum->getNumeroMaximo($data['numeromaximo']);
        
        return $this->json([
            
            'O numero aleatório entre '.$num1. ' e ' .$num2. ' é ' .rand($num1,$num2)."."

        
        ]);
    }
}
