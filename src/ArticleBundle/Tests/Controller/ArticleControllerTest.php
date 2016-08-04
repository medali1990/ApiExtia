<?php

namespace ArticleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testGetarticles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'gets');
    }

    public function testGetarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'get/{id]');
    }

    public function testPostarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'save');
    }

    public function testDeletarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'delet/{id}');
    }

}
