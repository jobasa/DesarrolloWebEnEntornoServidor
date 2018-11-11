<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');//, [
            //'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        //]);
    }

    /**
     * @Route("/", name="registro")
     */
    public function registroAction(Request $request){
      return $this->render('frontal/registro.html.twig');
    }

    /**
     * @Route("/", name="login")
     */
     public function loginAction(Request $request){
       return $this->render('frontal/login.html.twig');
     }

     /**
      * @Route("/", name="crearEventos")
      */
      public function crearEventosAction(Request $request){
        return $this->render('frontal/crearEventos.html.twig');
      }

      /**
       * @Route("/", name="eventos")
       */
       public function eventosAction(Request $request){
         return $this->render('frontal/eventos.html.twig');
       }

       /**
        * @Route("/", name="admin")
        */
        public function adminAction(Request $request){
          return $this->render('frontal/admin.html.twig');
        }

        /**
         * @Route("/", name="cuenta")
         */
         public function cuentaAction(Request $request){
           return $this->render('frontal/cuenta.html.twig');
         }

}
