@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Artikel') }}</div>

                <div class="card-body">
                    <div class="row">
                        <p>&nbsp;</p>
                        <div class="col-md-12">
                            <form action="{{route('post-create')}}" method="POST" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea  class="form-control" id="exampleInputPassword1" name="description"></textarea>
                              </div>
                             
                              <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
