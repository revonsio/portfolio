@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'EDIT DATA PENDAPATAN')

@section('konten')

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pendapatan_id }}"> <br/>
		IDPegawai <input type="number" name="idpegawai" required="required"> <br/>
		Bulan <input type="number" name="bulan" required="required"> <br/>
		Tahun <input type="text" name="tahun" required="required"> <br/>
        Gaji <input type="number" name="gaji" required="required"> <br/>
        Tunjangan <input type="number" name="tunjangan" required="required"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
