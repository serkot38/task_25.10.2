<?php
    interface TransportsInterface {
        public function nitroOxide();
    }

    abstract class Transports implements TransportsInterface {
        public function gearForward() {}
        public function gearBack() {}
        public function nitroOxide() {}
        public function bucketControl() {}
        
    }

    class Auto extends Transports {
        public function gearForward() {}
        public function gearBack() {}
        public function nitroOxide() {}
    }

    class Tank extends Transports {
        public function gearForward() {}
        public function gearBack() {}
    }

    class Speauto extends Transports {
        public function gearForward() {}
        public function gearBack() {}
        public function bucketControl() {}
    }

    $auto = new Auto();
    $tank = new Tank();
    $speauto = new Speauto();

    function testTransports(Auto $auto, Tank $tank, Speauto $speauto) {
        $auto->zooming();
        $tank->zooming();
        $speauto->zooming();
        $auto->includeJanitors();
        $tank->includeJanitors();
        $speauto->includeJanitors();
    }

    function salonTransports(Auto $auto, Tank $tank, Speauto $speauto) {
        $auto->salon = 'кожа';
        $tank->salon = 'сталь';
        $speauto->salon = 'ткань';
    }
?>