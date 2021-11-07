<?php namespace Dimti\Elvenar\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ImportExportController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\RelationController;
use Backend\Widgets\Lists;
use BackendMenu;
use Backend\Classes\Controller;
use Dimti\Elvenar\Models\Building;

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

    /**
     * @param $widget
     * @param $field
     * @param $model
     * @see https://wintercms.com/docs/backend/relations#extend-manage-widget
     */
    public function relationExtendManageWidget(Lists $widget, string $field, Building $model)
    {
        if (!in_array($field, ['residence', 'culture', 'manufacture'])) {
            return;
        }

        if (post('Building.no_levels')) {
            $widget->addFilter(function ($query) {
                $query->whereLabel('I');
            });
        }
    }
}
