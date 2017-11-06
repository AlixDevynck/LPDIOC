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

        return $this->render(
            'Hello/Hello.html.twig'

        );
    }
}
