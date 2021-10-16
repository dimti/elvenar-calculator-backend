<?php namespace Dimti\Elvenar\Classes;

use Dimti\Elvenar\Classes\BuildingTypes\CultureBuildingType;
use Dimti\Elvenar\Classes\BuildingTypes\ManufactureBuildingType;
use Dimti\Elvenar\Classes\BuildingTypes\ResidenceBuildingType;

abstract class BuildingType
{
    const BUILDING_TYPE_RESIDENCE = 'residence';
    const BUILDING_TYPE_CULTURE = 'culture';
    const BUILDING_TYPE_MANUFACTURE = 'manufacture';

    private static $buildingTypes = [
        BuildingType::BUILDING_TYPE_RESIDENCE,
        BuildingType::BUILDING_TYPE_CULTURE,
        BuildingType::BUILDING_TYPE_MANUFACTURE,
    ];

    public static $buildingTypesLabels = [
        BuildingType::BUILDING_TYPE_RESIDENCE => 'dimti.elvenar::lang.common.building_type_residence',
        BuildingType::BUILDING_TYPE_CULTURE => 'dimti.elvenar::lang.common.building_type_culture',
        BuildingType::BUILDING_TYPE_MANUFACTURE => 'dimti.elvenar::lang.common.building_type_manufacture',
    ];

    private static $classToBuildingType = [
        ResidenceBuildingType::class => BuildingType::BUILDING_TYPE_RESIDENCE,
        CultureBuildingType::class => BuildingType::BUILDING_TYPE_CULTURE,
        ManufactureBuildingType::class => BuildingType::BUILDING_TYPE_MANUFACTURE,
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
