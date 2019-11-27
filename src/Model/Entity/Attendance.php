<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendance Entity
 *
 * @property int $id
 * @property int|null $event_id
 * @property int|null $staff_id
 * @property \Cake\I18n\FrozenTime|null $time
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\Staff $staff
 */
class Attendance extends Entity
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
        'event_id' => true,
        'staff_id' => true,
        'time' => true,
        'event' => true,
        'staff' => true
    ];
}
