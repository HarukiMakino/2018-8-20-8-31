<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>データベース</title>
    <link rel="stylesheet" href="{{ asset('/css/showDBDesign.css') }}">
</head>
<body>
<h1>従業員一覧</h1>


<br><a href="home">戻る</a>


<table border="1">
    <tr>
        <th>ID</th>
        <th>苗字</th>
        <th>名前</th>
        <th>苗字かな</th>
        <th>名前かな</th>
        <th>誕生日</th>
        <th>境界ID</th>
        <th>就職日</th>
        <th>場所</th>
    </tr>
    @foreach($employees as $employee)
    <tr>

        <td>{{$employee->id}}</td>
        <td>{{$employee->family_name}}</td>
        <td>{{$employee->given_name}}</td>
        <td>{{$employee->family_name_kana}}</td>
        <td>{{$employee->given_name_kana}}</td>
     　 <td>{{$employee->birthday}}</td>
        <td>{{$employee->division_id}}</td>
        <td>{{$employee->hire_date}}</td>
        <td>{{$employee->position}}</td>
    </tr>
    @endforeach
    </table>

</body>
</html>