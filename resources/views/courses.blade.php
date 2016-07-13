<!DOCTYPE html>
<html>
    <body>
        <table >
            <tr>
                <th>Title</th>
                 <th>Code</th>
                 <th>Hours</th>
            </tr>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->title}}</td>
                <td>{{$course->code}}</td>
                <td>{{$course->hours}}</td>
            </tr>
            @endforeach
        </table>
        <a href="/courses/add">Add new course</a>
    </body>
</html>