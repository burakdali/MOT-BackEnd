@extends('layout.layout');

@section('section1')
media_center
@endsection

@section('section2')
media_center
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> media_center Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <div class="input-group-append">
                                <a href="{{route('media_center.create') }}">
                                    <span>Add news</span>
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
                      <th>number_media</th>
                      <th>title</th>
                      <th>content</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ( $MediaTranslation as $StoreMedia)
                     <tr>
                       <td>{{$loop->index}}</td>
                        <td>{{$StoreMedia->media_center_id}}</td>
                        <td>{{$StoreMedia->title}}</td>
                        <td>{{$StoreMedia->content}}</td>
                        <td>
                            <form action="{{route('media_center.destroy',$StoreMedia->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{route('media_center.edit',$StoreMedia->id) }}">Edit</a>
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


