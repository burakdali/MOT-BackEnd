@extends('layout.layout');

@section('section1')
services
@endsection

@section('section2')
 services detail
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                             <div class="card-header">
                                <h3 class="card-title">Services detail Table</h3>


                             </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>title In English</th>
                      <th>title In Arabic</th>
                      <th>content In English</th>
                      <th>content In Arabic</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($services_detail as $service)
                        <tr>
                        <td>{{$service->id}}</td>
                        <td>{{$service->titleEN}}</td>
                        <td>{{$service->titleAR}}</td>
                        <td>{{$service->contentEN}}</td>
                        <td>{{$service->contentAR}}</td>

                            <td>
                                <form action="{{route('Services_details.destroy',$service->id)}}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
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
