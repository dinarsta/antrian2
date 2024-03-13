 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Poli dan Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <a href="{{ route('print', ['id' => $bpjsEntry->id]) }}" class="btn btn-primary">Print</a>


                </div>
            @endif

                <form action="{{ route('handle.selection', ['id' => $bpjsEntry->id]) }}" method="post" class="bg-white p-4 rounded shadow">
                    @csrf
                    <h1 class="text-center mb-4">Pilih Poli dan Dokter</h1>


                    <div class="mb-3">
                        <label for="no_bpjs" class="form-label">Nomor BPJS:</label>
                        <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" autocomplete="off" value="{{ $bpjsEntry->no_bpjs }}" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="norm" class="form-label">NO RM:</label>
                        <input type="text" class="form-control" id="norm" name="norm" autocomplete="off" value="{{ $bpjsEntry->norm }}" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="{{ $bpjsEntry->nama }}" readonly>
                    </div>

             

                    <!-- Display other patient details as needed -->

<div class="mb-3">
    <label for="nama" class="form-label">NAMA:</label>
    <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="{{ optional($bpjsEntry)->nama }}" readonly>
</div>

<div class="mb-3">
    <label for="nik_ktp" class="form-label">NIK:</label>
    <input type="text" class="form-control" id="nik_ktp" name="nik_ktp" autocomplete="off" value="{{ optional($bpjsEntry)->nik_ktp }}" readonly>
</div>



                     <div class="mb-3">
                        <label for="selected_poly_id" class="form-label">Pilih Poliklinik:</label>
                        <select name="selected_poly_id" id="selected_poly_id" class="form-select">
                            @foreach ($polies as $poli)
                                <option value="{{ $poli->id }}">{{ $poli->nama_poly }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="selected_dokter_id" class="form-label">Pilih Dokter:</label>
                        <select name="selected_dokter_id" id="selected_dokter_id" class="form-select">
                            @foreach ($dokters as $dokter)
                                <option value="{{ $dokter->id }}">{{ $dokter->nama_dokter }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit"  name="submit" class="btn btn-primary">Simpan Pilihan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
