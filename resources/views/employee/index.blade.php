<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-flex justify-content-between align-items-center">
                        Data
                        <div class="d-flex">
                            <a href="{{ url('dashboard') }}" class="btn btn-secondary mr-2">Back to Dashboard</a>
                            <a href="{{ url('employee/create') }}" class="btn btn-primary">Tambah Karyawan</a>
                        </div>
                    </h4>
                </div>
                <div class="card-body">
                    <!-- Display employee data -->
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>NIK Karyawan</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Panggilan</th>
                                <th>Tanggal Kontrak</th>
                                <th>Tanggal Kerja</th>
                                <th>Status</th>
                                <th>Jabatan</th>
                                <th>NUPTK</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Email</th>
                                <th>Hobi</th>
                                <th>Status Pernikahan</th>
                                <th>Alamat Lengkap</th>
                                <th>Nomor Handphone</th>
                                <th>Alamat Darurat</th>
                                <th>Nomor Handphone Darurat</th>
                                <th>Golongan Darah</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Lembaga</th>
                                <th>Tahun Lulus</th>
                                <th>Tempat Pelatihan Kompetensi</th>
                                <th>Pengalaman Organisasi</th>
                                <th>Aksi</th>
                                <!-- Family Data Columns (Only for Married Employees) -->
                                @if($employee->where('marital_status', 'Married')->count() > 0)
                                    <th>Nama Pasangan</th>
                                    <th>Nama Anak</th>
                                    <th>Tanggal Pernikahan</th>
                                    <th>Nomor Sertifikat Pernikahan<</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $item)
                            <tr>
                                <td>{{ $item->id_number }}</td>
                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->nickname }}</td>
                                <td>{{ $item->contract_date }}</td>
                                <td>{{ $item->work_date }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->position }}</td>
                                <td>{{ $item->nuptk }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->place_birth }}</td>
                                <td>{{ $item->birth_date }}</td>
                                <td>{{ $item->religion }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->hobby }}</td>
                                <td>{{ $item->marital_status }}</td>
                                <td>{{ $item->residence_address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address_emergency }}</td>
                                <td>{{ $item->phone_emergency }}</td>
                                <td>{{ $item->blood_type }}</td>
                                <td>{{ $item->last_education }}</td>
                                <td>{{ $item->agency }}</td>
                                <td>{{ $item->graduation_year }}</td>
                                <td>{{ $item->competency_training_place }}</td>
                                <td>{{ $item->organizational_experience }}</td>
                                <!-- Display Family Data if Married -->
                                @if($item->marital_status == 'Married')
                                    <td>{{ $item->spouse_name}}</td>
                                    <td>{{ $item->child_name }}</td>
                                    <td>{{ $item->wedding_date }}</td>
                                    <td>{{ $item->marriage_certificate_number }}</td>
                                @endif
                                <td class="d-flex">
                                    <a href="{{ url('employee/'.$item->id_number.'/edit') }}" class="btn btn-success btn-sm mx-1">Edit</a>
                                    <form action="{{ url('employee/'.$item->id_number.'/archive') }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-warning btn-sm mx-1" onclick="return confirm('Apakah Anda yakin ingin mengarsipkan karyawan ini?');"> Arsip</button>
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
