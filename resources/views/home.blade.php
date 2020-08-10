@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Judul Blog</td>
                                  <td>Lorem ipsum</td>
                                  <td>
                                     <a href="" class="btn btn-primary">Edit</a>
                                     <a href="" class="btn btn-danger">delete</a>
                                  </td>
                                </tr>
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
