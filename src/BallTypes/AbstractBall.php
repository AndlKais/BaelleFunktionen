<?php
    namespace HTL3R\Balle\BallTypes;

    abstract class Ball implements \HTL3R\Balls\Interfaces\BallInterface {

        protected $name;
        protected $durchmesser;
        protected $material;

        function __construct(string $name, float $durchmesser, string $material)
        {
            $this->name = $name;
            $this->durchmesser = $durchmesser;
            $this->material = $material;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getDurchmesser(): float
        {
            return $this->durchmesser;
        }

        public function getMaterial(): string
        {
            return $this->material;
        }

        public function getVolumen(): float
        {
            return (1/3)*4*($this->durchmesser/2)*($this->durchmesser/2)*($this->durchmesser/2)*pi();
        }

        public function __toString() : string
        {
            
            $rv = <<<EOT
        Name: $this->name<br />
        Durchmesser: $this->durchmesser<br />
        Material: $this->material<br />
EOT;
            return $rv;
        }
    }
