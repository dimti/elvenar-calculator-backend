<?php namespace Dimti\Elvenar\Models;

use Backend\Models\ExportModel;

class BuildingExport extends ExportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function exportData($columns, $sessionKey = null)
    {
        $menus = Building::all();

        $menus->each(function ($menu) use ($columns) {
            $menu->addVisible($columns);
        });

        return $menus->toArray();
    }
}
