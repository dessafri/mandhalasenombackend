@extends('layouts.default')

@section('content')
    <div class="container">
        <h3 class="mt-5 box-title">Daftar Agenda</h3>
        <div class="card">
            <div class="card-body">
            <div class="table table-stats order-table ov-h">
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Agenda</th>
                        <th style="width: 50%">Keterangan</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                            <td scope="row">{{$item->id}}</td>
                            <td scope="row">{{$item->title}}</td>
                            <td scope="row">{{$item->Keterangan}}</td>
                            <td scope="row">{{$item->tanggal}}</td>
                            <td class="d-block m-auto" scope="row">
                                <a href="{{route('agenda.edit',$item->id)}}" class="btn btn-sm btn-info">
                                    <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                </a>
                                <form action="{{route('agenda.destroy',$item->id)}}" method="post" class="d-inline">
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