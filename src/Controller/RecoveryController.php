<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 05.02.2018
 * Time: 11:02
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RecoveryController extends Controller
{
    /**
     * @Route("/password-recovery/{user_id}", name="password-recovery")
     */
    public function recovery(Request $request, User $user_id, UserPasswordEncoderInterface $passwordEncoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($user_id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$user_id
            );
        }
        $form = $this->createFormBuilder($user)
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => false),
                'second_options' => array('label' => false),
            ))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('index');
        }

        return $this->render('default/password-recovery.html.twig', [
            'form' => $form->createView(), 'master'=>$user
        ]);
    }
}