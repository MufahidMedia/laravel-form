<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <!--JQUERY-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-slim@3.0.0/dist/jquery.slim.min.js"></script>
 
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
 
    <title>Praktikum 8</title>
</head>
 
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Form Consultation Tugas Akhir</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('consultation.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Kamu</label>
                                        <input name="nama" type="text" class="form-control"
                                            value="{{ old('nama') }}" id="exampleFormControlInput1"
                                            placeholder="nama lengkap kamu dong">
                                        @error('nama')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">WhatsApp</label>
                                        <input name="phone" type="text" class="form-control" maxlength="13"
                                            data-minlength="13" id="exampleFormControlInput1"
                                            placeholder="62***********" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input name="email" type="text" class="form-control"
                                            value="{{ old('email') }}" id="exampleFormControlInput1"
                                            placeholder="kamu@email.com">
                                        @error('email')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label">Universitas</label>
                                                <input name="universitas" type="text" class="form-control"
                                                    value="{{ old('universitas') }}" id="exampleFormControlInput1"
                                                    placeholder="nama universitas kamu studi">
                                                @error('universitas')
                                                    <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jenjang
                                                    Pendidikan</label>
                                                <select name="jenjang" id="jenjang" class="form-select">
                                                    <option value="">-Pilih</option>
                                                    <option value="D1"
                                                        {{ old('jenjang') == 'D1' ? 'selected=selected' : '' }}>D1
                                                    </option>
                                                    <option value="D2"
                                                        {{ old('jenjang') == 'D2' ? 'selected=selected' : '' }}>D2
                                                    </option>
                                                    <option value="D3"
                                                        {{ old('jenjang') == 'D3' ? 'selected=selected' : '' }}>D3
                                                    </option>
                                                    <option value="D4"
                                                        {{ old('jenjang') == 'D4' ? 'selected=selected' : '' }}>D4
                                                    </option>
                                                    <option value="S1"
                                                        {{ old('jenjang') == 'S1' ? 'selected=selected' : '' }}>S1
                                                    </option>
                                                    <option value="S2"
                                                        {{ old('jenjang') == 'S2' ? 'selected=selected' : '' }}>S2
                                                    </option>
                                                    <option value="S3"
                                                        {{ old('jenjang') == 'S3' ? 'selected=selected' : '' }}>S3
                                                    </option>
                                                </select>
                                                @error('jenjang')
                                                    <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jurusan Kuliah</label>
                                        <input name="jurusan" type="text" class="form-control"
                                            value="{{ old('jurusan') }}" id="exampleFormControlInput1"
                                            placeholder="contoh: cintai rekayasa perangkat lunak">
                                        @error('jurusan')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Angkatan</label>
                                        <input name="angkatan" type="text" class="form-control" maxlength="4"
                                            value="{{ old('angkatan') }}" data-minlength="4"
                                            id="exampleFormControlInput1" placeholder="contoh: 2020">
                                        @error('angkatan')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
 
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dapat info Kami
                                            dari mana?</label>
                                        <select name="info" id="info" class="form-select">
                                            <option value="">-Pilih</option>
                                            <option value="IG"
                                                {{ old('info') == 'IG' ? 'selected=selected' : '' }}>IG
                                            </option>
                                            <option value="FB"
                                                {{ old('info') == 'FB' ? 'selected=selected' : '' }}>FB
                                            </option>
                                            <option value="WA"
                                                {{ old('info') == 'WA' ? 'selected=selected' : '' }}>WA
                                            </option>
                                            <option value="WEBSITE"
                                                {{ old('info') == 'WEBSITE' ? 'selected=selected' : '' }}>WEBSITE
                                            </option>
                                            <option value="EMAIL"
                                                {{ old('info') == 'EMAIL' ? 'selected=selected' : '' }}>EMAIL
                                            </option>
                                            <option value="TEMAN"
                                                {{ old('info') == 'TEMAN' ? 'selected=selected' : '' }}>TEMAN
                                            </option>
                                            <option value="SAUDARA"
                                                {{ old('info') == 'SAUDARA' ? 'selected=selected' : '' }}>SAUDARA
                                            </option>
                                            <option value="KIOS"
                                                {{ old('info') == 'KIOS' ? 'selected=selected' : '' }}>KIOS
                                            </option>
                                        </select>
                                        @error('info')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Judul
                                            Penelitian</label>
                                        <input name="judul_penelitian" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ old('judul_penelitian') }}"
                                            placeholder="contoh: sistem informasi absensi berbasis android">
                                        @error('judul_penelitian')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
 
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Kritik dan
                                            saran</label>
                                        <textarea name="kds" class="form-control kds" id="kds" rows="3"
                                            placeholder="Kritik dan saran kamu buat takolah selaku penyedia layanan">{{ old('kds') }}</textarea>
                                        @error('kds')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-success" type="submit"><i class="bi bi-send"></i>
                                            KIRIM</button>
                                    </div>
 
                                </div>
                            </div>
                        </form>
 
                    </div>
                    <!--end card body-->
                </div>
                <!--end card -->
            </div>
            <!--end container-->
        </div>
    </div>
</body>
 
</html>
 