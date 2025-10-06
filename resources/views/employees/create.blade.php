@extends('layouts.master')

@section('title', 'Tambah Pegawai')
@section('page-title', 'Form Pegawai')

@section('content')
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <table class="table">
        <tr>
            <td><label for="nama_lengkap">Nama Lengkap:</label></td>
            <td><input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="nomor_telepon">Nomor Telepon:</label></td>
            <td><input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="tanggal_lahir">Tanggal Lahir:</label></td>
            <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td><textarea id="alamat" name="alamat" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td><label for="tanggal_masuk">Tanggal Masuk:</label></td>
            <td><input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="status">Status:</label></td>
            <td>
                <select id="status" name="status" class="form-select">
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-end">
                <button type="submit" class="btn btn-success">Simpan</button>
            </td>
        </tr>
    </table>
</form>
@endsection
