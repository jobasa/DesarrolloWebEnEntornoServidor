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

      //Recogemos la informacion
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        //Rellenar el Entity Festival
        $festival = $form->getData();
        $festival->setDatos("");
        $festival->setFoto("");
        $festival->setTop(0);

        //Almacenar nuevo festival
        $em = $this->getDoctrine()->getManager();
        $em->persist($festival);
        $em->flush();
        return $this->redirectToRoute('festival',array('id' => $festival->getId()));
      }

      // replace this example code with whatever you need
      return $this->render('gestionFestivales/nuevoFestival.html.twig',array('form' => $form->createView()));
  }



}
