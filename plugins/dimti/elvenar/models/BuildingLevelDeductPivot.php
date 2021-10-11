<?php namespace Dimti\Elvenar\Models;

use Winter\Storm\Database\Pivot;
use Winter\Storm\Database\Traits\Nullable;

/**
 * Model
 */
class BuildingLevelDeductPivot extends Pivot
{
    use \October\Rain\Database\Traits\Validation;

    use Nullable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $nullable = [
        'population',
        'culture',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dimti_elvenar_building_level';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'population' => 'numeric|max:0',
        'culture' => 'numeric|max:0',
    ];
}
