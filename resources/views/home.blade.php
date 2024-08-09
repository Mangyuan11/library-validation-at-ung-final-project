
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
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Book Information index</title>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css">
                    </head>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-hover table-primary">
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>Title name</th>
                                            <th>Description</th>
                                            <th>Author</th>
                                            <th>Publish date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user_posts as $user_post)
                                        <tr>
                                            <td>{{$user_post->user_id}}</td>
                                            <td>{{$user_post->title_name}}</td>
                                            <td>{{$user_post->description}}</td>
                                            <td>{{$user_post->author}}</td>
                                            <td>{{$user_post->publishdate}}</td>
                                            <td>
                                                <a href="{{ url('user_posts', $user_post->id)}}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                                                <form action="{{ url('user_posts', $user_post->id)}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('delete na ba ?')">Delete</button>
                                                </form>
                    
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ url('user_posts')}}/create" class="btn btn-outline-success btn-sm">CREATE</a>   
                </div>
            </div>
        </div>
    </div>
</div>

