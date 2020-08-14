@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{url('create')}}" class="btn btn-primary">Add New</a>
                        </div>
                        <p>&nbsp;</p>
                        <div class="col-md-12">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Title</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $key=>$val)
                                <tr>
                                  <th scope="row">{{$key+1}}</th>
                                  <td>{{$val->title}}</td>
                                  <td>{{$val->description}}</td>
                                  <td>
                                     <a href="{{url('edit/'.$val->id)}}" class="btn btn-primary">Edit</a>
                                     <a href="{{url('delete/'.$val->id)}}" class="btn btn-danger">delete</a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
