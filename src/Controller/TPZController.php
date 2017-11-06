<?php
/**
 * Created by PhpStorm.
 * User: alix.devynck
 * Date: 06/11/17
 * Time: 13:32
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TPZController extends Controller{
    function index()
    {
        /**
         * @Route ("/annotation",name="hello_world")
         */

        return $this->render(
            'Hello/Hello.html.twig'

        );
    }
    /**
     * @Route ("/annotation",name="hello_world")
     */
    function index2(){

        return $this->render(
            'Hello/Hello2.html.twig'
        );
    }
    function create(){

        $user = new User();
        $user->setNom("Devynck");
        $user->setPrenom("Alix");
        $user->setGithub("Kiraw");

        return $this->render(
            'create/create.html.twig', ["nom" => $user->GetNom(), "prenom" => $user->GetPrenom()]
        );
}


}
