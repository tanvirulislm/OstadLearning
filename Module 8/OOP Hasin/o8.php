<?php 
class DailyAccount{
    public function __construct(public $deposit){}
    private $items = [];
    private $total = 0;

    function addItem($name, $cost){
        $this->total += $cost;
        if($this->total > $this->deposit){
            echo "Error: You don't have enough balance.\n";
            $this->total -= $cost;
            return;
        }
        $this->items[$name] = $cost;
    }

    function createReport(){
        echo "Initial Deposit was {$this->deposit}.\n";
        foreach($this->items as $name=>$cost){
            echo "{$name} - {$cost}\n";
        }
        echo "-----------------------------\n";
        echo "Total: {$this->total}\n";
        echo "Balance: ".($this->deposit - $this->total)."\n";

    }
}

$dailyAccount = new DailyAccount(1500); //instantiate
$dailyAccount->addItem("Kacha Morich", 100);
$dailyAccount->addItem("Alu", 50);
$dailyAccount->addItem("Dim", 180);
$dailyAccount->addItem("Murgi", 300);
$dailyAccount->addItem("Ghee", 800);
$dailyAccount->createReport();
