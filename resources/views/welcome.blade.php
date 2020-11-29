<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
        <p>{{ $message }}</p>
</div>
@endif
<div class="container">

<div class="row">
<div class="col-md-5">
<form class="form-group" method="post" action="{{url('insert')}}" enctype='multipart/form-data'>
{{csrf_field()}}
<input type="file"  class="form-control" name="filename"></br>
@if ($errors->has('filename'))
                    <span class="text-danger">{{ $errors->first('filename') }}</span></br>
                @endif
<button class="btn btn-primary">submit</button>
</form>
</div>
</div>
</div>

</body>
</html>