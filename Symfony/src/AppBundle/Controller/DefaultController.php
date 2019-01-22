<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Festival;

class DefaultController extends Controller
{
    /**
     * @Route("/{pagina}", name="homepage")
     */
    public function indexAction(Request $request, $pagina=1)
    {
        //Capturar el repositorio de la Tabla contra la DB
        $festivalRepository = $this->getDoctrine()->getRepository(Festival::class);
        $festivales = $festivalRepository->paginaFestivales($pagina);
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig',array('festivales'=>$festivales,'paginaActual'=>$pagina));
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
        * @Route("/conciertos/{sitio}", name="conciertos")
        */
        public function conciertosAction(Request $request,$sitio="todos"){
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
           * @Route("/contactar", name="contactar")
           */
           public function contactarAction(Request $request){
             return $this->render('frontal/festivales.html.twig');
           }

           /**
            * @Route("/festival/{id}", name="festival")
            */
            public function festivalAction(Request $request,$id=null){

              if ($id!=null) {
                //Capturar el repositorio de la Tabla contra la DB
                $festivalRepository = $this->getDoctrine()->getRepository(Festival::class);
                $festival = $festivalRepository->find($id);
                return $this->render('frontal/festival.html.twig',array('festival'=>$festival));
              }else{
                return $this->redirectToRoute('homepage');
              }

            }

            /**
             * @Route("/estilo/{id}", name="estilo")
             */
             public function estiloAction(Request $request,$id=null){

               if ($id!=null) {
                 //Capturar el repositorio de la Tabla contra la DB
                 $estiloRepository = $this->getDoctrine()->getRepository(Estilo::class);
                 $estilo = $festivalRepository->find($id);
                 return $this->render('frontal/estilo.html.twig',array('estilo'=>$estilo));
               }else{
                 return $this->redirectToRoute('homepage');
               }

             }



}
