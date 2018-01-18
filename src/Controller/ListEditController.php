<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.01.2018
 * Time: 12:43
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ListEditController extends Controller
{
    public function listEdit()
    {
//        return new Response('Edit Listing');
        return $this->render('list/listEdit.html.twig');
    }
}