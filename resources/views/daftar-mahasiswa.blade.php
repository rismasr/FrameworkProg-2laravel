@extends('layout.master')

@section('content')
        <div class="col-lg-10 mx-auto">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Daftar Mahasiswa</h2>
                </div>
                <div class="card-body">

                    @php
                        $kelas = ['6A', '6B', '6C', '6D', "SEMUA"];
                        $no = 0;
                    @endphp
                    

                <div class="row form-group mx-auto">
                    <form action="{{route('daftar-mahasiswa.index')}}" class="col-md-6">
                        <select name="kelas" class="form-control">
                            <option value="" disabled selected>Pilih Kelas</option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k == "SEMUA" ? "" : $k }}" >{{ $k }} </option>
                            @endforeach 
                        </select>
                        <input type="submit" class="btn btn-success mt-2 mb-4" value="Cari">
                    </form>
                        
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                        <tbody>
                            @forelse ($daftarMahasiswa as $dmhs)
                            <tr>
                                <td>{{ $dmhs['nim'] }} </td>
                                <td>{{ $dmhs['nama'] }} </td>
                                <td>{{ $dmhs['kelas'] }} </td>
                            </tr>

                            @empty
                                <td colspan="3"> Tidak ada Data</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function action(){
            var kelas = document.getElementById('kelas').value;
            window.location = "{{ url('daftar-mahasiswa') }}/"+kelas;
        }
    </script>
@endsection
