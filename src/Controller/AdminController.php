<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 12.01.2018
 * Time: 17:56
 */

namespace App\Controller;

use App\Entity\Listing;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

class AdminController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function admin(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(User::class)->findAll();
        $count = count ($repository);
        $arr = array();
        for ($i=0; $i < $count; $i++) {
            $user =$repository[$i]->getUser_Id();
            $list = $this->getDoctrine()->getRepository(Listing::class)->findBy(
                ['user_id' => $user
                ]
            );
            $arr += [ $user => count($list) ];

        }
        return $this->render('admin/admin.html.twig', ['user' => $repository, 'count' => $arr]);
    }
}