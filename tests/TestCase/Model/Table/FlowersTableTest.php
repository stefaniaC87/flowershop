<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlowersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlowersTable Test Case
 */
class FlowersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FlowersTable
     */
    protected $Flowers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Flowers',
        'app.Occasions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Flowers') ? [] : ['className' => FlowersTable::class];
        $this->Flowers = TableRegistry::getTableLocator()->get('Flowers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Flowers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
