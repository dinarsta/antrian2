<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #007bff;
        }

        p {
            margin: 10px 0;
        }

        strong {
            color: #007bff;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .print-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        .print-btn:hover {
            background-color: #0056b3;
        }

        @media print {
            .print-btn {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    

        <h1>nomor antrian : 0{{ $bpjsEntry->id }} </h1>
        <p><strong>No BPJS:</strong> {{ $bpjsEntry->no_bpjs }}</p>
        <p><strong>NORM:</strong> {{ $bpjsEntry->norm }}</p>
        <p><strong>NIK KTP:</strong> {{ $bpjsEntry->nik_ktp }}</p>
        <p><strong>Nama:</strong> {{ $bpjsEntry->nama }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ $bpjsEntry->tgl_lahir }}</p>
        <p><strong>Alamat:</strong> {{ $bpjsEntry->alamat }}</p>
        <p><strong>Poly:</strong> {{ $bpjsEntry->selected_poly_id }}</p>
        <p><strong>Dokter:</strong> {{ $bpjsEntry->selected_dokter_id }}</p>

        <!-- Tombol untuk kembali ke halaman sebelumnya -->
        <div class="print-btn" onclick="window.print()">Cetak</div>
    </div>
</body>
</html>
