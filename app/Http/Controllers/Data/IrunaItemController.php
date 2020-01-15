<?php

namespace App\Http\Controllers\Data;

use App\Ai;
use App\Equipment;
use App\Http\Controllers\Controller;
use App\Items;
use App\Relic;
use Illuminate\Http\Request;
use App\User;
use App\Xtal;

class IrunaItemController extends Controller
    {
        public function ItemStatistic(){
            list($xtalCollection, $equipmentCollection, $materialCollection, $relicCollection, $alCrystasCollection) = $this->getItemsOnSaleStatistic();


            $equip = $this->sortByPopular($equipmentCollection);
            $xtal = $this->sortByPopular($xtalCollection);
            $material = $this->sortByPopular($materialCollection);
            $relic = $this->sortByPopular($relicCollection);
            $alCrystas = $this->sortByPopular($alCrystasCollection);
            //$xtalPrice = Xtal::groupBy('name')->selectRaw('avg(price) as average')->get();

            return [$xtal, $equip, $material, $relic, $alCrystas];
        }

        /**
         * @param integer $limitNumber
         * @return collection 
         * @description return collection of Xtal groupBy name and their average price
         */

        private function getXtalStatistic($limitNumber)
        {

            return Xtal::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as average_price, sum(quantity) as quantity')->limit($limitNumber)->get();

        }

        /**
         * @param integer $limitNumber
         * @return collection 
         * @description return collection of Equipment groupBy name and their average price
         */

        private function getEquipmentStatistic($limitNumber)
        {

            return Equipment::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as average_price, count(*) as quantity')->limit($limitNumber)->get();

            
        }

        /**
         * @param integer $limitNumber
         * @return collection
         */
        private function getAlCrystasStatistic($limitNumber)
        {

            return Ai::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as average_price, sum(quantity) as quantity')->limit($limitNumber)->get();

        }

        /**
         * @param integer $limitNumber
         * @return collection
         */

        private function getMaterialStatistic($limitNumber)
        {

            return Items::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as average_price, sum(quantity) as quantity')->limit($limitNumber)->get();

        }

        /**
         * @param integer $limitNumber
         * @return collection
         */

        private function getRelicStatistic($limitNumber)
        {

            return Relic::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as average_price, sum(quantity) as quantity')->limit($limitNumber)->get();

        }

        /**
         * @param none
         * @return array
         */

        private function getItemsOnSaleStatistic(){
            $xtalCollection = $this->getXtalStatistic(10);
            $equipmentCollection = $this->getEquipmentStatistic(10);
            $materialCollection = $this->getMaterialStatistic(10);
            $relicCollection = $this->getRelicStatistic(10);
            $alCrystasCollection = $this->getAlCrystasStatistic(10);

            return array($xtalCollection, $equipmentCollection, $materialCollection, $relicCollection, $alCrystasCollection);
        }
        /**
         * @description sort the collection by number of post. 
         * @return array
         */
        private function sortByPopular($collection){
            return collect($collection)->sortBy('total')->reverse()->toArray();
        }
    }

?>