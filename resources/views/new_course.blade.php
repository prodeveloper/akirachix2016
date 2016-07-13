<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="/courses/add">
            <label for="title">Title</label>
            <input type="text" name="title"/>
            <label for="code">Code</label>
            <input type="text" name="code"/>
            <label for="course">Hours</label>
            <input type="numeric" name="hours"/>
            <input type="hidden" name="_token" value = "{{csrf_token()}}"/>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>