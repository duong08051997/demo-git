@extends('home')
@section('title','them moi hoc sinh')
@section('content')

<form action="{{route('students.store')}}" method="post" class="mt-4" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label >anh hoc sinh: </label>
        <input type="file" class="form-control" name="image" required>
    </div>
    <div class="form-group">
        <label >Ten hoc sinh: </label>
        <input type="text" class="form-control" name="name" placeholder="ten hoc sinh" required>
    </div>
    <div class="form-group">
        <label>Email: </label>
        <input type="email" class="form-control" name="email" placeholder="xxx@gmail.com" required>
    </div>
    <div class="form-group ">
        <label >Ngay sinh:</label>
        <input type="date" name="date" class="form-control">
    </div>
    <label >lop:</label>
    @foreach($groups as $group)
    <div class="form-group ">
        <input type="checkbox" name="group[{{$group->id}}]" value="{{$group->id}}"> {{$group->name}}
    </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

