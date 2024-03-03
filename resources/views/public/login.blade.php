@extends('template.ui')

@section('content')
    <h1>Login</h1>
    
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <span class="text-danger">
                {{ $errors->first('email') }}
                
            </span>
            
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <span class="text-danger">
                {{ $errors->first('password') }}
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection