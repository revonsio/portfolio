@extends('layout.happy')
@section('title', 'Data Nilai Kuliah')
@section('judulhalaman', 'EDIT DATA NILAI KULIAH')

@section('konten')
	<a class="btn btn-primary" href="/nilaikuliah">Kembali</a>

	<br/>
	<br/>

	@foreach($nilaikuliah as $n)
	<form action="/nilaikuliah/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $n->ID }}"> <br/>
        <div class="form-group">
            <label for="merk">NRP:</label>
            <input type="text" required="required" name="NRP" id="NRP" value="{{ $n->NRP }}">
        </div>
        <div class="form-group">
            <label>Nilai Angka:</label>
            <input type="number" required="required" name="NilaiAngka" id="NilaiAngka" value="{{ $n->NilaiAngka}}">
        </div>
        <div class="form-group">
            <label>SKS:</label>
            <input type="number" required="required" name="SkS" id="SKS" value="{{ $n->SKS}}">
        </div>
        <button type="submit" class="btn btn-success">Simpan Data</button>
		 <br/>
         <br>

	</form>
	@endforeach

@endsection
