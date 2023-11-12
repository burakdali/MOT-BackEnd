@extends('layout.layout');

@section('section1')
services
@endsection

@section('section2')
all services
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                             <div class="card-header">
                                <h3 class="card-title">Services Table</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 100px;">
                                                 <div class="input-group-append">
                                                        <a href="{{route('all_services.create') }}">
                                                            <span>Add services</span>
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
                      <th>number_service</th>
                      <th>type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $service)
                        <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$service->serviece_id}}</td>
                        <td>{{$service->type}}</td>
                            <td>
                                <form action="{{route('all_services.destroy')}}" method="Post">
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
