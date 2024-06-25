@extends('layout.happy')
@section('title', 'Data Modem')
@section('judulhalaman', 'DETAIL DATA MODEM')

@section('konten')
	<a href="/modem" class="btn btn-primary"> Kembali</a>
	<br/>
        @foreach($modem as $m)
        <div style="margin-top: 1%;">
            <input type="hidden" name="id" value="{{ $m->kodemodem }}">
            <div class="form-group">
                <label for="merk">Merk Modem:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon"></span>
                    <span type="text" name="merk" class="form-control has-error has-success"
                        required>{{ $m->merkmodem }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon"></span>
                    <span type="text" name="stock" class="form-control has-error has-success"
                        required>{{ $m->stockmodem }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="tersedia">Ketersediaan:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon"></span>
                    <span type="text" name="tersedia" class="form-control has-error has-success"
                        required> {{ $m->tersedia }}
                    </span>
                </div>
            </div>

            <a href="/modem/edit/{{ $m->kodemodem }}" class="btn btn-warning">Edit</a>
        </div>

	@endforeach

@endsection
