@extends('layout.happy')
@section('title', 'Data Nilai Kuliah')
@section('judulhalaman', 'DATA NILAI KULIAH')

@section('konten')

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Kuliah Baru</a>
    <div class="container" align="center">
    </p> Cari Data Nilai Kuliah Berdasarkan NRP</p>
	<form action="/nilaikuliah/cari" method="GET">
        <div class="form-group">
            <input class="form-control" type="text" style="width: 30%;" name="cari" placeholder="Cari nilaikuliah .." value="{{ old('cari') }}">
        </div>
		    <input class="form-control btn-success" style="width: 30%;" type="submit" value="CARI">
	</form>

<br>

	<table border="1" style="text-align: center">
		<tr>
            <th>ID</th>
            <th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            @if ($n->NilaiAngka <= 40) <td>D</td>
            @elseif (($n->NilaiAngka >= 41) & ($n->NilaiAngka <= 60))<td>C</td>
            @elseif (($n->NilaiAngka >= 61) & ($n->NilaiAngka <= 80))<td>B</td>
            @else ($n->NilaiAngka >= 81)<td>A</td>
            @endif
            <td>{{ (($n->NilaiAngka)*($n->SKS)) }}</td>
            <td>
				<a href="/nilaikuliah/edit/{{ $n->ID }}" class="btn btn-info btn-sm" role="button">Edit</a>
				<a href="/nilaikuliah/hapus/{{ $n->ID }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

<br>

    {{ $nilaikuliah->links()  }}


@endsection
