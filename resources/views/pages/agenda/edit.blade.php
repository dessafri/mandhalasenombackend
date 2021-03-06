@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Edit Agenda</h3>
        <div class="card">
            <div class="card-body">
            <form action="{{route('agenda.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="judulkegiatan" class="form-control-label">Judul Kegiatan</label>
                    <input type="text" class="form-control @error('title') id-invalid @enderror" id="judulkegiatan" value="{{old('title') ? old('title') : $item->title }}" name="title">
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
                <div class="form-group">
                    <label for="deskripsiKegiatan" class="form-control-label @error('Keterangan') id-invalid @enderror">Deskripsi Kegiatan</label>
                    <textarea name="Keterangan" id="deskripsiKegiatan" class="ckeditor form-control">
                        {{old('deskripsiKegiatan') ? old('deskripsiKegiatan'): $item-> Keterangan}}
                    </textarea>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="tanggalKegiatan" class="form-control-label">Tanggal Kegiatan</label>
                    <input type="date" class="form-control @error('tanggal') id-invalid @enderror" name="tanggal" id="tanggalKegiatan" value="{{old('tanggal') ? old('tanggal') : $item->tanggal}}">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit Agenda</button>
            </form>
        </div>
        </div>
    </div>
@endsection