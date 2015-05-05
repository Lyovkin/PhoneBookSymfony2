<?php

namespace PB\PhoneBookBundle\Controller;

use PB\PhoneBookBundle\Entity\Phonebook;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function mainAction()
    {
        return $this->render('PBPhoneBookBundle:Default:main.html.twig');
    }

    /**
     * @return Response
     */
    public function indexAction()
    {
        $phonebooks = $this->getDoctrine()
            ->getRepository('PBPhoneBookBundle:Phonebook')
            ->findAll();

        if(!$phonebooks)
        {
            throw $this->createNotFoundException('Not found phonebooks');
        }

        return $this->render('@PBPhoneBook/Default/index.html.twig', array('phonebooks' => $phonebooks));
    }

    /**
     * @return Response
     */
    public function createAction()
    {
        $phonebook = new Phonebook();
        $phonebook->setName('Anatoliy');
        $phonebook->setAddress('Kurchatova 8, 65');
        $phonebook->setPhone1(0634406666);
        $phonebook->setPhone2(0573354362);
        $phonebook->setInfo('Hello World!');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($phonebook);
        $em->flush();

        return new Response('Create new object' .$phonebook->getId());
    }

    /**
     * @param $id
     * @return Response
     */
    public function showAction($id)
    {
        $phonebook = $this->getDoctrine()
            ->getRepository('PBPhoneBookBundle:Phonebook')
            ->find($id);

        if(!$phonebook)
        {
            throw $this->createNotFoundException('No phonebook find by id'.$id);
        }

        return $this->render('@PBPhoneBook/Default/show.html.twig', array('phonebook' => $phonebook));
    }
}
