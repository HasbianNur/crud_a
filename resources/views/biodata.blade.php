@extends('layout.main')

@section('container')
    @foreach ($biodata as $profil)
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="profil">
        <div class="wrap">
            <table>
                <tr>
                    <td rowspan="8" width="100px"> <img src="{{ $profil["gambar"] }}" alt="{{ $profil["nama"] }}" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:30px" border="2px" ></td>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td>:</td> <td>{{ $profil["nama"] }}</td>
                </tr>
                <tr>
                    <td><b>NIS</b></td>
                    <td>:</td> <td>{{ $profil["nis"] }}</td>
                </tr>
                <tr>
                    <td><b>Jurusan</b></td>
                    <td>:</td> <td>{{ $profil["jurusan"] }}</td>
                </tr>
                <tr>
                    <td><b>Kelas</b></td>
                    <td>:</td> <td>{{ $profil["kelas"] }}</td>
                </tr>
                <tr>
                    <td><b>Sekolah</b></td>
                    <td>:</td> <td>{{ $profil["sekolah"] }}</td>
                </tr>
            </table>
        </div>
      </div>
    @endforeach
@endsection