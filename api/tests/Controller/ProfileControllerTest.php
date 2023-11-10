<?php

namespace Tests\Unit\Controller;

use App\Controller\ProfileController;
use PHPUnit\Framework\TestCase;

/**
 * Class ProfileControllerTest.
 *
 * @covers \App\Controller\ProfileController
 */
final class ProfileControllerTest extends TestCase
{
    private ProfileController $profileController;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->profileController = new ProfileController();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->profileController);
    }

    public function testProfile(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testEditProfileUpload(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testUploadPicture(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testDeleteProfile(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}
