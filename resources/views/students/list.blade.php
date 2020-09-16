@extends('home')
@section('title','danh sach hoc sinh')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            danh sach hoc sinh
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">stt</th>
                    <th scope="col">anh</th>
                    <th scope="col">ten hoc sinh</th>
                    <th scope="col">ngay sinh</th>
                    <th scope="col">email</th>
                    <th scope="col">lop</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($students as $key =>$student)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <th ><img src="{{asset('storage/'.$student->image)}}" alt="khong co anh" width="50px" height="50px"></th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->date}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                        @foreach($student->groups as $group)
                            - {{$group->name}}
                        @endforeach
                        </td>
                        <td><a href="{{route('students.edit',$student->id)}}">sua</a></td>
                        <td><a href="{{route('students.delete',$student->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="text-danger">xoa</a></td>
                    </tr>
                @empty
                    <tr>
                        <td>khong co du lieu hoc sinh</td>
                    </tr>
                </tbody>

                @endforelse
            </table>
        </div>
    </div>
    <a href="{{route('students.create')}}" class="btn btn-success mt-4">Them hoc sinh</a>
@endsection
