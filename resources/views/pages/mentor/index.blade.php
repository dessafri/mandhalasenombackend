@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Daftar Mentor</h3>
        <div class="card">
            <div class="card-body">
            <div class="table table-stats order-table ov-h">
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th style="width: 50%">Jabatan</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                            <td scope="row">{{$item->id}}</td>
                            <td scope="row">{{$item->nama}}</td>
                            <td scope="row">{{$item->jabatan}}</td>
                            <td class="d-block m-auto" scope="row">
                                <a href="{{route('mentor.edit',$item->id)}}" class="btn btn-sm btn-info">
                                    <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                </a>
                                <form action="{{route('mentor.destroy',$item->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Data Tidak Di Temukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection