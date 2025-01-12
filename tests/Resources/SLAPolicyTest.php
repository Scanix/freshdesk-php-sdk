<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\SLAPolicy;
use Freshdesk\tests\TestCase;

/**
 * SLA Policy resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class SLAPolicytest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->class = SLAPolicy::class;
    }

    public static function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
