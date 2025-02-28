<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="modal-header">
        <h1>Please edit form</h1>
        </header>
@if(isset($edit_info))
       
        <form method="post" action="{{url('/update')}}" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="hidden_id" value="{{$edit_info->id}}" class="form-control">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{$edit_info->name}}" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="{{$edit_info->email}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="phone" value="{{$edit_info->password}}" class="form-control">
            </div>
            
            <div class="form-group">
                <button class="btn btn-sm btn-primary">Update</button>
            </div>
        </form>
        @endif
</div>
</body>
</html>