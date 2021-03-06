<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.01.2018
 * Time: 12:43
 */

namespace App\Controller;

use App\Entity\MasterListing;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Listing;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
        $master = $em->getRepository(MasterListing::class)->find($listing->getMasterId());
        if (!$listing) {
            throw $this->createNotFoundException(
                'No product found for id '.$listing_id
            );
        }
        $form = $this->createFormBuilder($listing)
            ->add('title', TextType::class, array('data' => $listing->getTitle(), 'label'=> false))
            ->add('type', ChoiceType::class, array(
                'choices'  => array(
                    'Anvil' => 'Anvil',
                    'Premium' => 'Premium',
                    'Long-Sleeve' => 'Long-Sleeve',
                    'Sweatshirt' => 'Sweatshirt',
                    'Hoodie' => 'Hoodie',
                ),'multiple'=>false,'expanded'=>true, 'label' => false, 'required' => false, 'placeholder' => false
            ), array('data' => $listing->getType()))
            ->add('brand', TextType::class, array('data' => $listing->getBrand(), 'label' => false))

            ->add('fit',  ChoiceType::class, array(
                'choices'  => array(
                    'Men' => 'Men',
                    'Women' => 'Women',
                    'Youth' => 'Youth',
                ), 'multiple'=>true,'expanded'=>true, 'label' => false
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
                ), 'multiple'=>true,'expanded'=>true, 'data' => null, 'label' => false
            ))
            ->add('cost', TextType::class, array('data' => $listing->getCost(), 'label' => false))
            ->add('bulletOne', TextareaType::class, array('data' => $listing->getBulletOne(), 'label' => false))
            ->add('bulletTwo', TextareaType::class, array('data' => $listing->getBulletTwo(), 'label' => false))
            ->add('description', TextareaType::class, array('data' => $listing->getDescription(), 'label' => false))
            ->add('userId', HiddenType::class, array('data' => $listing->getUserId()))
            ->add('master_id', HiddenType::class, array('data' => $listing->getMasterId()))
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

        return $this->render('list/listEdit.html.twig', [
            'form' => $form->createView(), 'master' => $master, 'listing' => $listing
        ]);
    }
}