<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ReactController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ReactController Test Case
 *
 * @uses \App\Controller\ReactController
 */
class ReactControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.React',
    ];
}
