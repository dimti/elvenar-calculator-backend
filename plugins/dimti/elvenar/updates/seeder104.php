<?php namespace Dimti\Elvenar\Updates;

use Dimti\Elvenar\Models\Level;
use Seeder;

class Seeder104 extends Seeder
{

    public function run()
    {
        for ($i = 1; $i <= 18; $i++) {
            $level = new Level();

            $level->label = $this->numberToRomanRepresentation($i);

            $level->save();
        }
    }

    /**
     * @param int $number
     * @return string
     * @see https://stackoverflow.com/a/15023547/1790808
     */
    function numberToRomanRepresentation($number) {
        $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $returnValue = '';
        while ($number > 0) {
            foreach ($map as $roman => $int) {
                if($number >= $int) {
                    $number -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }
}