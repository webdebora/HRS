<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit data
                        <a href="{{ url('employee') }}" class="btn btn-primary float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('employee/' . $employee->id_number . '/edit') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>NIK karyawan</label>
                            <input type="text" name="id_number" class="form-control"
                                value="{{ old('id_number', $employee->id_number) }}">
                        </div>

                        <div class="mb-3">
                            <label>Nama lengkap</label>
                            <input type="text" name="full_name" class="form-control"
                                value="{{ old('full_name', $employee->full_name) }}">
                            @error('full_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Nama panggilan</label>
                            <input type="text" name="nickname" class="form-control"
                                value="{{ old('nickname', $employee->nickname) }}">
                            @error('nickname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Tanggal kontrak</label>
                            <input type="date" name="contract_date" class="form-control"
                                value="{{ old('contract_date', $employee->contract_date) }}">
                            @error('contract_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Tanggal kerja</label>
                            <input type="date" name="work_date" class="form-control"
                                value="{{ old('work_date', $employee->work_date) }}">
                            @error('work_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="" disabled
                                    {{ old('status', $employee->status) == '' ? 'selected' : '' }}>-Pilih-</option>
                                <option value="Aktif"
                                    {{ old('status', $employee->status) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="Berhenti"
                                    {{ old('status', $employee->status) == 'Berhenti' ? 'selected' : '' }}>Berhenti
                                </option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Jabatan</label>
                            <input type="text" name="position" class="form-control"
                                value="{{ old('position', $employee->position) }}">
                            @error('position')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>NUPTK</label>
                            <input type="text" name="nuptk" class="form-control"
                                value="{{ old('nuptk', $employee->nuptk) }}">
                            @error('nuptk')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Jenis kelamin</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="" disabled
                                    {{ old('gender', $employee->gender) == '' ? 'selected' : '' }}>-Pilih-</option>
                                <option value="Pria"
                                    {{ old('gender', $employee->gender) == 'Pria' ? 'selected' : '' }}>Pria</option>
                                <option value="Wanita"
                                    {{ old('gender', $employee->gender) == 'Wanita' ? 'selected' : '' }}>Wanita
                                </option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Tempat lahir</label>
                            <input type="text" name="place_birth" class="form-control"
                                value="{{ old('place_birth', $employee->place_birth) }}">
                            @error('place_birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Tanggal lahir</label>
                            <input type="date" name="birth_date" class="form-control"
                                value="{{ old('birth_date', $employee->birth_date) }}">
                            @error('birth_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Agama</label>
                            <select name="religion" id="religion" class="form-control">
                                <option value="" disabled
                                    {{ old('religion', $employee->religion) == '' ? 'selected' : '' }}>-Pilih-</option>
                                <option value="Kristen"
                                    {{ old('religion', $employee->religion) == 'Kristen' ? 'selected' : '' }}>Kristen
                                </option>
                                <option value="Katholik"
                                    {{ old('religion', $employee->religion) == 'Katholik' ? 'selected' : '' }}>Katholik
                                </option>
                                <option value="Islam"
                                    {{ old('religion', $employee->religion) == 'Islam' ? 'selected' : '' }}>Islam
                                </option>
                                <option value="Hindu"
                                    {{ old('religion', $employee->religion) == 'Hindu' ? 'selected' : '' }}>Hindu
                                </option>
                                <option value="Budha"
                                    {{ old('religion', $employee->religion) == 'Budha' ? 'selected' : '' }}>Budha
                                </option>
                                <option value="Konghucu"
                                    {{ old('religion', $employee->religion) == 'Konghucu' ? 'selected' : '' }}>Konghucu
                                </option>
                            </select>
                            @error('religion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $employee->email) }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Hobi</label>
                            <input type="text" name="hobby" class="form-control"
                                value="{{ old('hobby', $employee->hobby) }}">
                            @error('hobby')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Status pernikahan</label>
                            <select name="marital_status" id="marital_status" class="form-control">
                                <option value="" disabled {{ old('marital_status', $employee->marital_status) == '' ? 'selected' : '' }}>-Pilih-</option>
                                <option value="Menikah" {{ old('marital_status', $employee->marital_status) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Belum" {{ old('marital_status', $employee->marital_status) == 'Belum' ? 'selected' : '' }}>Belum</option>
                            </select>
                            @error('marital_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label>Alamat lengkap</label>
                            <input type="text" name="residence_address" class="form-control"
                                value="{{ old('residence_address', $employee->residence_address) }}">
                            @error('residence_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Nomor handphone</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ old('phone', $employee->phone) }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Alamat darurat</label>
                            <input type="text" name="address_emergency" class="form-control"
                                value="{{ old('address_emergency', $employee->address_emergency) }}">
                            @error('address_emergency')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Nomor handphone darurat</label>
                            <input type="text" name="phone_emergency" class="form-control"
                                value="{{ old('phone_emergency', $employee->phone_emergency) }}">
                            @error('phone_emergency')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Golongan darah</label>
                            <input type="text" name="blood_type" class="form-control"
                                value="{{ old('blood_type', $employee->blood_type) }}">
                            @error('blood_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Pendidikan terakhir</label>
                            <input type="text" name="last_education" class="form-control"
                                value="{{ old('last_education', $employee->last_education) }}">
                            @error('last_education')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Lembaga</label>
                            <input type="text" name="agency" class="form-control"
                                value="{{ old('agency', $employee->agency) }}">
                            @error('agency')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Tahun kelulusan</label>
                            <input type="text" name="graduation_year" class="form-control"
                                value="{{ old('graduation_year', $employee->graduation_year) }}">
                            @error('graduation_year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Tempat pelatihan kompetensi</label>
                            <input type="text" name="competency_training_place" class="form-control"
                                value="{{ old('competency_training_place', $employee->competency_training_place) }}">
                            @error('competency_training_place')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Pengalaman berorganisasi</label>
                            <textarea name="organizational_experience" class="form-control" id="organizational_experience" rows="3">{{ old('organizational_experience', $employee->organizational_experience) }}</textarea>
                            @error('organizational_experience')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

     <!-- Family Data Section -->
     <div id="familyData" style="display: none;">
        <div class="mb-3">
            <label>Nama pasangan</label>
            <input type="text" name="mate_name" class="form-control" value="{{ old('mate_name', $employee->mate_name) }}">
            @error('mate_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Nama anak</label>
            <input type="text" name="child_name" class="form-control" value="{{ old('child_name', $employee->child_name) }}">
            @error('child_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Tanggal pernikahan</label>
            <input type="date" name="wedding_date" class="form-control" value="{{ old('wedding_date', $employee->wedding_date) }}">
            @error('wedding_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Nomor sertifikat pernikahan</label>
            <input type="text" name="marriage_certificate_number" class="form-control" value="{{ old('marriage_certificate_number', $employee->marriage_certificate_number) }}">
            @error('marriage_certificate_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Submit Button -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
const maritalStatus = document.getElementById('marital_status');
const familyData = document.getElementById('familyData');

// Show/Hide family data section based on marital status
function toggleFamilyData() {
if (maritalStatus.value === 'Menikah') {
familyData.style.display = 'block';
} else {
familyData.style.display = 'none';
}
}

maritalStatus.addEventListener('change', toggleFamilyData);

// Initial check when the page loads
toggleFamilyData();
});
</script>
