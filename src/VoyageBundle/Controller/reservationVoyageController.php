<?php

namespace VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VoyageBundle\Entity\Reservationvoyage;
use VoyageBundle\Entity\Voyage;
use VoyageBundle\Form\ReservationvoyageType;
use VoyageBundle\Form\VoyageType;

class reservationVoyageController extends Controller
{

   /* public function searchbycountry($dest, $depart){
        $voyages=$this->getDoctrine()->getRepository(Voyage::class)->findAll();
        $tab=[];
        for($i=0;i<count($voyages);$i++)
        {
            if($voyages[$i].getDestinationVoyage()==$dest){
                $tab=$tab.add($voyages[$i]);
            }

        }
        return $tab;

    }*/
    public function readVoyageAReserverAction(){
        //les donnée de bdd
        $voyages=$this->getDoctrine()->getRepository(Voyage::class)->findAll();
        //affichage
        return $this->render("@Voyage/ReserverVoyage/readVoyageReserv.html.twig", array("list"=>$voyages));
    }
    public function ReserverVoyageAction($id,Request $request){
        //1-form
        //1-a:objet vide
        $reservation=new Reservationvoyage();
        $voyages=$this->getDoctrine()->getRepository(Voyage::class)->find($id);
        //1-b:create form
        $form=$this->createForm(ReservationvoyageType::class,$reservation);
        //2-les données
        $form=$form->handleRequest($request);
        if($form->isValid()){
            //3-cnx avec BD
            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
        }
        //1-c:envoi du form
        return $this->render('@Voyage/ReserverVoyage/reserverVoyage.html.twig', array(
            "f"=>$form->createView()
        ));

    }

    }
