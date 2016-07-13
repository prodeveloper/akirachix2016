<!DOCTYPE html>
<html>
    <body>
        <table >
            <tr>
                <th>Name</th>
                 <th>Date Registration</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>