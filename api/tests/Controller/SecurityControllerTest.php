<?php

namespace Tests\Unit\Controller;

use App\Controller\SecurityController;
use PHPUnit\Framework\TestCase;

/**
 * Class SecurityControllerTest.
 *
 * @covers \App\Controller\SecurityController
 */
final class SecurityControllerTest extends TestCase
{
    private SecurityController $securityController;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->securityController = new SecurityController();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->securityController);
    }

    public function testLogin(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testLogout(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}
