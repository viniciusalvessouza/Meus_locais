<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocaisTable Test Case
 */
class LocaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LocaisTable
     */
    protected $Locais;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Locais',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Locais') ? [] : ['className' => LocaisTable::class];
        $this->Locais = TableRegistry::getTableLocator()->get('Locais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Locais);

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
