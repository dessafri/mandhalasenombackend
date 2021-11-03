@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Edit Dokumentasi</h3>
        <div class="card">
            <div class="card-body">
            <form action="{{route('dokumentasi.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="namaMentor" class="form-control-label">Nama Kegiatan</label>
                    <input type="text" class="form-control @error('title') id-invalid @enderror" id="namaMentor" value="{{old('nama') ? old('nama') : $item->nama }}" name="nama">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="tanggalKegiatan" class="form-control-label">Tanggal Kegiatan</label>
                    <input type="date" class="form-control @error('tanggal') id-invalid @enderror" name="tanggal" id="tanggalKegiatan" value="{{old('tanggal') ? old('tanggal') : $item->tanggal}}">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="fotomentor" class="form-control-label">Foto Mentor</label><br>
                    <img src="{{url($item->photo)}}" alt="foto mentor" width="150" height="50">
                    <input 
                    type="file" 
                    class="form-control pb-3 @error('photo') id-invalid @enderror" id="fotomentor" 
                    value="{{old('photo')}}" 
                    name="photo"
                    accept="image/*"
                    required>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit Mentor</button>
            </form>
        </div>
        </div>
    </div>
@endsection