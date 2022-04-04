<?php
    class persegi_panjang { 
    public $panjang;
    public $lebar;
    function __construct($panjang, $lebar )
{
    $this->panjang=$panjang;
    $this->lebar=$lebar;

}
    function getLuas()
{
    return  $this->panjang * $this->lebar ;
}
    function getKeliling()
{
    return 2 * ($this->panjang + $this->lebar);
        }
    }

$persegi_panjangI = new persegi_panjang(20, 10);
$persegi_panjangII = new persegi_panjang(30, 15);
echo "<br/>Luas  Persegi_panjangI ".$persegi_panjangI->getLuas();
echo "<br>Luas Persegi_panjangII ".$persegi_panjangII->getLuas();
echo "Keliling Persegi_panjangI  ".$persegi_panjangI->getKeliling();
echo "<br>Keliling Persegi_panjangII ".$persegi_panjangII->getKeliling();

?>