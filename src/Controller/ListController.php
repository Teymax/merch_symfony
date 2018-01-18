<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.01.2018
 * Time: 12:43
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListController extends Controller
{
    public function list()
    {
        return $this->render('list/list.html.twig');
    }
}