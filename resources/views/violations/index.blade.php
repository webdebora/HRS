<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-flex justify-content-between align-items-center">
                        Data Pelanggaran
                        <div class="d-flex">
                            <a href="{{ url('dashboard') }}" class="btn btn-secondary mr-2">Back to Dashboard</a>
                            <a href="{{ route('violations.create') }}" class="btn btn-primary">Tambah</a>
                        </div>
                    </h4>
                </div>
                <div class="card-body">
                    <!-- Display violation data -->
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>NIK Karyawan</th>
                                <th>Jenis Pelanggaran</th>
                                <th>Tanggal Pelanggaran</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($violation as $item)
                            <tr>
                                <td>{{ $item->id_number }}</td>
                                <td>{{ $item->offense_type }}</td>
                                <td>{{ $item->offense_date }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <a href="{{ route('violations.edit', $item->id) }}" class="btn btn-success btn-sm mx-1">Edit</a>
                                    <form action="{{ route('violations.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this record?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
