<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Define a style for print media */
        @media print {
            /* Hide the "Print" button */
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white p-4 rounded shadow">
                    <p><strong>No BPJS:</strong> {{ $bpjsEntry->no_bpjs }}</p>
                    <p><strong>NORM:</strong> {{ $bpjsEntry->norm }}</p>
                    <p><strong>NIK KTP:</strong> {{ $bpjsEntry->nik_ktp }}</p>
                    <p><strong>Nama:</strong> {{ $bpjsEntry->nama }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $bpjsEntry->jenis_kelamin }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $bpjsEntry->tgl_lahir }}</p>
                    <p><strong>Alamat:</strong> {{ $bpjsEntry->alamat }}</p>

                    <!-- Print button with "no-print" class -->
                    <button class="btn btn-primary no-print" onclick="window.print()">Print</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
