<?php

namespace App\Tests\controllers;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WelcomePageTest extends WebTestCase
{
    public function testShowHomepage()
    {
        $client = static::createClient();
        $client->request('GET', '/');

        self::assertSelectorTextContains('html h1.title', 'Hello World');
    }

}
