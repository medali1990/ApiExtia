<?php

namespace FrontOfficeBundle\Controller;

use ArticleBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;	
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends Controller
{
    public function getArticlesAction(Request $request)
    {
        $Repository = $this->getDoctrine()->getManager()->getRepository('ArticleBundle:Article');
        $Articles = $Repository->findAll();

        $paginator  = $this->get('knp_paginator');
        $Articles_pagination = $paginator->paginate($Articles,$request->query->get('page', 1),2);
        return $this->render('FrontOfficeBundle:FrontOffice:ViewArticles.html.twig',array('articles'=>$Articles_pagination));
    }

    public function getArticleAction($id){
      $Repository = $this->getDoctrine()->getManager()->getRepository('ArticleBundle:Article');
        $Article = $Repository->find($id);
    	return $this->render('FrontOfficeBundle:FrontOffice:ViewArticle.html.twig',array('article' => $Article));
    }

    public function NewArticleAction(Request $request){

    $Article = new Article();

    $formBuilder = $this->get('form.factory')->createBuilder('form', $Article);

    $formBuilder
      ->add('title',      'text')
      ->add('laeding',     'text')
      ->add('body',   'textarea')
      ->add('createdBy',    'text')
      ->add('save',      'submit')
    ;

    $form = $formBuilder->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
     
      $em = $this->getDoctrine()->getManager();
      $em->persist($Article);
      $em->flush();
    }

    $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistrée.');

    	return $this->render('FrontOfficeBundle:FrontOffice:NewArticle.html.twig',array(
      'form' => $form->createView(),
    ));
    }

    public function DeleteArticleAction($id){
      $em = $this->getDoctrine()->getEntityManager();
      $Article = $em->getRepository('ArticleBundle:Article')->find($id);
      if(!$Article){
        throw $this->createNotFoundException('pas darticle pour cet id');
      }
      $em->remove($Article);
      $em->flush();
        $response = new JsonResponse();
        //return JsonResponse(json_encode(array('Articles'=>$Articles)));
        return $response->setData(array('article supprime' => $id));
    }
    public function testAction($id){
      $response = new JsonResponse();
      return $response->setData(array('id'=> $id));
    }
}