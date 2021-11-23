@extends('app');
@section('content')
 <div>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Name</td>
                <td>Action</td>
            </tr>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                           {{$category->name}}
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a> 
                            <a href="#" class="btn btn-danger"> Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
 </div>
@endsection