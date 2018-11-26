<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Festival;

/**
 * @Route("/gestionFestivales")
 */
class GestionFestivalesController extends Controller
{
  /**
   * @Route("/nuevoFestival", name="nuevoFestival")
   */
  public function nuevoFestivalAction(Request $request)
  {
      //Capturar el repositorio de la Tabla contra la DB
      $festivalRepository = $this->getDoctrine()->getRepository(Festival::class);
      $festivales = $festivalRepository->findAll();
      // replace this example code with whatever you need
      return $this->render('frontal/index.html.twig',array('festivales'=>$festivales));
  }



}
