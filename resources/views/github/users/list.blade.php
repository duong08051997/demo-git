@extends('home')
@section('title','danh sach hoc sinh')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
           users
        </div>
        <div class="col-12">
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                <tr>

                </tr>
                </thead>
                <tbody>
                @forelse($students as $key =>$student)
                    <tr>
                        <td>{{++$key}}</td>
                        <td><a href="{{route('github.users.detail',$student->login)}}">{{$student->login}}</a></td>
                        <td><a target="_blank" href="{{$student->html_url}}">{{$student->html_url}}</a></td>
                        <td>
                            <img src="{{$student->avatar_url}}" alt="no image" width="50">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>khong co du lieu</td>
                    </tr>
                </tbody>

                @endforelse
            </table>
        </div>
    </div>
@endsection
