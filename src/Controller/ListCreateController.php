<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.01.2018
 * Time: 12:43
 */

namespace App\Controller;
use App\Entity\Listing;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Routing\Annotation\Route;

class ListCreateController extends Controller
{
    /**
     * @Route("/list-create/{master_id}", name="list_create")
     */
    public function listCreate(Request $request, $master_id)
    {
        $user = $this->getUser()->getUser_Id();
        $create = new Listing();
        $form = $this->createFormBuilder($create)
            ->add('title', TextType::class)
            ->add('type', ChoiceType::class, array(
                'choices'  => array(
                    'Anvil' => 'Anvil',
                    'Premium' => 'Premium',
                    'Long-Sleeve' => 'Long-Sleeve',
                    'Sweatshirt' => 'Sweatshirt',
                    'Hoodie' => 'Hoodie',
                ),'multiple'=>false,'expanded'=>true
            ))
            ->add('brand', TextType::class)

            ->add('fit',  ChoiceType::class, array(
                'choices'  => array(
                    'Men' => 'Men',
                    'Women' => 'Women',
                    'Youth' => 'Youth',
                ), 'multiple'=>true,'expanded'=>true
            ))
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
            ))
            ->add('cost', TextType::class)
            ->add('bulletOne', TextType::class)
            ->add('bulletTwo', TextType::class)
            ->add('description', TextType::class)
            ->add('userId', HiddenType::class, array('data' => $user))
            ->add('master_id', HiddenType::class, array('data' => $master_id))
            ->add('created', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => new \DateTime("now")))
            ->add('updated', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => new \DateTime("now")))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $create = $form->getData();
             $em = $this->getDoctrine()->getManager();
             $em->persist($create);
             $em->flush();
            return $this->redirect('/list/'. $master_id);
        }

        return $this->render('list/listCreate.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}