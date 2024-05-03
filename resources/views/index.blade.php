@extends('layout.main')
@section('main')
    <div class="row">
        <h2 class="mb-3">Daftar Todo List</h2>
        @foreach ($data as $item)
            <div class="col-4 mt-3">

                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-light">
                        <h5 class="card-title fw-bold">
                            {{ $item->title }}
                        </h5>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a href="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <form action="{{ url('dashboard/'.Crypt::encrypt($item->id)) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <li><button  class="dropdown-item" href="#">Delete</button></li>
                                        <li><a class="dropdown-item" href="{{ url('detail/collab/'.Crypt::encrypt($item->id)) }}">Show Collab</a></li>
                                        <li><a class="dropdown-item" href="{{ url('dashboard/'.Crypt::encrypt($item->id).'/edit') }}">Update List</a></li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('detail', [Crypt::encrypt($item->id)]) }}" class="link-card text-decoration-none text-dark">
                        <div class="card-body">
                            @if ($item->description == null)
                                <ol>
                                   @foreach ($item->todo->take(5) as $itemT)
                                        <li>{{ $itemT->title }}</li>
                                   @endforeach

                                </ol>
                            @else
                                {{ $item->description }}
                            @endif
                            {{-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> --}}
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <h2 class="mb-3">Daftar Todo List Collab</h2>
        @foreach ($collabData as $itemCollab)
            {{-- forea --}}
        <div class="col-4 mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-header bg-light">
                    <h5 class="card-title fw-bold">
                        {{$itemCollab->title}}
                    </h5>
                    
                </div>
                <a href="{{ url('detail', [Crypt::encrypt($itemCollab->id)]) }}" class="link-card text-decoration-none text-dark">
                    <div class="card-body">

                    @if ($item->description == null)
                        <ol>
                           @foreach ($itemCollab->todo->take(5) as $itemC)
                                <li>{{ $itemC->title ?? 'Data Not Found'}}</li>
                           @endforeach
                            {{-- @endforeach --}}
                            {{-- <li>Menu</li>
                            <li>Menu</li>
                            <li>Menu</li> --}}

                        </ol>
                    @else
                        {{ $item->description }}
                    @endif
                        {{-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> --}}
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <button class="btn btn-primary rounded-circle  floating" data-bs-toggle="modal" data-bs-target="#modalAdd"><i
            class="fa fa-plus"></i></button>

    <div class="modal" tabindex="-1" id="modalAdd">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <form action="{{ url('dashboard') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-">
                            <label for="" class="from-label">List Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group mb-">
                            <label for="" class="from-label">List Description</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer float-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <div class="col-md-12 col-sm-12 text-center">
        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span
            class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
    </div>
@endsection
