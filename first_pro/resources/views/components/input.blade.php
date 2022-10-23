<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">{{$label}}</label>
    <input type="text" name="{{$name}}"  value="{{old('name')}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  <span>@error('name')
      {{$message}}
  @enderror</span></div>