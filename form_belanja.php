<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="tab1">
        <h3>Formulir Belanja Online</h3>
        <hr/> <br> <br>
        <div class="box">
        <form method="POST" >
            <div class="form-group row">
                <label for="cust" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="cust" name="cust" placeholder="Nama Customer" type="text" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4" name="produk">Produk</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kompor" id="kompor" type="radio" class="custom-control-input" value="kompor"> 
                        <label for="kompor" name="kompor" class="custom-control-label">Kompor</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kulkas" id="kulkas" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="kulkas" name="kulkas" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="mesin_cuci" id="mesin_cuci" type="radio" class="custom-control-input" value="mesincuci"> 
                        <label for="mesin_cuci" name="mesin_cuci" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <br></br>
    <div class="tab2">
        <table rules="all" border="1" class="box1">
            <tbody>
                <tr class="tr1">
                <td>Daftar Produk</td>
                </tr>
                <tr>
                    <td>Kompor : 3.000.000</td>
                </tr>
                <tr>
                    <td>Kulkas : 4.000.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci : 5.000.000</td>
                </tr>
            </tbody>
        </table>
    </div>
<hr>

<?php
 $nama = isset ($_POST['cust']) ? $_POST['cust'] : '';
 $produk = isset ($_POST['produk']) ? $_POST['produk'] : '';
 $jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : '';
 
 if($produk = "kompor"){
    $produk = 3000000;
 }elseif($produk = "kulkas"){
     $produk = 4000000;
 }elseif($produk = "mesincuci"){
     $produk = 5000000;
 }

    echo 'Nama Customer : '.$nama;
    echo '<br/>Produk Pilihan : '.$produk;
    echo '<br/>Jumlah Beli : '.$jumlah;
    echo '<br/>Total Belanja : Rp. '.(int)$jumlah*(int)$produk; 
?>
    
</body>
</html>