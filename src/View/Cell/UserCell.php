<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Tools\Auth\AuthUserTrait;

/**
 * User cell
 */
class UserCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
    }

    public function navbar()
    {
        $this->set(['userData' => $userData]);
    }
}
