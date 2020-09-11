<?php xdebug_break(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Employee List
            <a href="/employees/create" class="btn btn-md btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>新增
            </a>
        </h2>

        <table>
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($employeeList as $emp)
                <tr>
                    <td>{{$emp->firstName}}</td>
                    <td>{{$emp->lastName}}</td>
                    <td>
                        <span class="pull-right">
                            <form method="POST" action="/employees/{{$emp->id}}">
                                <a href="/employees/{{$emp->id}}/edit" class="btn btn-xs btn-info">
                                    <span class="glyphicon glyphicon-pencil"></span>修改
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>刪除
                                </button>
                            </form>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>