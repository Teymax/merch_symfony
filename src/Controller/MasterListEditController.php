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
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\File\File;

class MasterListEditController extends Controller
{
    /**
     * @Route("/master-edit/{master_id}", name="master_list_edit")
     */
    public function MasterEdit(Request $request, MasterListing $master_id)
    {
        $em = $this->getDoctrine()->getManager();
        $master = $em->getRepository(MasterListing::class)->find($master_id);

        if (!$master) {
            throw $this->createNotFoundException(
                'No product found for id '.$master_id
            );
        }
        $form = $this->createFormBuilder($master)
            ->add('title', TextType::class, array('data' => $master->getTitle()))
            ->add('filename', FileType::class, array('label' => 'Upload (PNG file)', 'data_class' => null))
            ->add('userId', HiddenType::class, array('data' => $master->getUserId()))
            ->add('created', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => $master->getCreated()))
            ->add('updated', DateTimeType::class, array('label' => false, 'attr'=>array('style'=>'display:none;'), 'data' => new \DateTime("now")))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * @var File $file
             */
            $create = $form->getData();
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

            $em = $this->getDoctrine()->getManager();
            $em->persist($create);
            $em->flush();
            return $this->redirectToRoute('app_masterList');
        }

        return $this->render('masterList/masterListEdit.html.twig', [
            'form' => $form->createView(), 'master'=>$master
        ]);
    }

}