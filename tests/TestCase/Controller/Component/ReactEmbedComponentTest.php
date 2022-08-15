<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ReactEmbedComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ReactEmbedComponent Test Case
 */
class ReactEmbedComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ReactEmbedComponent
     */
    protected $ReactEmbed;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->ReactEmbed = new ReactEmbedComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ReactEmbed);

        parent::tearDown();
    }
}
