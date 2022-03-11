<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST">
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" required="required" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEBI">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
    $nama_siswa = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
    $mata_kuliah = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
    $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
    $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
    $nilai_total = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;

    function kelulusan($nilai_total){
      if ($nilai_total > 55){
        return 'Lulus';
      }else{
        return 'Tidak Lulus';
      }
    }

    if ($nilai_total > 90){
      $standard = 'A';
    }elseif ($nilai_total > 80){
      $standard = 'B';
    }elseif ($nilai_total > 60){
      $standard = 'C';
    }elseif ($nilai_total > 40){
      $standard = 'D';
    }elseif ($nilai_total > 20){
      $standard = 'E';
    }

    switch ($standard){
      case 'A':
        $info = "Sangat memuaskan";
        break;
      case 'B':
        $info = "Memuaskan";
        break;
      case 'C':
        $info = "Cukup";
        break;
      case 'D':
        $info = "Kurang";
        break;
      case 'E':
        $info = "Sangat kurang";
        break;
    }

        echo "<br/>Nama : ".$nama_siswa;
        echo "<br/>Mata Kuliah : ".$mata_kuliah;
        echo "<br/>Nilai UTS : ".$nilai_uts;
        echo "<br/>Nilai UAS : ".$nilai_uas;
        echo "<br/>Nilai Tugas Praktikum : ".$nilai_tugas;
        echo "<br/>Nilai Total : ".$nilai_total;
        echo "<br/>Keterangan : ".$standard;
        echo "<br/>Peringkat : ".$info;
        $hasil = kelulusan($nilai_total);
        echo "<br/> Dinyatakan : ".$hasil;
?>