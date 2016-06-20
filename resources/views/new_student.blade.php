<!DOCTYPE html>
<html>
    <body>
        <form>
            <input type="text" name="name"/>
            <input type="text" name="email"/>
            <input type="text" name="course"/>
            <input type="hidden" name="_token" value = "{{csrf_token()}}"/>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>