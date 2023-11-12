@extends('layout.layout');

@section('section1')
Main Category
@endsection

@section('section2')
all Category
@endsection

@section('content')
<div class="card-body">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                             <div class="card-header">
                                <h3 class="card-title">Categories Table</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 100px;">
                                                 <div class="input-group-append">
                                                        <a href="{{route('all_category.create') }}">
                                                            <span>Add Category</span>
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
                      <th>number_category</th>
                      <th>title</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $mainCategory as $category)
                     <tr>
                       <td>{{$loop->index}}</td>
                       <td>{{$category->main_category_id}}</td>
                        <td>{{$category->title}}</td>
                        <td>
                            <form action="{{route('all_category.destroy', $category->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{route('all_category.edit', $category->id) }}">Edit</a>
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


