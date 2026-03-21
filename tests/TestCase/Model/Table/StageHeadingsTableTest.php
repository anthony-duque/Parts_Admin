<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StageHeadingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StageHeadingsTable Test Case
 */
class StageHeadingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StageHeadingsTable
     */
    protected $StageHeadings;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.StageHeadings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StageHeadings') ? [] : ['className' => StageHeadingsTable::class];
        $this->StageHeadings = $this->getTableLocator()->get('StageHeadings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StageHeadings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StageHeadingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
