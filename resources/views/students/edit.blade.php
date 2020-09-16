@extends('home')
@section('title','them moi hoc sinh')
@section('content')

    <form action="{{route('students.update',$student->id)}}" method="post" class="mt-4" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >anh hoc sinh: </label>
            <input type="file" class="form-control" name="image"  required>
        </div>
        <div class="form-group">
            <label >Ten hoc sinh: </label>
            <input type="text" class="form-control" name="name" value="{{$student->name}}" required>
        </div>
        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" name="email" value="{{$student->email}}" required>
        </div>
        <div class="form-group ">
            <label >Ngay sinh:</label>
            <input type="date" name="date" value="{{$student->date}}" class="form-control">
        </div>
        <label >lop:</label>
        @foreach($groups as $group)
            <div class="form-group ">
                <input type="checkbox"
               @foreach($student->groups as $groupStu )
                 @if($groupStu->id==$group->id)
                        checked
                  @endif  @endforeach name="group[{{$group->id}}]"
                        value="{{$group->id}}">{{$group->name}}
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
