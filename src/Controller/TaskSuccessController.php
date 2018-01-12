<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 12.01.2018
 * Time: 10:39
 */

namespace App\Controller;


use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskSuccessController extends Controller
{
    public function taskSuccess (Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $user = new Users();

        $form = $this->createFormBuilder($user)
            ->add('email', EmailType::class, array('attr' => ['class' => 'form-control', 'placeholder' => 'Enter your email']))
            ->add('password', PasswordType::class, array('attr' => ['class' => 'form-control', 'placeholder' => 'Enter your password']))
            ->add('Register', SubmitType::class, array('label' => 'Login', 'attr' => ['class' => 'btn btn-info']))

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('default/login.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}