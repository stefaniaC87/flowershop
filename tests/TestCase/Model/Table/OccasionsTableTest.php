<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OccasionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OccasionsTable Test Case
 */
class OccasionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OccasionsTable
     */
    protected $Occasions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Occasions',
        'app.Flowers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Occasions') ? [] : ['className' => OccasionsTable::class];
        $this->Occasions = TableRegistry::getTableLocator()->get('Occasions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Occasions);

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
}
