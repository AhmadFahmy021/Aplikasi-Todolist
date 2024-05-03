@extends('layout.main')
@section('topbar')
<ul class="navbar-nav">
    <li class="nav-item me-1"><a href="{{ url('dashboard')}}" class="btn btn-gray"><i class="fa fa-arrow-left"></i></a>
    </li>
</ul>
@endsection
@section('main')
    
    <div class="row row-main">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-strip" id="table-bawah">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $item)
                        <tr >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->user->email }}</td>
                           
                            <td>
                               <a href="{{ url('delete/collab/'.Crypt::encrypt($item->id)) }}"><i class="fa fa-trash" style="color: #ff0505;"></i></a> 
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="modalTodo">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Todo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                
                <input type="text" class="form-control" value="" id="inputTodo" autocomplete="true">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection

