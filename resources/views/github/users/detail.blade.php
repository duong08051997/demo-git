@extends('home')
@section('title','danh sach hoc sinh')
@section('content')

    <div class="container" >

        <div class="pt-3"></div>
        <div class="row" >
            <div class=" col-sm-6 " id="detail">

                <table class="table "  >
{{--                    <tr>--}}
{{--                        <td style="border: none"> <img  src="{{$students->avatar_url}}" width="150" height="150"  class="rounded-circle" alt=""> </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td style="border: none "> <b>Name:</b> <?php echo $studentss[0][1] ?> </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td style="border: none"> <b>Class:</b> <?php echo $studentss[0][2] ?> </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td style="border: none"> <b>Age:</b> <?php echo $studentss[0][3] ?> </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td style="border: none"> <b>Gender:</b> <?php echo $studentss[0][4] ?></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td style="border: none"> <b>Address:</b> <?php echo $studentss[0][5] ?> </td>--}}
{{--                    </tr>--}}
                </table>
                <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">BACK</button>
            </div>
            <div class="pt-3"></div>
            <div class=" col-sm-6 " id="detail">
                <table class="table table-hover " style="margin-top: 200px">
                    <thead >
{{--                    <?php if (empty($studentss)) : ?>--}}
{{--                    <tr>--}}
{{--                        <td>No data</td>--}}
{{--                    </tr>--}}
{{--                    <?php else: ?>--}}
{{--                    <tr>--}}
{{--                        <th>Subject Name</th>--}}
{{--                        <th>Score</th>--}}
{{--                    </tr>--}}
{{--                    <?php foreach ($studentss as $key => $student): ?>--}}

{{--                    <tr>--}}
{{--                        <td style="border: none"><?php echo $student[6] ?></td>--}}
{{--                        <td style="border: none"><?php echo $student["score"] ?></td>--}}
{{--                    </tr>--}}
{{--                    <?php endforeach; ?>--}}

{{--                    <?php endif; ?>--}}
{{--                    </thead>--}}

                </table>
            </div>
        </div>
    </div>
@endsection

