<!DOCTYPE html>
<html>
    <body>
        <table >
            <tr>
                <th>Name</th>
                 <th>Email</th>
                 <th>Course</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->course}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>