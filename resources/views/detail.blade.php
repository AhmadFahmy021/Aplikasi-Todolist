@extends('layout.main')
@section('topbar')
    <ul class="navbar-nav">
        <li class="nav-item me-1"><a href="{{ url('dashboard')}}" class="btn btn-gray"><i class="fa fa-arrow-left"></i></a>
        </li>
        <li class="nav-item me-1"><a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTodo">Add</a></li>
        <li class="nav-item me-1"><button  class="btn btn-success" onclick="kirim()">Save</button></li>
    </ul>
@endsection
@section('main')
    <style>
        /* footer {
            min-height: 100%;
            position: relative;
        } */
        /* footer {
       position: fixed;
       align-items: center;
       bottom: 0;
       background-color: rgb(195, 196, 190);
       padding-top: 25px;
       padding-bottom: 20px;
       left: 0;
       width: 100%;
       text-align: center;
      
    } */
    </style>
    <div class="row row-main">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-strip" id="table-bawah">
                    @foreach ($data as $item)
                        <tr >
                            <td>{{ $loop->iteration }}</td>
                            @if ($item->status == 'finish')
                            
                                <td ><strike>{{ $item->title }}</strike></td>
                            @else
                                <td>{{ $item->title }}</td>
                            @endif
                            <td>
                                <div class="form-check">
                                    
                                    <input class="form-check-input" onchange="check({{ $item->id }}, '{{ $item->status }}')" @checked($item->status == 'finish')  type="checkbox" value="" id="checkList">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Selesaikan
                                    </label>
                                </div>
                            </td>
                            <td>
                               <a href="{{ url('delete/todo/'.Crypt::encrypt($item->id)) }}"><i class="fa fa-trash" style="color: #ff0505;"></i></a> 
                            </td>
                        </tr>
                    @endforeach
                    <input type="hidden" id="inputParam" value="{{ $kode }}">
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
            </div>
          </div>
        </div>
      </div>
@endsection
@section('footer')
<div class="col-md-6 col-sm-6 text-end">
    
    <a href="{{ url('/delete/all/'.$id, []) }}" class="btn btn-danger  me-5">Delete Todo List</a>
</div>
@if ($list->user_id == Auth::user()->id)
    <div class="col-md-6 col-sm-6">
        <select onchange="collab(value)" class="js-example-basic-single form-select me-3" name="state">
            <option>Pilih User Untuk Collab</option>
            @foreach ($user as $itemUser)
            <option value="{{ $itemUser->id }}">{{ $itemUser->name }} | {{ $itemUser->email }}</option>
            @endforeach
        </select>
    </div>
@endif
@endsection
@section('js')
    <script>
        var inputTodo = document.getElementById('inputTodo');
        var listTodo = document.getElementById('table-bawah');
        
        var list = [];
        function collab(val) {
            // alert(val);
            if (val == 'Pilih User Untuk Collab') {
                console.log('data');
            } else {
                var fullPath = location.pathname;
                var targetSlash = '/detail/';
                var konfersi = fullPath.substring(fullPath.indexOf(targetSlash) + targetSlash.length);
                $.ajax({
                    type: "POST",
                    url: location.origin + "/api/collab",
                    data: {
                        data: val,
                        kode: konfersi,
                    },
                    dataType: "JSON",
                    success: function (data) {
                        // console.log(data);
                        location.reload();
                    }
                });
            }
        }
        function kirim(kode) {
            $.ajax({
                type: "POST",
                url: location.origin + "/api/add",
                data: {data: list},
                dataType: "JSON",
                success: function (data) {
                    // console.log(data);
                    location.reload();
                }
            });
        }
        function check(val, data) {
            var checkList = document.getElementById('checkList');
            // console.log(data);
            if (data == 'finish') {
                $.ajax({
                    type: "POST",
                    url: location.origin + "/api/check",
                    data: {
                        data: 'not finished yet',
                        kode: val
                    },
                    dataType: "JSON",
                    success: function (data) {
                        location.reload();
                    }
                });
            }  else {
                $.ajax({
                    type: "POST",
                    url: location.origin + "/api/check",
                    data: {
                        data: 'finish',
                        kode: val
                    },
                    dataType: "JSON",
                    success: function (data) {
                        location.reload();
                    }
                  
                });
            }
        }
        inputTodo.addEventListener('keypress', function (event) {
            if (event.keyCode == 13) {
                var jumlahBaris = listTodo.rows.length;
                var tambah = jumlahBaris + 1;
                var input = $('#inputTodo').val();
                if (input == []) {
                    // $('#inputTodo').val('Data Tidak Boleh Not Found');
                    $('#inputTodo').attr('placeholder', 'Data Tidak Boleh Kosong');
                } else {
                    list.push({"title": input, "list_id": atob($('#inputParam').val())});

                    $('#table-bawah').append(`
                    <tr>
                        <td>${tambah}</td>
                                <td>${input}</td>
                                <td>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Selesaikan
                                        </label>
                                    </div>
                                </td>
                                <td>
                                   
                                </td>  
                                </tr>
                                `);
                                $('#inputTodo').val('');
                                $('#inputTodo').removeAttr('placeholder');
                }
                            
                        }
                        
                    });
    </script>
@endsection

