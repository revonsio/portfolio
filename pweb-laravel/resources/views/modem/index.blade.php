@extends('layout.happy')
@section('title', 'Data Modem')
@section('judulhalaman', 'DATA MODEM')

@section('konten')

	<a href="/modem/tambah" class="btn btn-primary"> + Tambah modem Baru</a>
	<br/>
    <div class="container" align="center">
    </p> Cari Data modem Berdasarkan Merk atau Ketersediaan</p>
	<form action="/modem/cari" method="GET">
        <div class="form-group">
            <input class="form-control" type="text" style="width: 30%;" name="cari" placeholder="Cari modem .." value="{{ old('cari') }}">
        </div>
		    <input class="form-control btn-success" style="width: 30%;" type="submit" value="CARI">
	</form>

<br>

	<table border="1" style="text-align: center">
		<tr>
            <th>Nomor</th>
            <th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($modem as $m)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $m->merkmodem }}</td>
			<td>{{ $m->stockmodem }}</td>
            <td>{{ $m->tersedia }}</td>

			<td>
                <a href="/modem/detail/{{ $m->kodemodem }}" class="btn btn-warning btn-sm" role="button">Detail</a>

				<a href="/modem/edit/{{ $m->kodemodem }}" class="btn btn-info btn-sm" role="button">Edit</a>

				<a href="/modem/hapus/{{ $m->kodemodem }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

<br>

    {{ $modem->links()  }}


@endsection
