<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 12.01.2018
 * Time: 10:22
 */

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskController extends Controller
{
    public function task(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $user = new Users();

        $form = $this->createFormBuilder($user)
            ->add('login', TextType::class, array('attr' => ['class' => 'form-control', 'placeholder' => 'Enter your Name']))
            ->add('email', EmailType::class, array('attr' => ['class' => 'form-control', 'placeholder' => 'Enter your email']))
            ->add('password', PasswordType::class, array('attr' => ['class' => 'form-control', 'placeholder' => 'Enter your password']))
            ->add('regDate', HiddenType::class, array('data' => date("Y-m-d H:i:s"), 'attr' => ['class' => 'form-control']))
            ->add('Register', SubmitType::class, array('label' => 'Register', 'attr' => ['class' => 'btn btn-info']))

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = $form->getData();
             $em = $this->getDoctrine()->getManager();
             $em->persist($user);
             $em->flush();

            return $this->redirectToRoute('app_done');
        }

        return $this->render('default/sing-up.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}