<?php
    class Lingkaran { // buka class
    private $jari;
    const PHI = 3.14;
    function __construct( $r )
{
    $this->jari = $r;
}
    function getLuas()
{
    return self::PHI * $this->jari * $this->jari ;
}
    function getKeliling()
{
    return 2 * self::PHI * $this->jari;
        }
    }

echo"Nilai PHI" .Lingkaran ::PHI; 
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(5);
echo "<br/>Luas Lingkaran I ".$lingkar1->getLuas();
echo "<br>Luas Lingkaran II ".$lingkar2->getLuas();
echo "Keliling Lingkaran I ".$lingkar1->getKeliling();
echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();

?>