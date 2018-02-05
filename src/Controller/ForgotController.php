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
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;


class ForgotController extends Controller
{
    public function forgot(Request $request ,\Swift_Mailer $mailer)
    {
        $form = $this->createFormBuilder()
            ->add('email', EmailType::class)
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $email= $form->getData()['email'];
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

            if (!$user) {
                return $this->render(
                    'default/forgot-password.html.twig',
                    array('form' => $form->createView(), 'error' => true)
                );
            }
            else {
                $message = (new \Swift_Message('Hello Email'))
                ->setFrom('send@example.com')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'emails/password.html.twig',
                        array('user_id' => $user->getUser_Id())
                    ),
                    'text/html'
                );

            $mailer->send($message);

            return $this->redirectToRoute('index');
            }
        }

        return $this->render(
            'default/forgot-password.html.twig',
            array('form' => $form->createView(), 'error' => false)
        );

    }
}