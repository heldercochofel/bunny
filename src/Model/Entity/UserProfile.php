<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserProfile Entity
 *
 * @property int $id
 * @property int $user_iduser
 * @property int $category_idcategory
 * @property string $text
 * @property int $source_idsource
 * @property \Cake\I18n\FrozenTime $timestamp
 * @property int $active
 */
class UserProfile extends Entity
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
        'user_iduser' => true,
        'category_idcategory' => true,
        'text' => true,
        'source_idsource' => true,
        'timestamp' => true,
        'active' => true
    ];
}
