@extends('template.ui')

@section('content')
    <div class="container-fluid pt-3">
        <div class="row" >
            <div class="col-lg-6">
                <h1>Student Information</h1>
            </div>
            <div class="col-lg-6">
                <a href="{{ route('home.create') }}" class="btn btn-secondary float-end"><i class="bi bi-person-fill-add"></i> Add Student</a>
            </div>
        </div>
    </div>
    <div class="container-fluid overflow-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Phone</th>
                <th scope="col" class="text-center">Address</th>
                <th scope="col" class="text-center">Gender</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($studentInfos as $i)
              <tr>
                <td class="text-center">{{ $i->name }}</td>
                <td class="text-center">{{ $i->email }}</td>
                <td class="text-center">{{ $i->phone }}</td>
                <td class="text-center">{{ $i->address }}</td>
                <td class="text-center">{{ $i->gender }}</td>
                <td class="text-center"><img src="{{ asset('uploads/'.$i->image) }}" alt="image" style="width: 100px; height: 100px;"></td>
                <td class="text-center">
                    <a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Delete</a>
                </td>
            </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
