<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.01.2018
 * Time: 12:43
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Listing;

class ListDeleteController extends Controller
{
    /**
     * @Route("/list-delete/{listing_id}", name="list_delete")
     */
    public function listDelete($listing_id)
    {
        $em = $this->getDoctrine()->getManager();
        $master = $em->getRepository(Listing::class)->find($listing_id);

        if (!$master) {
            throw $this->createNotFoundException(
                'No product found for id '.$listing_id
            );
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($master);
        $em->flush();
        return $this->redirect('/list/'. $master->getMasterId());

    }
}