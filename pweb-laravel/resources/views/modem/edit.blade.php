@extends('layout.happy')
@section('title', 'Data Modem')
@section('judulhalaman', 'EDIT DATA MODEM')

@section('konten')
	<a class="btn btn-primary" href="/modem"> Kembali</a>

	<br/>
	<br/>

	@foreach($modem as $p)
	<form action="/modem/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kodemodem" value="{{ $p->kodemodem }}"> <br/>
        <div class="form-group">
            <label for="merk">Merk Modem:</label>
            <input type="text" required="required" name="merk" id="merk" value="{{ $p->merkmodem }}">
        </div>
        <div class="form-group">
            <label>Stock Modem:</label>
            <input type="number" required="required" name="stock" id="stock" value="{{ $p->stockmodem }}">
        </div>

        <div class="form-group">
            <label>Ketersediaan:</label>
            <br>
            <label class="radio-inline" for="y"><input type="radio" id="y" name="tersedia" value="Y" checked>ADA</label>
            <label class="radio-inline" for="n"><input type="radio" id="n" name="tersedia" value="N">TIDAK ADA</label>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
		 <br/>
         <br>

	</form>
	@endforeach

@endsection
