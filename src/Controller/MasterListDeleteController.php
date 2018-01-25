<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 22.01.2018
 * Time: 16:26
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MasterListing;
use App\Entity\Listing;

class MasterListDeleteController extends Controller
{
    /**
    * @Route("/master-delete/{master_id}", name="master_list_delete")
    */
    public function MasterDelete($master_id)
    {
        $em = $this->getDoctrine()->getManager();
        $master = $em->getRepository(MasterListing::class)->find($master_id);
        $repository = $this->getDoctrine()->getRepository(Listing::class)->findBy(
            [
                'master_id' => $master_id
            ]);

        if (!$master) {
            throw $this->createNotFoundException(
                'No product found for id '.$master_id
            );
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($master);
        foreach ($repository as $product) {
            $em->remove($product);
        }
        $em->flush();
        return $this->redirect('/master');

    }
}