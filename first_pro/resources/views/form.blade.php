
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @push('title')
    <title>Form</title>
    @endpush
</head>
<body>
    <div class="container">
        <h1 class="text-center">Registration</h1>
<form action="{{url('/')}}/register" method="post">
    @csrf
    @php
        $demo =1;
    @endphp
    <x-input type="text" name="name" label="Name" :demo='$demo'/>

   {{---}} <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" name="name"  value="{{old('name')}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      <span>@error('name')
          {{$message}}
      @enderror</span></div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <span>@error('email')
            {{$message}}
        @enderror</span></div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="password" name="password"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <span>@error('password')
            {{$message}}
        @enderror</span></div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Paasword</label>
        <input type="password"  name="confirm_password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <span>@error('confirm_password')
            {{$message}}
        @enderror</span></div>{{--}}<button>Submit</button>



</form>
    </div>
    
</body>
</html>