<?php namespace Dimti\Elvenar\Models;

use Dimti\Elvenar\Classes\BuildingType;
use Model;
use Winter\Storm\Database\Builder;

/**
 * Building Model
 */
class Building extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dimti_elvenar_buildings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'id',
        'name',
        'building_type',
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $hasOneThrough = [];
    public $hasManyThrough = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * @param BuildingType $buildingType
     * @throws \ErrorException
     */
    final public function setBuildingTypeAttribute(BuildingType $buildingType): void
    {
        $this->attributes['building_type'] = $buildingType->getBuildingType();
    }

    public function getBuildingTypeOptions()
    {
        return collect(BuildingType::$buildingTypesLabels)->map(fn ($label) => \Lang::get($label))->toArray();
    }

    public function scopeBuildingType(Builder $query, string $buildingType)
    {
        $query->whereBuildingType($buildingType);
    }
}
