<?php

namespace ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ArticleBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends Controller
{
    public function getArticlesAction()
    {
        $Articles = new Article;
        $Articles = $this->getDoctrine()->getManager()->getRepository('ArticleBundle:Article')->findAll();
        
        //var_dump($Articles);
        //die();
        return new JsonResponse(json_encode(array('Articles'=>$Articles)));
   }

    public function getArticleAction()
    {
        if ($id < 1) {
            throw $this->createNotFoundException("L'article ".$id." n'existe pas.");
        }

        $repository = $this->getDoctrine()->getManager()->getRepository('ArticleBundle:Article');

        $Article = $repository->find($id);

        if($Article == Null){
            throw $this->createNotFoundException("l'article ".$id."n'existe pas .");
        }

        /*var_dump($Article);

        die();

        if($Article==Null){
            throw new NotFoundHttpException('Article nexiste pas');
        }

        return new Response(json_encode());*/
        return new JsonResponse($Article);
   }

    public function postArticleAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Article = new Article;
        $Article->setTitle('premierarticle');
        $Article->setLaeding('kjh');
        $Article->setBody('fddf');
        $Article->setCreatedBy('lkj');

        $em->persist($Article);
        $em->flush($Article);

        return new Response(json_encode(array('retour' =>'bien enregistrer')));
   }

    public function deletArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Article = new Article;
        $Article = $em->getRepository('ArticleBundle:Article')->find($id);

        if($Article == Null){
            throw $this->createNotFoundException("Article n'exsite pas");
            
        }
        $em->remove($Article);
        $em->flush($Article);

        return new Response(json_encode(array('article numero'=>$id,'a bien ete'=> 'supprimer')));
    }

}
