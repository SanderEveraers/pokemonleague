<?php
// src/Model/Table/EentsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class EventsTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('eventname', 'An eventname is required')
            ->notEmpty('description', 'A description is required')
            ->notEmpty('location', 'A location is required')
            ->notEmpty('startdate', 'Start date of event is required')
            ->notEmpty('enddate', 'End date of event is required')
            ;
    }

}