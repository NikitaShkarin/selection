<?php
interface strategy {
    public function getTotalAmount($price);
}
class _0 implements strategy {
    public function getTotalAmount($price) {
        $percent = 0;
        $result = $price + ($price * $percent / 100);
        echo "Заказ на сумму ". $price . "$, налог: ". $percent . "%, итого: ". $result . "$ <br/>";
    }
}
class _5 implements strategy {
    public function getTotalAmount($price) {
        $percent = 5;
        $result = $price + ($price * $percent / 100);
        echo "Заказ на сумму ". $price . "$, налог: ". $percent . "%, итого: ". $result . "$ <br/>";
    }
}
class _20 implements strategy {
    public function getTotalAmount($price) {
        $percent = 20;
        $result = $price + ($price * $percent / 100);
        echo "Заказ на сумму ". $price . "$, налог: ". $percent . "%, итого: ". $result . "$ <br/>";
    }
}
class logic {
    public $percent;

    public function __construct($percent)
    {
        $this->percent = $percent;
    }

    public function doLogic($price) {
        if ($this->percent == 0) {
            $create = new _0;
        } elseif ($this->percent == 5) {
            $create = new _5;
        } elseif ($this->percent == 20) {
            $create = new _20;
        } else {
            echo "An error occured";
            exit;
        }
        $create->getTotalAmount($price);
    }
}

$a_tax = array(0, 5, 20, 15);
$a_price = array(100,500);

foreach ($a_tax as $tax) {
    foreach ($a_price as $price) {
        $test = new logic ($tax);
        $test->doLogic($price);
    }
}
?>