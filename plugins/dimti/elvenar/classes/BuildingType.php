<?php namespace Dimti\Elvenar\Classes;

use Dimti\Elvenar\Classes\BuildingTypes\DeductBuildingType;
use Dimti\Elvenar\Classes\BuildingTypes\GiverBuildingType;

abstract class BuildingType
{
    const BUILDING_TYPE_GIVER = 'giver';

    const BUILDING_TYPE_DEDUCT = 'deduct';

    private static $buildingTypes = [
        BuildingType::BUILDING_TYPE_GIVER,
        BuildingType::BUILDING_TYPE_DEDUCT,
    ];

    public static $buildingTypesLabels = [
        BuildingType::BUILDING_TYPE_GIVER => 'dimti.elvenar::lang.common.building_type_giver',
        BuildingType::BUILDING_TYPE_DEDUCT => 'dimti.elvenar::lang.common.building_type_deduct',
    ];

    private static $classToBuildingType = [
        GiverBuildingType::class => BuildingType::BUILDING_TYPE_GIVER,
        DeductBuildingType::class => BuildingType::BUILDING_TYPE_DEDUCT,
    ];

    /**
     * @return string
     * @throws \ErrorException
     * @desc Get building type key for saving in the database
     */
    public function getBuildingType(): string
    {
        if (!array_key_exists(get_class($this), self::$classToBuildingType)) {
            throw new \ErrorException('Not allowed building type class: "' . get_class($this) . '"');
        }

        return self::$classToBuildingType[get_class($this)];
    }
}
