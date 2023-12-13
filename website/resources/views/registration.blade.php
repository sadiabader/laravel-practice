<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>

    {{-- <style>

        .container{
            height: 400px;
            width: 600px;
            margin-top: 100px;
            background-color: burlywood;
            color: white;
        }
        h1{
        text-align: center;
        margin-top: 20px;
        }
        .mb-3{
        margin-top: 30px;
        margin-bottom: 30px;
        
        
        }
        label{
            margin-left: 10px;
           font-size: 15px;
        }
        .btn{
           background-color:rgb(136, 75, 75);
           color: white;
           
        }
        
        
        </style> --}}
</head>
<body>
    <div class="container">

{{-- @php
    echo 
    print_r($errors)
@endphp --}}

<form action="{{url('/')}}/register" method="POST">
@csrf
<h1>Registration Form</h1>

<div class="mb-3">

<label for="name" class="form-label"> Name</label>
<input type="name"class="form-control"name="name" placeholder="Enter your Name" value="{{old('name')}}">
<span class="text-danger">
  @error('name');
      {{$message}}
  @enderror
</span>
<br>
<label for="email" class="form-label"> Email</label>
<input type="email"class="form-control"name="email" placeholder="Enter your Email"value="{{old('email')}}">
<span class="text-danger">
    @error('email');
        {{$message}}
    @enderror
  </span>
  <br>
<label for="pass" class="form-label"> Password</label>
<input type="pass"class="form-control"name="pass" placeholder="Enter your Password" value="{{old('pass')}}">
<span class="text-danger">
    @error('pass');
        {{$message}}
    @enderror
  </span>
  <br>
<br>
<input type="submit"name="register" value="register" class="btn btn-primary">

</div>

</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>