<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 11.01.2018
 * Time: 20:46
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function index () {
        return $this->render('base.html.twig');
    }
}