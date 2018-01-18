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

class ListDeleteController extends Controller
{
    public function listDelete()
    {
        return new Response('Delete Listing');
    }
}