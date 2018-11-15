<?php

namespace VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VoyageBundle\Entity\Voyage;
use VoyageBundle\Form\VoyageType;

class VoyageController extends Controller
{
    public function readVoyageAction(){
        //les donnée de bdd
        $voyages=$this->getDoctrine()->getRepository(Voyage::class)->findAll();
        //affichage
        return $this->render("@Voyage/Voyage/readVoyage.html.twig", array("list"=>$voyages));
    }
    public function createVoyageAction(Request $request
    ){
        //1-form
        //1-a:objet vide
        $voyage=new Voyage();
        //1-b:create form
        $form=$this->createForm(VoyageType::class,$voyage);
        //2-les données
        $form=$form->handleRequest($request);
        if($form->isValid()){
            //3-cnx avec BD
            $em=$this->getDoctrine()->getManager();
            $em->persist($voyage);
            $em->flush();
        }
        //1-c:envoi du form
        return $this->render('@Voyage/Voyage/createVoyage.html.twig', array(
            "f"=>$form->createView()
        ));
    }
    public function deleteVoyageAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $voyage=$em->getRepository(Voyage::class)->find($id);
        $em->remove($voyage);
        $em->flush();
        return $this->redirectToRoute("voyage_read");
    }
    public function updateVoyageAction($id,Request $request)
    {
        //1-form
        //1.a
        $em=$this->getDoctrine()->getManager();
        $voyage=$em->getRepository(Voyage::class)->find($id);
        //1-b:create form
        $form=$this->createForm(VoyageType::class,$voyage);
        //2
        $form=$form->handleRequest($request);
        //3
        if($form->isValid()){
            //3-cnx avec BD
            $em=$this->getDoctrine()->getManager();
            $em->flush();
        }

        return $this->render('@Voyage/Voyage/updateVoyage.html.twig', array("f"=>$form->createView()

        ));
    }
}
