@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Tambah Agenda</h3>
        <div class="card">
            <div class="card-body">
            <form action="{{route('agenda.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judulkegiatan" class="form-control-label">Judul Kegiatan</label>
                    <input type="text" class="form-control @error('title') id-invalid @enderror" id="judulkegiatan" value="{{old('title')}}" name="title">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="deskripsiKegiatan" class="form-control-label @error('Keterangan') id-invalid @enderror">Deskripsi Kegiatan</label>
                    <textarea name="Keterangan" id="deskripsiKegiatan" class="ckeditor form-control">
                        {{old('deskripsiKegiatan')}}
                    </textarea>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="tanggalKegiatan" class="form-control-label">Tanggal Kegiatan Kegiatan</label>
                    <input type="date" class="form-control @error('tanggal') id-invalid @enderror" name="tanggal" id="tanggalKegiatan" value="{{old('tanggal')}}">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
@endsection