<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.01.2018
 * Time: 12:43
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Listing;
use Symfony\Component\Routing\Annotation\Route;


class ListController extends Controller
{
    /**
     * @Route("/list/{master_id}", name="list")
     */
    public function list($master_id)
    {
        $user = $this->getUser()->getUser_Id();
        $repository = $this->getDoctrine()->getRepository(Listing::class)->findBy(
            ['user_id' => $user,
             'master_id' => $master_id
            ]
        );
        return $this->render('list/list.html.twig', ['posts' => $repository, 'master' => $master_id ]);
    }
}