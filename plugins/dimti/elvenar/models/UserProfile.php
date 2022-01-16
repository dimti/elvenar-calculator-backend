<?php namespace Dimti\Elvenar\Models;

use Model;
use October\Rain\Database\Traits\SoftDelete;
use October\Rain\Database\Traits\Validation;
use RainLab\User\Models\User;

/**
 * Model
 */
class UserProfile extends Model
{
    use Validation;

    use SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dimti_elvenar_user_profiles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'user' => User::class,
    ];

    public $hasMany = [
        'user_buildings' => [
            UserBuilding::class,
            'key' => 'user_id',
            'otherKey' => 'user_id',
        ],
    ];
}
