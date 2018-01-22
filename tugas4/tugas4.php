<?php
class urutan_bilangan
{
    protected $_asort;
    
    public function __construct(array $asort)
     {
        $this->_asort = $asort;
     }
    public function alhsort()
     {
        $sorted = $this->_asort;
        sort($sorted);
        return $sorted;
      }
}
$sortarray = new urutan_bilangan(array(-5, -4, 1, 12, 0, 13, -10));
print_r($sortarray->alhsort())."\n";
?>
