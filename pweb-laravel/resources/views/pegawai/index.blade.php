@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')

@section('konten')

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
    </p> Cari Data Pegawai Berdasarkan nama atau alamat</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="form-control btn-success" type="submit" value="CARI">
	</form>

	<table border="1" style="text-align: center">
		<tr>
            <th>Nomor</th>
			<th>Nama</th>
			<th>Jabatan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>

			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm" role="button">Detail</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-info btn-sm" role="button">Edit</a>

				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links()  }}


@endsection
