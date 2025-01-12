<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\Category;
use Freshdesk\tests\TestCase;

/**
 * Category resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class CategoryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->class = Category::class;
    }

    public static function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
        ];
    }
}
