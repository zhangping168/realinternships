@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><strong>My Saved Jobs</strong> <button href="/logout" class="btn btn-dark float-right">Logout</button></div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                      <table class="table table-bordered">
                         <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Job Title</th>
                              <th scope="col">Action</th>
                              
                            </tr>
                          </thead>
                          <tbody>

                            @foreach($posts as $index=>$post)

                            <tr>
                              <th scope="row">{{$index+1}}</th>
                              <td>
                                  <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                              </td>
                              <td><button class="btn btn-danger">Remove</button></td>
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
@endsection
