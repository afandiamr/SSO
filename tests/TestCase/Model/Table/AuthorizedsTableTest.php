<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorizedsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorizedsTable Test Case
 */
class AuthorizedsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthorizedsTable
     */
    public $Authorizeds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Authorizeds',
        'app.Roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Authorizeds') ? [] : ['className' => AuthorizedsTable::class];
        $this->Authorizeds = TableRegistry::getTableLocator()->get('Authorizeds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Authorizeds);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
