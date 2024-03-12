<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SYti1I5V87e2LCA9zN3p1cfl8+e3fKEW/2kN" crossorigin="anonymous">

  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 20px;
    }

    .btn-bpjs {
      background-color: #28a745; /* Warna hijau */
      color: #fff; /* Warna teks putih */
      border: none;
    }

    .btn-bpjs:hover {
      background-color: #218838; /* Warna hijau saat hover */
    }

    .btn-umum {
      background-color: #ffc107; /* Warna kuning */
      color: #212529; /* Warna teks hitam */
      border: none;
    }

    .btn-umum:hover {
      background-color: #e0a800; /* Warna kuning saat hover */
    }

    i {
      color: #007bff;
    }

    h1 {
      color: #343a40;
    }
  </style>

  <title>BPJS</title>
</head>

<body>
  <div class="flex justify-content-center">
    <div class="row">
      <div class="col-sm-5">
        <div class="card text-center">
          <div class="card-body">
            <a href="#umum" class="btn btn-umum">
              <h1 class="mt-3">Pasien Umum</h1>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card text-center">
          <div class="card-body">
            <a href="/tampilbpjs" class="btn btn-bpjs">
              <h1 class="mt-3">Pasien BPJS</h1>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
