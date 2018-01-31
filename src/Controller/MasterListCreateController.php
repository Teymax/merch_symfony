<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 22.01.2018
 * Time: 16:26
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\MasterListing;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\File\File;


class MasterListCreateController extends Controller
{
    public function MasterCreate(Request $request)
    {
        $create = new MasterListing();
        $form = $this->createFormBuilder($create)
            ->add('title', TextType::class, array('label' => false))
           ->add('filename', FileType::class, array('label' => false))
            ->add('userId', HiddenType::class)
            ->add('created', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => new \DateTime("now")))
            ->add('updated', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => new \DateTime("now")))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var File $file
             */
            $file = $create->getFilename();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $create->setFilename($fileName);
            $create = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($create);
            $em->flush();
            return $this->redirectToRoute('app_masterList');
        }

        return $this->render('masterList/masterListCreate.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}