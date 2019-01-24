<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 *
 */
class RolesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'role_name' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => 'Name of the role. Example Admin, Teacher, Student, Super-Admin', 'precision' => null, 'fixed' => null],
        'comment' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => 'Comment of any  roles', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => 'Time of created roles', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => 'Time of modified roles', 'precision' => null],
        'status' => ['type' => 'string', 'length' => 2, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'role_name' => 'Lorem ipsum dolor sit amet',
                'comment' => 'Lorem ipsum dolor sit amet',
                'created' => 1548235065,
                'modified' => 1548235065,
                'status' => 'Lo'
            ],
        ];
        parent::init();
    }
}
