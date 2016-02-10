<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Tools\Auth\AuthUserTrait;
use App\Controller\AppController; // Don't forget to use namespace of your Controller
use App\Controller\UsersController; // Don't forget to use namespace of your Controller

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

    public function navbar($user)
    {
        $this -> set ('user', $user);
    }
}