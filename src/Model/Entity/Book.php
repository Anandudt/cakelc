<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string $book_name
 * @property int $pub_id
 * @property int $aut_id
 * @property string $volume
 * @property string $category
 * @property string $subcategory
 * @property float $price
 * @property \Cake\I18n\FrozenDate $pub_date
 *
 * @property \App\Model\Entity\Publisher $publisher
 * @property \App\Model\Entity\Author $author
 */
class Book extends Entity
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
        '*' => true,
        'id' => false
    ];
}
