<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Cadastro;
use App\Entity\Geradornum;


/**
     * @Route("/cadastro", name="cadastro_")
     */
    class CadastroController extends AbstractController
    {
        /**
         * @Route("/", name="index", methods={"GET"})
         */
        public function index()
        {
            
            $cadastros = $this->getDoctrine()->getRepository(Cadastro::class)->findAll();
            return $this->json([
                
                'data' => $cadastros
            ]);
        }
        /**
        * @Route("/{cadastroId}", name="show", methods={"GET"})
        */
        public function show($cadastroId)
        {
            $cadastro = $this->getDoctrine()->getRepository(Cadastro::class)->find($cadastroId);
            return $this->json([
                'data' => $cadastro
            ]);
        }
    
        /**
        * @Route("/", name="create", methods={"POST"})
        */
        public function create(Request $request)
        {
            $data = $request->request->all();
    
            $cadastro = new Cadastro();
            $cadastro->setNome($data['nome']);
            //$cadastro->setNummax($data['nummax']);
            //$cadastro->setNummin($data['nummin']);
            
            $doctrine = $this->getDoctrine()->getManager(); 
            $doctrine->persist($cadastro);
            $doctrine->flush();
    
            return $this->json([
                'data' => 'Usuário cadastrado com sucesso!'
    
    
            
            ]);
        }
    
         /**
        * @Route("/{cadastroId}", name="update",methods={"PUT","PATCH"})
        */
       public function update($cadastroId, Request $request)
       {
       
           $data = $request->request->all();
           
           $doctrine = $this->getDoctrine();
       
           $cadastro = $doctrine->getRepository(Cadastro::Class)->find($cadastroId);
       
       
           if($request->request->has ('nome'))
               $cadastro->setNome($data['nome']);
       
           //if($request->request->has ('nummin'))
           //    $cadastro->setNummin($data['nummin']);
           
           //if($request->request->has ('nummax'))
           //    $cadastro->setNummax($data['nummax']);
       
           
       
           $manager = $doctrine->getManager();
           $manager->flush();
       
           return $this->json([
               'data' => 'Curso atualizado com sucesso!'
           ]);
       }   
       
       /**
        * @Route("/{cadastroId}", name="delete", methods={"DELETE"})
        */
        public function delete($cadastroId)
        {
            $doctrine = $this->getDoctrine();
     
            $cadastro = $doctrine->getRepository(Cadastro::class)->find($cadastroId);
     
            $manager = $doctrine->getManager();
            $manager->remove($cadastro);
            $manager->flush();
     
            return $this->json([
             'data' => 'Curso removido com sucesso!'
         ]);
        }
        
         
        /**
        * @Route("/geradornum", name="geradornum_", methods={"GET"})
        */
      
        public function mostragera($geradornum)
        {
            $geradornum = $this->getDoctrine()->getRepository(Geradornum::class)->find($geradornum);
            return $this->json([
                //'data' => $geradornum
                'data' => 'sdsds'
            ]);
        }

        /**
        * @Route("/geradornum/", name="criagera", methods={"POST"})
        */
        public function criagera(Request $request)
        {
            $data = $request->request->all();
    
            $geradornum = new Geradornum();
            $geradornum->setNumeroMinimo($data['numero1']);
            $num1 = $geradornum->setNumeroMinimo($data['numero1']);
            $geradornum->setNumeroMaximo($data['numero2']);
            $num2 = $geradornum->setNumeroMaximo($data['numero2']);
            //$cadastro->setNummax($data['nummax']);
            //$cadastro->setNummin($data['nummin']);
            
            $doctrine = $this->getDoctrine()->getManager(); 
            $doctrine->persist($geradornum);
            $doctrine->flush();
    
            return $this->json([
                //'data' => $geradornum
                'O número aleatório é:'=>rand( $geradornum->getNumeroMinimo($data['numero1']),$geradornum->getNumeroMaximo($data['numero2']))  
    
            
            ]);
        }


    
    
    }