<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        self::assertEquals(200, $client->getResponse()->getStatusCode());

        $response = \json_decode((string) $client->getResponse()->getContent(), true);
        self::assertIsArray($response);
        self::assertEquals('Are you a curious dolphin?', $response['message']);
    }
}
