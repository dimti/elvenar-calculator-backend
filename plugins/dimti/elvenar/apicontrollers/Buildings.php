<?php namespace Foo\Bar\ApiControllers;

use Dimti\Elvenar\Models\Building;
use Dimti\Elvenar\Transformers\BuildingTransformer;
use Octobro\API\Classes\ApiController;

class Products extends ApiController
{
    public function index()
    {
        $products = Building::get();

        return $this->respondwithCollection($products, new BuildingTransformer());
    }

    public function show($id)
    {
        $product = Building::find($id);

        return $this->respondwithItem($product, new BuildingTransformer);
    }
}
