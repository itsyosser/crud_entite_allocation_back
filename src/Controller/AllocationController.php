<?php

namespace App\Controller;

use App\Entity\Allocation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AllocationType;
use App\Repository\AllocationRepository;

class AllocationController extends AbstractController
{
    #[Route('/allocation', name: 'app_allocation')]
    public function index(): Response
    {
        return $this->render('allocation/index.html.twig', [
            'controller_name' => 'AllocationController',
        ]); 
    }


    #[Route('/admin', name: 'app_admin')]
    public function indexadmin(AllocationRepository $repo): Response
    {
        $allocation=$repo->findAll();
        return $this->render('admin/index.html.twig',[
            'allocation' => $allocation,
        ]); 
    }
  
    #[Route('/showdballocation', name: 'showdballocation')]
    public function showdballocation(AllocationRepository $allocationRepository ): Response
    {  $allocation=$allocationRepository->findAll();
        if (!$allocation) {
            dump($allocation);
        } 
        return $this->render('admin/index.html.twig', [
            'allocation' => $allocation
        ]);}
    
        #[Route('/addformallocation', name: 'addformallocation')]
    public function addformallocation(ManagerRegistry $managerRegistry, Request $req ): Response
    {  $x=$managerRegistry->getManager();  
        $allocation=new allocation();
         $form =$this->createForm(AllocationType::class,$allocation);
         $form->handleRequest($req); 
         if($form->isSubmitted()and $form->isValid()){
         $x->persist($allocation);
          $x->flush();
    
          return $this->redirectToRoute('app_admin');} 
        return $this->render('admin/addformallocation.html.twig', [ 
        'form' => $form->createView(),
        ]);
}
#[Route('/editallocation/{id}', name: 'editallocation')] 
public function editallocation($id,AllocationRepository $allocationRepository,managerRegistry $managerRegistry,Request $req): Response  
{ //var_dump(($id)).die();
    $x=$managerRegistry->getManager();  
     $dataid=$allocationRepository->find($id);
    $form=$this->createForm(AllocationType::class,$dataid);
    $form->handleRequest($req);
    if($form->isSubmitted()and $form->isValid()){ 
        $x->persist($dataid);
        $x->flush();
    
        return $this->redirectToRoute('app_admin');}
     return $this->renderForm('admin/editallocation.html.twig', [
        'form' => $form
    ]);
} 
#[Route('/deletallocation/{id}', name: 'deleteallocation')]
public function deleteauthor($id,AllocationRepository $AllocationRepository,ManagerRegistry $managerRegistry): Response
{
    $em=$managerRegistry->getManager();
    $dataid=$AllocationRepository->find($id);
    $em->remove($dataid);
    $em->flush();

return $this->redirectToRoute('app_admin');  
}
}