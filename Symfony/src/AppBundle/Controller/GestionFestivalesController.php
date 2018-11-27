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
      //generamos el festival
      $festival = new Festival();

      //constructor de formularios
       $formBuilder = $this->createFormBuilder($festival);

       //Recojemos formulario
       $form = $formBuilder->getForm();

      // replace this example code with whatever you need
      return $this->render('gestionFestivales/nuevoFestival.html.twig',array('form' => $form->createView()));
  }



}
