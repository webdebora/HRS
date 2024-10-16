
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Data
                        <a href="{{ url('employee') }}" class="btn btn-primary float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('employee/create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>NIK karyawan</label>
                            <input type="text" name="id_number" class="form-control" value="{{ old('id_number') }}">
                            @error('id_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nama lengkap</label>
                            <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}">
                            @error('full_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nama panggilan</label>
                            <input type="text" name="nickname" class="form-control" value="{{ old('nickname') }}">
                            @error('nickname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal kontrak</label>
                            <input type="date" name="contract_date" class="form-control"
                                value="{{ old('contract_date') }}">
                            @error('contract_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal kerja</label>
                            <input type="date" name="work_date" class="form-control" value="{{ old('work_date') }}">
                            @error('work_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control" value="{{ old('status') }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Berhenti">Berhenti</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jabatan</label>
                            <input type="text" name="position" class="form-control" value="{{ old('position') }}">
                            @error('position')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>NUPTK</label>
                            <input type="text" name="nuptk" class="form-control" value="{{ old('nuptk') }}">
                            @error('nuptk')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis kelamin</label>
                            <select name="gender" id="gender" class="form-control" value="{{ old('gender') }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat lahir</label>
                            <input type="text" name="place_birth" class="form-control"
                                value="{{ old('place_birth') }}">
                            @error('place_birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal lahir</label>
                            <input type="date" name="birth_date" class="form-control"
                                value="{{ old('birth_date') }}">
                            @error('birth_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select name="religion" id="religion" class="form-control" value="{{ old('religion') }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            @error('religion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Hobi</label>
                            <input type="text" name="hobby" class="form-control" value="{{ old('hobby') }}">
                            @error('hobby')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Status pernikahan</label>
                            <select name="marital_status" id="marital_status" class="marital_status"
                                value="{{ old('marital_status') }}">
                                <option value="" selected>-Pilih-</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum">Belum</option>
                            </select>
                            @error('marital_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat lengkap</label>
                            <input type="text" name="residence_address" class="form-control"
                                value="{{ old('residence_address') }}">
                            @error('residence_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nomor handphone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat darurat</label>
                            <input type="text" name="address_emergency" class="form-control"
                                value="{{ old('address_emergency') }}">
                            @error('address_emergency')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nomor handphone darurat</label>
                            <input type="text" name="phone_emergency" class="form-control"
                                value="{{ old('phone_emergency') }}">
                            @error('phone_emergency')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Golongan darah</label>
                            <input type="text" name="blood_type" class="form-control"
                                value="{{ old('blood_type') }}">
                        </div>
                        <div class="mb-3">
                            <label>Pendidikan terakhir</label>
                            <input type="text" name="last_education" class="form-control"
                                value="{{ old('last_education') }}">
                            @error('blood_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Lembaga</label>
                            <input type="text" name="agency" class="form-control" value="{{ old('agency') }}">
                            @error('agency')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tahun kelulusan</label>
                            <input type="text" name="graduation_year" class="form-control"
                                value="{{ old('graduation_year') }}">
                            @error('graduation_year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat pelatihan kompetensi</label>
                            <input type="text" name="competency_training_place" class="form-control"
                                value="{{ old('competency_training_place') }}">
                            @error('competency_training_place')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Pengalaman berorganisasi</label>
                            <textarea name="organizational_experience" class="form-control" id="organizational_experience" rows="3">{{ old('organizational_experience') }}</textarea>
                            @error('organizational_experience')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div id="familyDataSection" style="display: none;">
                            <h5>Data Keluarga</h5>
                            <div class="mb-3">
                                <label>Nama Pasangan</label>
                                <input type="text" name="mate_name" class="form-control" value="{{ old('mate_name') }}">
                                @error('mate_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Nama Anak</label>
                                <input type="text" name="child_name" class="form-control" value="{{ old('child_name') }}">
                                @error('child_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Pernikahan</label>
                                <input type="date" name="wedding_date" class="form-control" value="{{ old('wedding_date') }}">
                                @error('wedding_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Nomor Sertifikat Pernikahan</label>
                                <input type="text" name="marriage_certificate_number" class="form-control" value="{{ old('marriage_certificate_number') }}">
                                @error('marriage_certificate_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                        <script>
                            document.getElementById('marital_status').addEventListener('change', function () {
                                var familyDataSection = document.getElementById('familyDataSection');
                                if (this.value === 'Menikah') {
                                    familyDataSection.style.display = 'block';
                                } else {
                                    familyDataSection.style.display = 'none';
                                }
                            });
                        </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
