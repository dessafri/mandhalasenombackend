@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Tambah Mentor</h3>
        <div class="card">
            <div class="card-body">
            <form action="{{route('mentor.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namamentor" class="form-control-label">Nama Mentor</label>
                    <input type="text" class="form-control @error('nama') id-invalid @enderror" id="namamentor" value="{{old('nama')}}" name="nama">
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jabatanmentor" class="form-control-label @error('Keterangan') id-invalid @enderror">Deskripsi Kegiatan</label>
                    <textarea name="jabatan" id="jabatanmentor" class="ckeditor form-control">
                        {{old('jabatan')}}
                    </textarea>
                    @error('type') <div class="text-muted">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
@endsection