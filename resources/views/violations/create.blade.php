<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="card">
    <div class="card-header">
        <h4>Data Pelanggaran</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('violations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIK Karyawan</label>
                <input type="text" name="id_number" class="form-control" value="{{ old('id_number') }}">
                @error('id_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Jenis Pelanggaran</label>
                <input type="text" name="offense_type" class="form-control" value="{{ old('offense_type') }}">
                @error('offense_type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Tanggal Pelanggaran</label>
                <input type="date" name="offense_date" class="form-control" value="{{ old('offense_date') }}">
                @error('offense_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
