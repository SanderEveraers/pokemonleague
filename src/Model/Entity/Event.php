<?php
// src/Model/Entity/Event.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Event extends Entity
{

    // Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'created' => false,
        'modified' => false
    ];

    // ...

    // ...
}
