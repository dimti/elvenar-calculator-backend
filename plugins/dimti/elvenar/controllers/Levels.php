<?php namespace Dimti\Elvenar\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\ReorderController;
use Backend\Classes\Controller;
use BackendMenu;

class Levels extends Controller
{
    public $implement = [
        ListController::class,
        FormController::class,
        ReorderController::class
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dimti.Elvenar', 'elvenar', 'elvenar_levels');
    }
}
