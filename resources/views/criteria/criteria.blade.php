@extends('layout.layout');

@section('section1')
criteria
@endsection

@section('section2')
criteria
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">criteria Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <div class="input-group-append">
                                <a href="{{route('criteria.create') }}">
                                    <span>Add criteria</span>
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
                      <th>number_criteria</th>
                      <th>title</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ( $criteria as $criterias)
                     <tr>
                       <td>{{$loop->index}}</td>
                        <td>{{$criterias->criteria_id}}</td>
                        <td>{{$criterias->title}}</td>
                        <td>
                            <form action="{{route('criteria.destroy',$criterias->id)}}" method="Post">
                                <a class="btn btn-primary" href="{{route('criteria.edit',$criterias->id)}}">Edit</a>
                                 @csrf
                                  @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    <tr>
                </tbody>
                @endforeach
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


