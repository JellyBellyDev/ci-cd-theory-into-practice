<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CheckControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/healthz');

        self::assertEquals(200, $client->getResponse()->getStatusCode());

        $response = $client->getResponse()->getContent();
        self::assertIsString($response);
        self::assertEquals('OK', $response);
    }
}
