<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property string|null $staffno
 * @property string|null $fullname
 * @property string|null $department
 *
 * @property \App\Model\Entity\Attendance[] $attendances
 */
class Staff extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'staffno' => true,
        'fullname' => true,
        'department' => true,
        'attendances' => true
    ];
}
