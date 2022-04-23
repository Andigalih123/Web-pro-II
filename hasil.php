

<?php
include_once 'header.php';
include_once 'sideubar.php';
?>
 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        
            <?php
        require_once 'class_pasien.php';
        require_once 'class_bmi.php';
        require_once 'class_bmipasien.php';
        require_once 'form.php';

        $_proses= isset($_POST['proses'])? $_POST['proses'] : '';        
        $_id = isset($_POST['id'])? $_POST['id'] : '';        
        $_nama = isset($_POST['nama'])? $_POST['nama'] : '';        
        $_usia = isset($_POST['usia'])? $_POST['usia'] : '';        
        $_gender = isset($_POST['gender'])? $_POST['gender'] : '';           
        $_berat_badan = isset($_POST['berat_badan'])? $_POST['berat_badan'] : '';        
        $_tinggi_badan = isset($_POST['tinggi_badan'])? $_POST['tinggi_badan'] : '';        
        $_email = isset($_POST['email'])? $_POST['email'] : '';        
        $_tanggal = isset($_POST['tanggal'])? $_POST['tanggal'] : '';  

        $pasien1 = new Pasien('P001','Andi',"L");
        $pasien1->email = "andi694@gmail.com";
        $pasien1->usia = 20;

        $pasien2= new Pasien('P002', 'Bayu', "L");
        $pasien2->email = "bayu10@gmail.com";
        $pasien2->usia = 21;

        $pasien3= new Pasien('P003', 'Geifar', "P");
        $pasien3->email = "geifar10@gmail.com";
        $pasien3->usia = 19;

        $bmi1 = new Bmi(56, 165);
        $bmi1->nilai_bmi();
        $bmi1->status_bmi();

        $bmi2 = new Bmi(84, 167);
        $bmi2->nilai_bmi();
        $bmi2->status_bmi();

        $bmi3 = new Bmi(40, 150);
        $bmi3->nilai_bmi();
        $bmi3->status_bmi();

        $bmipasien1 = new BmiPasien($pasien1,$bmi1);
        $bmipasien1->tanggal = "2022-04-21";

        $bmipasien2 = new BmiPasien($pasien2,$bmi2);
        $bmipasien2->tanggal = "2022-03-19";

        $bmipasien3 = new BmiPasien($pasien3,$bmi3);
        $bmipasien3->tanggal = "2022-03-18";

        $pasien4 = new Pasien($_id, $_nama, $_gender);
        $pasien4->email = $_email;
        $pasien4->usia = $_usia;
        
        $bmi4 = new Bmi($_berat_badan,$_tinggi_badan);
        $bmi4->nilai_bmi();
        $bmi4->status_bmi();

        $bmipasien4 = new BmiPasien($pasien4,$bmi4);
        $bmipasien4->tanggal = $_tanggal;
        

        $array =[$bmipasien1, $bmipasien2, $bmipasien3];
        $array[]=$bmipasien4;
?>
           <h1 class="text-center"> <b> Hasil BMI Pasien </b> </h1>
            <table class="table table-dark table-striped text-light border=1 " >
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal </th>
                        <th>Kode </th>
                        <th>Nama </th>
                        <th>E-mail</th>
                        <th>Gender</th>
                        <th>Usia</th>
                        <th>Berat(kg)</th>
                        <th>Tinggi(cm)</th>
                        <th>Nilai </th>
                        <th>Status BMI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $nomor = 1;
            foreach ($array as $obj){
        ?>
                </tbody>
                <tr style="text-align: center;">
                    <td><?=$nomor?></td>
                    <td><?=$obj->tanggal?></td>
                    <td><?=$obj->pasien->id ?></td>
                    <td><?=$obj->pasien->nama?></td>
                    <td><?=$obj->pasien->email?></td>
                    <td><?=$obj->pasien->gender?></td>
                    <td><?=$obj->pasien->usia?></td>
                    <td><?=$obj->bmi->berat_badan?></td>
                    <td><?=$obj->bmi->tinggi_badan?></td>
                    <td><?=$obj->bmi->nilai_bmi()?></td>
                    <td><?=$obj->bmi->status_bmi()?></td>
                </tr>
                <?php
        $nomor++;
    }
    ?>
            </table>

        </div>
        </body>

        </html>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">               
                <h5 class="text-center"> <b> TERIMA KASIH TELAH MENGUNJUNGI WEBSITE BMI </b>  </h5>                            
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>