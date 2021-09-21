<?php namespace Dimti\Elvenar\Transformers;

use Dimti\Elvenar\Models\Building;
use Octobro\API\Classes\Transformer;

/**
 * BuildingTransformer for Dimti\Elvenar\Models\Building
 */
class BuildingTransformer extends Transformer
{
    public function data(Building $building)
    {
        return [
            'id'    => (int) $building->id
        ];
    }
}