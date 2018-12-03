<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserProfileFixture
 *
 */
class UserProfileFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_profile';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_iduser' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'category_idcategory' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'text' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'source_idsource' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'timestamp' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'active' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_user_profile_user' => ['type' => 'index', 'columns' => ['user_iduser'], 'length' => []],
            'FK_user_profile_profile_category' => ['type' => 'index', 'columns' => ['category_idcategory'], 'length' => []],
            'FK_user_profile_services_config' => ['type' => 'index', 'columns' => ['source_idsource'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_user_profile_profile_category' => ['type' => 'foreign', 'columns' => ['category_idcategory'], 'references' => ['profile_category', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_user_profile_services_config' => ['type' => 'foreign', 'columns' => ['source_idsource'], 'references' => ['services_config', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_user_profile_user' => ['type' => 'foreign', 'columns' => ['user_iduser'], 'references' => ['user', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
                'user_iduser' => 1,
                'category_idcategory' => 1,
                'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'source_idsource' => 1,
                'timestamp' => 1543780050,
                'active' => 1
            ],
        ];
        parent::init();
    }
}
