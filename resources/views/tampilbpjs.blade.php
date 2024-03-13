<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONFIRMASI IDENTITAS PASIEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary shadow-lg">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4 text-primary">KONFIRMASI IDENTITAS PASIEN</h2>

                    <!-- Form for entering BPJS number -->
                    <form id="bpjsForm" action="{{ route('check.bpjs') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nomor_bpjs" class="form-label">Nomor BPJS:</label>
                            <input type="text" class="form-control" id="nomor_bpjs" name="nomor_bpjs" autocomplete="off">
                        </div>

                        <!-- Add more form elements as needed -->

                        <div class="text-center"> <!-- Center the button -->
                        <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Daftar</button>
</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // Handle form submission and display the modal
    $(document).ready(function () {
        $('#bpjsForm').submit(function (e) {
            e.preventDefault();

            // Submit the form using AJAX
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    // If data is found, show the modal
                    if (response.patientData) {
                        // Set the patient ID dynamically in the modal title
                        $('#patientId').text(response.patientData.id);
                        // Display additional details in the modal body
                        $('#patientDetails').html(`
                            <p><strong>No BPJS:</strong> ${response.patientData.no_bpjs}</p>
                            <p><strong>NORM:</strong> ${response.patientData.norm}</p>
                            <p><strong>NIK KTP:</strong> ${response.patientData.nik_ktp}</p>
                            <p><strong>Nama:</strong> ${response.patientData.nama}</p>
                            <p><strong>Jenis Kelamin:</strong> ${response.patientData.jenis_kelamin}</p>
                            <p><strong>Tanggal Lahir:</strong> ${response.patientData.tgl_lahir}</p>
                            <p><strong>Alamat:</strong> ${response.patientData.alamat}</p>
                        `);
                        $('#exampleModal').modal('show');
                    } else {
                        // If no data is found, show an alert
                        alert('Data tidak ditemukan.');
                    }
                },
                error: function () {
                    alert('Error occurred while processing the request.');
                }
            });
        });
    });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NOMOR ANTRIAN <span id="patientId"></span></h5>
            
            </div>
            <div class="modal-body" id="patientDetails">
                <!-- Display additional details here -->
                @if(isset($data) && $data->count() > 0)
                    @foreach($data as $row)
                        <p><strong>No BPJS:</strong> {{ $row->no_bpjs }}</p>
                        <p><strong>NORM:</strong> {{ $row->norm }}</p>
                        <p><strong>NIK KTP:</strong> {{ $row->nik_ktp }}</p>
                        <p><strong>Nama:</strong> {{ $row->nama }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $row->jenis_kelamin }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ $row->tgl_lahir }}</p>
                        <p><strong>Alamat:</strong> {{ $row->alamat }}</p>
                    @endforeach
                @endif
            </div>
            <div class="modal-footer">
    @if(isset($data) && $data->count() > 0)
        <!-- Displaying only one "Simpan" button outside the loop -->
        <button type="button" class="btn btn-primary" onclick="redirectToSelect()">Simpan</button>
    @endif
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>



<script>
    function redirectToSelect() {
        // Get the ID from the span with id "patientId"
        var id = document.getElementById('patientId').innerText;
        // Ganti URL dengan URL yang sesuai untuk halaman "select"
        window.location.href = '{{ route("select") }}' + '?id=' + id;
    }
</script>


        </div>
    </div>
</div>

</body>
</html>
