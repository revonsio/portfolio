@extends('layout.happy')
@section('title', 'Data Nilai Kuliah')
@section('judulhalaman', 'TAMBAH DATA NILAI KULIAH')

@section('konten')


    <a href="/nilaikuliah" class="btn btn-primary">Kembali</a>
    <form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>NRP:</label>
            <div class='col-sm-6 input-group' id='nrp'>
                <input type="number" name="nrp" required="required">
            </div>
        </div>

        <div class="form-group">
            <label>Nilai Angka:</label>
            <div class='col-sm-6 input-group' id='nilaiangka'>
                <input type="number" name="nilaiangka" required="required">
            </div>
        </div>

        <div class="form-group">
            <label>SKS:</label>
            <div class='col-sm-6 input-group' id='sks'>
                <input type="number" name="sks" required="required">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
@endsection

