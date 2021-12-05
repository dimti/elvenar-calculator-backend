<?php namespace Dimti\Elvenar\Models;

use Model;
use RainLab\User\Models\User;

/**
 * Model
 */
class UserBuilding extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dimti_elvenar_user_buildings';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'user' => User::class,
        'building' => Building::class,
        'level' => [
            Level::class,
        ],
    ];
}
