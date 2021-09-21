<?php namespace Dimti\Elvenar\Models;

use Backend\Models\ImportModel;

class BuildingImport extends ImportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function importData($results, $sessionKey = null)
    {
        Building::query()->delete();

        foreach ($results as $row => $data) {
            try {
                $subscriber = new Building();
                $subscriber->fill($data);
                $subscriber->save();

                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }
}
