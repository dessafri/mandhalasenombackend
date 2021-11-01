@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Edit Agenda</h3>
        <div class="card">
            <div class="card-body">
            <form action="{{route('mentor.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="namaMentor" class="form-control-label">Judul Kegiatan</label>
                    <input type="text" class="form-control @error('title') id-invalid @enderror" id="namaMentor" value="{{old('nama') ? old('nama') : $item->nama }}" name="nama">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jabatanmentor" class="form-control-label @error('Keterangan') id-invalid @enderror">Deskripsi Kegiatan</label>
                    <textarea name="jabatan" id="jabatanmentor" class="ckeditor form-control">
                        {{old('jabatan') ? old('jabatan'): $item-> jabatan}}
                    </textarea>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit Mentor</button>
            </form>
        </div>
        </div>
    </div>
@endsection