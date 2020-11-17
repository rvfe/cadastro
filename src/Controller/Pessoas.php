<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Pessoa;


/**
 * @Route("/pessoa", name="pessoa_")
 */
class Pessoas extends AbstractController
{   
    /**
    * @Route("/", name="index", methods={"GET"})
    */
    public function index(): Response
    {
        $cadastrados = $this->getDoctrine()->getRepository(Pessoa::class)->findAll();
            return $this->json([
                
                'Usuários cadastrados:' => $cadastrados
                        
        ]);
    }
    /**
    * @Route("/{pessoaId}", name="show", methods={"GET"})
    */
    public function show($pessoaId)
    {
        $pessoa = $this->getDoctrine()->getRepository(Pessoa::class)->find($pessoaId);
        $nome = $this->getDoctrine()->getRepository(Pessoa::class)->find($pessoaId)->getNome($pessoaId);
        return $this->json([
            'Dados de '.$nome.':' => $pessoa
        ]);
    }
    /**
    * @Route("/", name="create", methods={"POST"})
    */
    public function create(Request $request)
    {
        $data = $request->request->all();

        $cadastro = new Pessoa();
        $cadastro->setNome($data['nome']);
        $cadastro->setTelefone($data['telefone']);
        $cadastro->setEndereco($data['endereco']);
        $cadastro->setIdade($data['idade']);
        $cadastro->setCriadoEm(new \DateTime('now'));
        $cadastro->setAtualizadoEm(new \DateTime('now'));
        $doctrine = $this->getDoctrine()->getManager(); 
        $doctrine->persist($cadastro);
        $doctrine->flush();
        
        return $this->json([
            $data['nome'] .' foi adicionado(a)'. ' com sucesso!'

            ]);
    }

    /**
    * @Route("/{pessoaId}", name="update",methods={"PUT","PATCH"})
    */
    public function update($pessoaId, Request $request)
    {
    
        $data = $request->request->all();
        
        $doctrine = $this->getDoctrine();
    
        $cadastro = $doctrine->getRepository(Pessoa::Class)->find($pessoaId);
    
        $id = $cadastro->getId($pessoaId);
        if($request->request->has ('nome'))
            $cadastro->setNome($data['nome']);
    
        if($request->request->has ('telefone'))
            $cadastro->setTelefone($data['telefone']);
        
        if($request->request->has ('endereco'))
            $cadastro->setEndereco($data['endereco']);

        if($request->request->has ('idade'))
            $cadastro->setIdade($data['idade']);
    
        $cadastro->setAtualizadoEm(new \DateTime('now'));
    
        $manager = $doctrine->getManager();
        $manager->flush();
    
        return $this->json([
            'O cadastro de ' .$data['nome']. ' (ID:'.$id.') foi atualizado com sucesso!'
        ]);
    }   

        /**
    * @Route("/{pessoaId}", name="delete", methods={"DELETE"})
    */
    public function delete($pessoaId)
    {
        
        $cadastro = $this->getDoctrine()->getRepository(Pessoa::class)->find($pessoaId);
        $nome = $this->getDoctrine()->getRepository(Pessoa::class)->find($pessoaId)->getNome($pessoaId);
        $id = $this->getDoctrine()->getRepository(Pessoa::class)->find($pessoaId)->getId($pessoaId);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($cadastro);
        $manager->flush();
    
        
        return $this->json([
            'O cadastro de '.$nome.' (ID: '.$id.') foi removido com sucesso' 
        ]);
    }

    





}
