<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CellEmailLookupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CellEmailLookupsTable Test Case
 */
class CellEmailLookupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CellEmailLookupsTable
     */
    protected $CellEmailLookups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CellEmailLookups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CellEmailLookups') ? [] : ['className' => CellEmailLookupsTable::class];
        $this->CellEmailLookups = $this->getTableLocator()->get('CellEmailLookups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CellEmailLookups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CellEmailLookupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
