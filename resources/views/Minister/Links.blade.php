@extends('layout.layout');

@section('section1')
Minister
@endsection

@section('section2')
Links
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">  Links Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <div class="input-group-append">
                                <a href="{{route('Links.create')}}">
                                    <span>Add </span>
                                </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>facebook</th>
                      <th>instagram</th>
                      <th>x</th>
                      <th>linked_in</th>
                      <th>location</th>
                      <th>phone_number</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($link as $links)
                     <tr>
                        <td>{{$links->facebook}}</td>
                        <td>{{$links->instagram}}</td>
                        <td>{{$links->x}}</td>
                        <td>{{$links->linked_in}}</td>
                        <td>{{$links->location}}</td>
                        <td>{{$links->phone_number}}</td>
                        <td>{{$links->email}}</td>
                        <td>
                            <form action="{{route('Links.destroy',$links->id)}}" method="Post">
                                <a class="btn btn-primary" href="{{route('Links.edit',$links->id)}}">Edit</a>
                                 @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    <tr>
                    @endforeach

                </tbody>
                </table>
            </div>
        </div>
    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

@endsection


