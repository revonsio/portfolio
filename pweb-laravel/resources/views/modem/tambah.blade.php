@extends('layout.happy')
@section('title', 'Data Modem')
@section('judulhalaman', 'TAMBAH DATA MODEM')

@section('konten')


    <a href="/modem" class="btn btn-primary"> Kembali</a>
    <form action="/modem/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Kode Modem:</label>
            <div class='col-sm-6 input-group' id='kodemodem'>
                <input type="text" name="kode" required="required">
            </div>
        </div>

        <div class="form-group">
            <label>Merk Modem:</label>
            <div class='col-sm-6 input-group' id='merkmodem'>
                <input type="text" name="merk" required="required">
            </div>
        </div>

        <div class="form-group">
            <label>Stock Modem:</label>
            <div class='col-sm-6 input-group' id='stockmodem'>
                <input type="number" name="stock" required="required">
            </div>
        </div>


        <div class="form-group">
            <label>Tersedia:</label>
            <input type="radio" id="y" name="tersedia" value="Y" checked="checked">ADA</label>
            <label class="radio-inline" for="Y"> <br>
            <input type="radio" id="n" name="tersedia" value="N">TIDAK ADA</label>
            <label class="radio-inline" for="N">

        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection

