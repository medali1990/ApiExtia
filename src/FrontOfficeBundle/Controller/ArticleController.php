<?php

namespace FrontOfficeBundle\Controller;

use ArticleBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;	
use Symfony\Component\HttpFoundation\Request;


class ArticleController extends Controller
{
    /*public function getArticlesAction()
    {
        return $this->render('FrontOfficeBundle:FrontOffice:ViewArticles.html.twig');
    }*/
    /*
    public function getArticleAction($id){
    	return $this->render('FrontOfficeBundle:FrontOffice:ViewArticle.html.twig',array('slug' => $id));
    }*/

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
    /*
    public function DeleteArticleAction($id){
    	return new Response("l'article ".$id." est supprimé");
    }*/
}