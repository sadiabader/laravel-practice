<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
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
            <input type="submit"name="register" value="register" class="btn btn">
            
            </div>
            
            </form>
            
                </div>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
