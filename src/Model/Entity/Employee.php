<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $userName
 * @property string|null $firstName
 * @property string|null $lastName
 * @property int|null $cellNumber
 * @property string|null $cellService
 * @property string|null $deptCode
 * @property string|null $email
 * @property bool|null $notify
 * @property string|null $notif_preference
 * @property int $locID
 */
class Employee extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'userName' => true,
        'firstName' => true,
        'lastName' => true,
        'cellNumber' => true,
        'cellService' => true,
        'deptCode' => true,
        'email' => true,
        'notify' => true,
        'notif_preference' => true,
        'locID' => true,
    ];
}
