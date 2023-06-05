<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\Conversation;
use Freshdesk\tests\TestCase;

/**
 * Conversation resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ConversationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->class = Conversation::class;
    }

    public static function methodsThatShouldExist()
    {
        return [
            ['reply'],
            ['note'],
            ['update'],
            ['delete'],
        ];
    }
}
