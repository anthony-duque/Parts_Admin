<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StageHeadingsFixture
 */
class StageHeadingsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'Description' => 'Lorem ipsum dolor sit amet',
                'Order_no' => 1,
                'Loc_ID' => 1,
            ],
        ];
        parent::init();
    }
}
