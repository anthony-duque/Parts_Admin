<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
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
                'userName' => 'Lorem ipsum d',
                'firstName' => 'Lorem ipsum d',
                'lastName' => 'Lorem ipsum dolor ',
                'cellNumber' => 1,
                'cellService' => 'Lorem ipsum dolor ',
                'deptCode' => '',
                'email' => 'Lorem ipsum dolor sit amet',
                'notify' => 1,
                'notif_preference' => 'Lorem ip',
                'locID' => 1,
            ],
        ];
        parent::init();
    }
}
