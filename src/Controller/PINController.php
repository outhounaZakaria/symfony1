<?php

namespace App\Controller;

use App\Entity\Pin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PINController extends AbstractController
{
    /**
     * @Route("/p/i/n", name="p_i_n")
     */
    public function index()
    {
        $pin= new Pin;
       $pin->setNom('zakaria');
       $pin->setPrenom('out');
       $em= $this->getDoctrine()->getManager();
       $em->persist($pin);
       $em->flush();
    }
}
