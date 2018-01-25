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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ListEditController extends Controller
{
    /**
     * @Route("/list-edit/{listing_id}", name="list_edit")
     */
    public function listEdit(Request $request, Listing $listing_id)
    {
        $em = $this->getDoctrine()->getManager();
        $listing = $em->getRepository(Listing::class)->find($listing_id);

        if (!$listing) {
            throw $this->createNotFoundException(
                'No product found for id '.$listing_id
            );
        }
        $form = $this->createFormBuilder($listing)
            ->add('title', TextType::class, array('data' => $listing->getTitle()))
            ->add('type', ChoiceType::class, array(
                'choices'  => array(
                    'Anvil' => 'Anvil',
                    'Premium' => 'Premium',
                    'Long-Sleeve' => 'Long-Sleeve',
                    'Sweatshirt' => 'Sweatshirt',
                    'Hoodie' => 'Hoodie',
                ),'multiple'=>false,'expanded'=>true
            ), array('data' => $listing->getType()))
            ->add('brand', TextType::class, array('data' => $listing->getBrand()))

            ->add('fit',  ChoiceType::class, array(
                'choices'  => array(
                    'Men' => 'Men',
                    'Women' => 'Women',
                    'Youth' => 'Youth',
                ), 'multiple'=>true,'expanded'=>true
            ), array('data' => $listing->getFit()))
            ->add('color',  ChoiceType::class, array(
                'choices'  => array(
                    'dark_heather' => '1',
                    'heather_grey' => '2',
                    'heather_blue' => '3',
                    'black' => '4',
                    'navy' => '5',
                    'silver' => '6',
                    'royal' => '7',
                    'brown' => '8',
                    'slate' => '9',
                    'red' => '10',
                    'asphalt' => '11',
                    'grass' => '12',
                    'olive' => '13',
                    'kelly_green' => '14',
                    'baby_blue' => '15',
                    'white' => '16',
                    'yellow' => '17',
                    'cranberry' => '18',
                    'pink' => '19',
                    'orange' => '20',
                    'purple' => '21',
                ), 'multiple'=>true,'expanded'=>true
            ), array('data' => $listing->getColor()))
            ->add('cost', TextType::class, array('data' => $listing->getCost()))
            ->add('bulletOne', TextType::class, array('data' => $listing->getBulletOne()))
            ->add('bulletTwo', TextType::class, array('data' => $listing->getBulletTwo()))
            ->add('description', TextType::class, array('data' => $listing->getDescription()))
            ->add('userId', HiddenType::class, array('data' => $listing->getUserId()))
            ->add('master_id', TextType::class, array('data' => $listing->getMasterId()))
            ->add('created', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => $listing->getCreated()))
            ->add('updated', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => new \DateTime("now")))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $create = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($create);
            $em->flush();
            return $this->redirect('/list/'. $listing->getMasterId());
        }

        return $this->render('masterList/masterListEdit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}