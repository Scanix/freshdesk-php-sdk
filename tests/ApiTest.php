<?php

namespace Freshdesk\tests;

use Freshdesk\Api;
use PHPUnit\Framework\Attributes\DataProvider;

/**
 * Api tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ApiTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->class = Api::class;
    }

    public static function methodsThatShouldExist()
    {
        return [
            ['request'],
        ];
    }

    #[DataProvider('publicPropertiesThatShouldExist')]
    public function testPublicPropertiesAreAccessible($property)
    {
        $this->assertTrue(property_exists($this->class, $property));
    }

    public static function publicPropertiesThatShouldExist()
    {
        return [
            ['agents'],
            ['companies'],
            ['contacts'],
            ['groups'],
            ['tickets'],
            ['conversations'],
            ['categories'],
            ['forums'],
            ['topics'],
            ['comments'],
            ['emailConfigs'],
            ['products'],
            ['businessHours'],
            ['slaPolicies'],
        ];
    }
}
