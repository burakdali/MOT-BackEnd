@extends('layout.layout');

@section('section1')
Minister
@endsection

@section('section2')
Related_Site
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">  Related Site Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <div class="input-group-append">
                                <a href="{{route('Related_Site.create') }}">
                                    <span>Add site </span>
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
                    @foreach ($RelatedSite as $RelatedSites)
                     <tr>
                       <td>{{$loop->index}}</td>
                        <td>{{$RelatedSites->related_site_id}}</td>
                        <td>{{$RelatedSites->name}}</td>
                        <td>
                            <form action="{{route('Related_Site.destroy', $RelatedSites->id)}}" method="Post">
                                <a class="btn btn-primary" href="{{route('Related_Site.edit', $RelatedSites->id)}}">Edit</a>
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


