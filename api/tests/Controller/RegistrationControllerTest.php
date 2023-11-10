<?php

namespace Tests\Controller;

use App\Controller\RegistrationController;
use App\Security\EmailVerifier;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class RegistrationControllerTest.
 *
 * @covers \App\Controller\RegistrationController
 */
final class RegistrationControllerTest extends TestCase
{
    private RegistrationController $registrationController;

    private EmailVerifier|MockObject $emailVerifier;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->emailVerifier = $this->createMock(EmailVerifier::class);
        $this->registrationController = new RegistrationController($this->emailVerifier);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->registrationController);
        unset($this->emailVerifier);
    }

    public function testRegister(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testVerifyUserEmail(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}


// namespace App\Tests\Controller;

// use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
// use App\Repository\UserRepository;

// class RegistrationControllerTest extends WebTestCase
// {
//     public function testShowRegistration(): void
//     {
//         $client = static::createClient();
//         $crawler = $client->request('GET', 'app/register');

//         $this->assertResponseIsSuccessful();
//         $this->assertSelectorTextContains('h1', 'Register');
//     }

//     public function testSubmitRegistration(): void
//     {
//         $client = static::createClient();
//         $crawler = $client->request('GET', 'app/register');

//         $form = $crawler->selectButton('Register')->form([
//             'registration_form[username]' => 'TestUser',
//             'registration_form[email]' => 'testuser@example.com',
//             'registration_form[birthday]' => '1990-01-01', // Assuming the birthday format is YYYY-MM-DD
//             'registration_form[plainPassword]' => 'Password123',
//             'registration_form[agreeTerms]' => true,
//         ]);

//         $client->submit($form);

//         $this->assertResponseRedirects('app/home');

//         $userRepository = self::getContainer()->get(UserRepository::class);
//         $user = $userRepository->findOneByEmail('testuser@example.com');

//         $this->assertNotNull($user);
//         $this->assertSame('TestUser', $user->getUsername());
//     }

//     public function testInvalidDataSubmission(): void
//     {
//         $client = static::createClient();
//         $crawler = $client->request('GET', 'app/register');

//         $form = $crawler->selectButton('Register')->form([
//             'registration_form[username]' => '',
//             'registration_form[email]' => 'not_an_email',
//             'registration_form[birthday]' => 'invalid_birthday',
//             'registration_form[plainPassword]' => '123',
//             'registration_form[agreeTerms]' => false,
//         ]);

//         $client->submit($form);

//         $this->assertResponseStatusCodeSame(422); // Assuming you return a 422 status code for validation errors
//         $this->assertSelectorTextContains('.error', 'This value should not be blank.');
//         $this->assertSelectorTextContains('.error', 'This value is not a valid email address.');
//         $this->assertSelectorTextContains('.error', 'This value is not a valid date.');
//         $this->assertSelectorTextContains('.error', 'This value is too short.');
//         // Add more assertions for other validation errors if needed
//     }
// }
