@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'DATA PENDAPATAN')

@section('konten')

	<a href="/pendapatan/tambah"> + Tambah Data Pendapatan Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pendapatan_idpegawai }}</td>
			<td>{{ $p->pendapatan_bulan }}</td>
			<td>{{ $p->pendapatan_tahun }}</td>
            <td>{{ $p->pendapatan_gaji }}</td>
            <td>{{ $p->pendapatan_tunjangan }}</td>
            <td>
				<a href="/pendapatan/edit/{{ $p->pendapatan_id }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->pendapatan_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
