@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Tambah Mentor</h3>
        <div class="card">
            <div class="card-body">
            <form action="{{route('mentor.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="namamentor" class="form-control-label">Nama Mentor</label>
                    <input type="text" class="form-control @error('nama') id-invalid @enderror" id="namamentor" value="{{old('nama')}}" name="nama">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jabatanmentor" class="form-control-label @error('Keterangan') id-invalid @enderror">Jabatan Mentor</label>
                    <input name="jabatan" id="tanggal" class=" form-control" value="{{old('jabatan')}}">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                 <div class="form-group">
                    <label for="fotomentor" class="form-control-label">Foto Mentor</label>
                    <input 
                    type="file" 
                    class="form-control pb-3 @error('photo') id-invalid @enderror" id="fotomentor" 
                    value="{{old('photo')}}" 
                    name="photo"
                    accept="image/*"
                    required>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
@endsection