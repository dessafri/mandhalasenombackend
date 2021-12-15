@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Tambah Artikel</h3>
        <div class="card">
            <div class="card-body">
            <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="namakegiatan" class="form-control-label">Title Artikel</label>
                    <input type="text" class="form-control @error('nama') id-invalid @enderror" id="namakegiatan" value="{{old('nama')}}" name="nama">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="tanggalKegiatan" class="form-control-label">Tanggal Kegiatan</label>
                    <input type="date" class="form-control @error('tanggal') id-invalid @enderror" name="tanggal" id="tanggalKegiatan" value="{{old('tanggal')}}">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                 <div class="form-group">
                    <label for="fotomentor" class="form-control-label">Foto Kegiatan</label>
                    <input 
                    type="file" 
                    class="form-control pb-3 @error('foto') id-invalid @enderror" id="fotomentor" 
                    value="{{old('photo')}}" 
                    name="photo"
                    accept="image/*"
                    required>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="deskripsiKegiatan" class="form-control-label @error('keterangan') id-invalid @enderror">Isi Artikel</label>
                    <textarea name="keterangan" id="deskripsiKegiatan" class="ckeditor form-control">
                        {{old('deskripsiKegiatan')}}
                    </textarea>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
@endsection