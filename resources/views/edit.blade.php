@extends('layout.main')
@section('main')
    <div class="row">
        <div class="col-12">
            <form action="{{ url('dashboard/'.Crypt::encrypt($data->id)) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="" class="form-label">List Title</label>
                    <input type="text" name="judul" class="form-control" value="{{ $data->title }}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">List Deskripsi</label>
                    <textarea name="deskripsi" placeholder="Deskripsi" class="form-control" id="" cols="30" rows="10">{{ $data->description }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection