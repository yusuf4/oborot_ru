<?php
                        /*   Условия
                           В саду посажано 10 яблонь и 15 груш;
                           С одной яблони можно собрать 40-50 яблок;
                           С одной груши можно собрать 0-20 груш;
                           У каждого дерева в саду есть уникальный регистрационный номер.
                     */
$trees=[
    "appleTree"=>[   // 10 Apple Trees
        ["id"=>1, "fruits"=>41],
        ["id"=>2, "fruits"=>47],
        ["id"=>3, "fruits"=>42],
        ["id"=>4, "fruits"=>50],
        ["id"=>5, "fruits"=>44],
        ["id"=>6, "fruits"=>46],
        ["id"=>7, "fruits"=>45],
        ["id"=>8, "fruits"=>49],
        ["id"=>9, "fruits"=>40],
        ["id"=>10, "fruits"=>50]
    ],
    "pearTree"=>[  // 15 Pear Trees
        ["id"=>11, "fruits"=>3],
        ["id"=>12, "fruits"=>5],
        ["id"=>13, "fruits"=>2],
        ["id"=>14, "fruits"=>3],
        ["id"=>15, "fruits"=>5],
        ["id"=>16, "fruits"=>2],
        ["id"=>17, "fruits"=>3],
        ["id"=>18, "fruits"=>5],
        ["id"=>19, "fruits"=>2],
        ["id"=>20, "fruits"=>3],
        ["id"=>21, "fruits"=>5],
        ["id"=>22, "fruits"=>2],
        ["id"=>23, "fruits"=>3],
        ["id"=>24, "fruits"=>5],
        ["id"=>25, "fruits"=>2]
    ],
];

$AppleTree=[];
$PearTree=[];
for($i=0; $i<count($trees["appleTree"]); $i++){
    $AppleTree[]=$trees["appleTree"][$i];
}
for($i=0; $i<count($trees["pearTree"]); $i++){
    $PearTree[]=$trees["pearTree"][$i];
}


class AppleTree{
    public $id;
    public $apple = [];
    function __construct($arg){
        $this->apple=$arg;
        echo "Apple garden get  ". $this->TotalFruitsApple(). " apples: \r\n";
        echo "In apple garden ". count($this->apple). " trees \r\n";
    }

    public function TotalFruitsApple(){
        $sum=0;
        for($i=0; $i<count($this->apple); $i++){
            $sum+=$this->apple[$i]["fruits"];
        }
        return $sum;
    }
}

class PearTree extends AppleTree{
    public $id;
    public $pear = [];
    function __construct($arg){
        $this->pear=$arg;
        echo "Pear garden get  ". $this->TotalFruitsPear(). " pears:  \r\n";
        echo "In pear garden ". count($this->pear). " trees \r\n";
    }

    public function TotalFruitsPear(){
        $sum =0;
        for($i=0; $i<count($this->pear); $i++){
            $sum+=$this->pear[$i]["fruits"];
        }
        return $sum;
    }
}
class Garden{
    public $id;
    public $total;
    function __construct($apple, $pear){
        $appleGarden = new AppleTree($apple);
        $pearGarden = new PearTree($pear);
        echo "Total fruits in garden: ".$this->total = $appleGarden->TotalFruitsApple()+$pearGarden->TotalFruitsPear();
    }
}

$garden = new Garden($AppleTree, $PearTree);