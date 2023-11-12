@extends('layout.layout');

@section('section1')
Minister
@endsection

@section('section2')
Friendly_Site
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">  Friendly Site Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <div class="input-group-append">
                                <a href="{{route('Friendly_Site.create') }}">
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
                     <th>number</th>
                      <th>number_site</th>
                      <th>name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($FriendlySite as $FriendlySites)
                     <tr>
                       <td>{{$loop->index}}</td>
                        <td>{{$FriendlySites->friendly_site_id}}</td>
                        <td>{{$FriendlySites->name}}</td>
                        <td>
                            <form action="{{route('Friendly_Site.destroy',$FriendlySites->id)}}" method="Post">
                                <a class="btn btn-primary" href="{{route('Friendly_Site.edit',$FriendlySites->id)}}">Edit</a>
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


