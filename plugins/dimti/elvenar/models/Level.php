<?php namespace Dimti\Elvenar\Models;

use Model;
use Winter\Storm\Database\Traits\Sortable;

/**
 * Model
 */
class Level extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use Sortable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dimti_elvenar_levels';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
