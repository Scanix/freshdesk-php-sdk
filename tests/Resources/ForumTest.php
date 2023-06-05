<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\Forum;
use Freshdesk\tests\TestCase;

/**
 * Form resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ForumTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->class = Forum::class;
    }

    public static function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
            ['monitor'],
            ['unmonitor'],
            ['monitorStatus'],
        ];
    }
}
