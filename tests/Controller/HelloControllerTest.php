<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/hello/Puggers');

        self::assertEquals(200, $client->getResponse()->getStatusCode());

        $response = \json_decode((string) $client->getResponse()->getContent(), true);
        self::assertIsArray($response);
        self::assertEquals('Hello Puggers', $response['message']);
    }
}
