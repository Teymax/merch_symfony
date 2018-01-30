<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 29.01.2018
 * Time: 21:51
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;



class AdminEditController extends Controller

{
    /**
     * @Route("/admin-edit/{user_id}", name="admin_edit")
     */
    public function adminEdit(Request $request, User $user_id)
    {
        $em = $this->getDoctrine()->getManager();
        $master = $em->getRepository(User::class)->find($user_id);

        if (!$master) {
            throw $this->createNotFoundException(
                'No user found for id '.$user_id
            );
        }

        if ($master->getAccountType() == 'free') {
            $form = $this->createFormBuilder($master)
                ->add('accountType', HiddenType::class, array('data' => 'pro'))
                ->getForm();

            $form->handleRequest($request);
        }
        elseif ($master->getAccountType() == 'pro') {
            $form = $this->createFormBuilder($master)
                ->add('accountType', HiddenType::class, array('data' => 'free'))
                ->getForm();

            $form->handleRequest($request);
        }

        if ($form->isSubmitted()) {
            $create = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($create);
            $em->flush();
            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/admin1.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
