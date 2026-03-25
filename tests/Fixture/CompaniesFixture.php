<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompaniesFixture
 */
class CompaniesFixture extends TestFixture
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
                'Company_Code' => 'Lorem ipsum dolor sit amet',
                'Address' => 'Lorem ipsum dolor sit amet',
                'Name' => 'Lorem ipsum dolor sit amet',
                'Pass_Code' => 'Lorem ipsum d',
                'Phone' => 'Lorem ipsum dolor ',
                'Account_Start_Date' => '2026-03-25',
                'Account_End_Date' => '2026-03-25',
                'Contact_Person' => 'Lorem ipsum dolor sit amet',
                'Email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
