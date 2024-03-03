@extends('template.ui')

@section('content')
    <h1>Add Student</h1>

    <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone">
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
            <span class="text-danger">{{ $errors->first('address') }}</span>
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Gender:</label>
            <select class="form-select" aria-label="Gender:" id="gender" name="gender">
                <option selected>Open this select menu</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Prefer not to say</option>
              </select>
              <span class="text-danger">{{ $errors->first('gender') }}</span>      
          </div>

          {{-- Dynamic dropdown
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User:</label>
            <select class="form-select" aria-label="Gender:" id="gender" name="gender">
                <option selected>Open this select menu</option>
                @foreach ($users as $u)
                <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endforeach
              </select>
              <span class="text-danger">{{ $errors->first('gender') }}</span>      
          </div> --}}
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
    