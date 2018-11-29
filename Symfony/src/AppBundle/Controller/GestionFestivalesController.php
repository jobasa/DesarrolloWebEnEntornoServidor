<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\FestivalType;
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

      //construyendo el formulario
      $form = $this->createForm(FestivalType::class, $festival);

      // replace this example code with whatever you need
      return $this->render('gestionFestivales/nuevoFestival.html.twig',array('form' => $form->createView()));
  }



}
