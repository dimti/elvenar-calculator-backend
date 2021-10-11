<?php namespace Dimti\Elvenar\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ImportExportController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\RelationController;
use BackendMenu;
use Backend\Classes\Controller;

/**
 * Buildings Back-end Controller
 */
class Buildings extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        FormController::class,
        ListController::class,
        ImportExportController::class,
        RelationController::class,
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Dimti.Elvenar', 'elvenar', 'buildings');
    }
}
