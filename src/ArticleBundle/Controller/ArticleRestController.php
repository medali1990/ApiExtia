<?php

namespace ArticleBundle\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use ArticleBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;	
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleRestController extends Controller
{

	//recuperer tous les articles


    public function getArticlesAction()
    {
    	$Articles = new Article;
    	$Articles = $this->getDoctrine()->getManager()->getRepository('ArticleBundle:Article')->findAll();
    	
    
        return $Articles;
    }

    // recuperer un seul article
    //get/{id}
    
    public function getArticleAction($id){
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

    //enregistrer un article
    //enreg
    public function postArticleAction(){

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

    //supprimer un article
    //delet/{id}
    public function deletArticleAction($id){
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
