@extends('layouts.master')

@section('title', 'Edit Pegawai')
@section('page-title', 'Form Edit Pegawai')

@section('content')
<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <table class="table">
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}" class="form-control"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="{{ old('email', $employee->email) }}" class="form-control"></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td><input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}" class="form-control"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}" class="form-control"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="{{ old('alamat', $employee->alamat) }}" class="form-control"></td>
        </tr>
        <tr>
            <td>Tanggal Masuk</td>
            <td><input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}" class="form-control"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="status" class="form-select">
                    <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="nonaktif" {{ old('status', $employee->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-end">
                <button type="submit" class="btn btn-warning">Update</button>
            </td>
        </tr>
    </table>
</form>
@endsection
