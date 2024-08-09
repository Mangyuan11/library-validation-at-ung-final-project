<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css">
</head>
<body>

        <div class="container my-5">
            <div class="row">
                <div class="col-mb-6 mx-auto d-grid gap-2">
                    @foreach($user_posts as $user_post)
                <form action="{{  url('user_posts', $user_post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Publish year</label>
    <input type="intiger" id="user_id" name="user_id"  value="{{old('user_id', $user_post->user_id)}}" >
    @error('user_id')
        <div>{{ $message }}</div> 
    @enderror
    <div>
        <div class="form-group mb-3">
            <label class="form-lable">Book Title</label>
        <input type="text" name="title_name" calss="form-control"  value="{{old('tile_name', $user_post->title_name)}}">
        @error('title_name')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Description:</label>
    <textarea type="description" id="description" name="description" value="{{old('descriptions', $user_post->description)}}" rows="5" style="width: 100%" ></textarea>
        @error('description')
                <div>{{ $message }}</div> 
            @enderror
    </div>
</div>
<div class="form-group mb-3">
<label class="form-lable">Author</label>
    <input type="text" name="author" calss="form-control" value="{{old('author', $user_post->author)}}">
    @error('author')
            <div>{{ $message }}</div> 
        @enderror
</div>
    <div class="form-group mb-3">
    <label class="form-lable">Publish year</label>
    <input type="date" id="publishdate" name="publishdate"  value="{{old('publishdate', $user_post->publishdate)}}">
        @error('publishdate')
                <div>{{ $message }}</div> 
            @enderror
    <div class="form-group mb-3">
        <button class="btn btn-primary">Save changes</button>
    </div>
    </form>
    @if (session('success'))
        <div>{{ session('success')}}</div>
    @endif
    @endforeach
                </div>
            </div>
        </div>
    </div>


</body>
</html>