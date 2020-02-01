<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="container">
              <h2>Intervention Images</h2>
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="email">Image:</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </body>
</html>



 @if (Session::get('success'))
    
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-4">
            <strong>Image Before Resize:</strong>
        </div>
        <div class="col-md-8">    
            <img src="{{asset('normal_images/'.Session::get('imagename')) }}" />
        </div>
        </div>
        <div class="col-md-12" style="margin-top:10px;">
        <div class="col-md-4">
            <strong>Image after Resize:</strong>
        </div>
        <div class="col-md-8">    
            <img src="{{asset('thumbnail_images/'.Session::get('imagename')) }}" />
        </div>
        </div>
    </div>
    @endif