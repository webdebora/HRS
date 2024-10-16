<!-- archived.blade.php -->
<div class="container mt-4">
    <h2>Archived Employees</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>NIK Karyawan</th>
                <th>Nama Lengkap</th>
                <th>Status</th>
                <th>Archived At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($archivedEmployees as $item)
            <tr>
                <td>{{ $item->id_number }}</td>
                <td>{{ $item->full_name }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->archived }}</td>
                <td class="d-flex">
                    <form action="{{ url('employee/'.$item->id_number.'/restore') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success btn-sm mx-1">Restore</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
