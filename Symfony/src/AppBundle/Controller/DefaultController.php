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
     * @Route("/registro", name="registro")
     */
    public function registroAction(Request $request){
      return $this->render('frontal/registro.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
     public function loginAction(Request $request){
       return $this->render('frontal/login.html.twig');
     }

     /**
      * @Route("/crearFestival", name="crearFestival")
      */
      public function crearFestivalAction(Request $request){
        return $this->render('frontal/crearFestival.html.twig');
      }

      /**
       * @Route("/festivales", name="festivales")
       */
       public function festivalesAction(Request $request){
         return $this->render('frontal/festivales.html.twig');
       }

       /**
        * @Route("/conciertos", name="conciertos")
        */
        public function conciertosAction(Request $request){
          return $this->render('frontal/conciertos.html.twig');
        }

       /**
        * @Route("/admin", name="admin")
        */
        public function adminAction(Request $request){
          return $this->render('frontal/admin.html.twig');
        }

        /**
         * @Route("/cuenta", name="cuenta")
         */
         public function cuentaAction(Request $request){
           return $this->render('frontal/cuenta.html.twig');
         }

         /**
          * @Route("/nosotros", name="nosotros")
          */
          public function nosotrosAction(Request $request){
            return $this->render('frontal/nosotros.html.twig');
          }

          /**
           * @Route("/contactar/{sitio}", name="contactar")
           */
           public function contactarAction(Request $request,$sitio="todos"){
             return $this->render('frontal/festivales.html.twig');
           }

}
