<div class="card">
    <div class="card-header">
        <h4>Edit Data Pelanggaran</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('violations.update', $violation->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Laravel's method to spoof the PUT method -->

            <div class="mb-3">
                <label for="id_number">NIK Karyawan</label>
                <input type="text" id="id_number" name="id_number" class="form-control" value="{{ old('id_number', $violation->id_number) }}">
                @error('id_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="offense_type">Jenis Pelanggaran</label>
                <input type="text" id="offense_type" name="offense_type" class="form-control" value="{{ old('offense_type', $violation->offense_type) }}">
                @error('offense_type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="offense_date">Tanggal Pelanggaran</label>
                <input type="date" id="offense_date" name="offense_date" class="form-control" value="{{ old('offense_date', $violation->offense_date) }}">
                @error('offense_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Deskripsi</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description', $violation->description) }}">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
<style>
.container {
    margin-top: 2rem;
}

.card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 100%;
    background-color: #ffffff; /* Latar belakang card putih */
}

.card-header {
    background-color: #ffffff; /* Putih */
    color: #0277BD; /* Biru laut */
    padding: 15px;
    border-radius: 10px 10px 0 0;
    font-size: 1.4rem;
    font-weight: 700;
    display: flex;
    justify-content: center; /* Memusatkan konten secara horizontal */
    align-items: center;
    border-bottom: 1px solid #e0e0e0; /* Garis bawah card-header */
    text-align: center; /* Memusatkan teks secara horizontal */
}

.card-header h4 {
    color: #000000; /* Warna font hitam */
    font-weight: 700;
    margin: 0; /* Menghapus margin default */
}

.card-body {
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.mb-3 {
    margin-bottom: 1.5rem; /* Jarak antara elemen form */
}

label {
    font-weight: 600; /* Tebal */
    margin-bottom: 0.5rem;
    display: block; /* Label berada di atas input */
    color: #0277BD; /* Biru laut */
}

input[type="text"], input[type="date"], input[type="email"] {
    width: 100%; /* Lebar penuh */
    padding: 10px;
    border: 1px solid #e0e0e0; /* Border abu-abu muda */
    border-radius: 4px;
    font-size: 1rem; /* Ukuran font */
    color: #333333; /* Warna font */
    background-color: #f1faff; /* Warna latar belakang input */
    transition: border-color 0.3s; /* Animasi transisi border */
}

input[type="text"]:focus, input[type="date"]:focus, input[type="email"]:focus {
    border-color: #0277BD; /* Border biru laut saat fokus */
    outline: none; /* Menghilangkan outline default */
}

.text-danger {
    color: #d9534f; /* Warna merah untuk error message */
    font-size: 0.875rem; /* Ukuran font error message */
    margin-top: 0.5rem; /* Jarak atas error message */
    display: block;
}

.btn-primary {
    background-color: rgba(2, 119, 189, 0.1); /* Biru laut transparan */
    border: 1px solid #0277BD; /* Border biru laut */
    color: #0277BD; /* Font biru laut */
    padding: 8px 16px; /* Padding tombol */
    border-radius: 4px; /* Radius sudut tombol */
    font-size: 0.9rem; /* Ukuran font tombol */
    font-weight: 600;
    text-transform: uppercase;
    transition: background-color 0.3s, border-color 0.3s;
    display: inline-block;
}

.btn-primary:hover {
    background-color: rgba(2, 119, 189, 0.2); /* Biru laut lebih transparan saat hover */
    border-color: #0277BD;
    color: #ffffff; /* Warna font putih saat hover */
}

.form-control {
    font-size: 0.9rem; /* Ukuran font form */
    color: #333333; /* Warna teks */
}

form {
    display: block; /* Menampilkan form dalam satu blok */
}

/* Tambahan untuk kolom ukuran kecil */
.form-small {
    max-width: 30%; /* Mengatur lebar maksimal elemen form menjadi 30% dari kontainer */
    margin: 0 auto; /* Memusatkan elemen form */
}

/* Menyediakan responsivitas untuk layar yang lebih kecil */
@media (max-width: 768px) {
    .form-small {
        max-width: 100%; /* Lebar penuh untuk layar kecil */
    }
}


</style>
