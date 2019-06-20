<?php
    class NightsWatch implements IFighter
    {
        private $soilder = array();
        public function recruit($s)
        {
            $this->soilder[] = $s;
        }
        function fight()
        {
            foreach ($this->soilder as $s) {
                if (method_exists(get_class($s), 'fight'))
                    $s->fight();
            }
        }
    }
?>