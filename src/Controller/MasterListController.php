<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 22.01.2018
 * Time: 16:33
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\MasterListing;
use Symfony\Component\Routing\Annotation\Route;


class MasterListController extends Controller
{

    /**
     * @Route("/master/", name="list_show")
     */
    public function masterList()
    {
        $user = $this->getUser()->getUser_Id();
        $repository = $this->getDoctrine()->getRepository(MasterListing::class)->findBy(
            ['user_id' => $user]
        );
        return $this->render('masterList/masterList.html.twig', ['posts' => $repository]);
    }
}