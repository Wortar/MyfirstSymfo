<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// la classe Controller est la classe mère de tous les controllers
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Telephone;

class TelephoneController extends Controller
{
  public function index_telephone($prenom, $age)
  {

    $tel = new Telephone();
    $tel->setMarque('Nokia');
    $tel->setType('8');
    $tel->setTaille(5.3);
    $em = $this->getDoctrine()->getManager();
    $em->persist($tel);
    $em->flush();
    // $tel->getId();
    // $tel2 = $this->getDoctrine()->getRepository(Telephone::class)->find(2);

  }
}
