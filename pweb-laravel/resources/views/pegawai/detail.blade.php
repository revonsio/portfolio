@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DETAIL DATA PEGAWAI')

@section('konten')
	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
        <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_nama }}</label>
        <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_jabatan }}</label>
        <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_umur }}</label>
        <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_alamat }}</label>
	@endforeach

@endsection
