<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kalkulator BMI</title>
    <style>
    h3 {
        text-align: center;
        margin-bottom: 3%;
        margin-top: 3%;
    }
    </style>
</head>

<body>

    <div class="container  mt-2 ">
        <h3>Silahkan Masukkan Data Anda</h3>
        <form method="POST" action="hasil.php">
            <div class=" form-group row">
                <label for="id" class="col-4 col-form-label">Kode Pasien</label>
                <div class="col-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div>
                        <input id="id" name="id" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Pasien</label>
                <div class="col-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-5">
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4">Gender</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L">
                        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P">
                        <label for="radio_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="usia" class="col-4 col-form-label">Usia</label>
                <div class="col-5">
                    <input id="usia" name="usia" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat_badan" class="col-4 col-form-label">Berat (kg)</label>
                <div class="col-5">
                    <input id="berat_badan" name="berat_badan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi_badan" class="col-4 col-form-label">Tinggi (cm)</label>
                <div class="col-5">
                    <input id="tinggi_badan" name="tinggi_badan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa</label>
                <div class="col-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-5">
                    <button name="proses" type="submit" class="btn btn-dark"> <b> Submit </b></button>
                </div>
            </div>
        </form>