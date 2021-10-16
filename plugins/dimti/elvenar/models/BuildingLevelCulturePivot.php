<?php namespace Dimti\Elvenar\Models;

use Winter\Storm\Database\Pivot;

/**
 * Model
 */
class BuildingLevelCulturePivot extends Pivot
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dimti_elvenar_building_level';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'population' => 'numeric|min:0',
        'culture' => 'numeric|min:0',
    ];
}
