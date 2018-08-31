<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>データベース</title>
    <link rel="stylesheet" href="{{ asset('/css/showDBDesign.css') }}">
</head>
<body>
<h1>従業員一覧</h1>


<a href="home">戻る</a><br><br>



<form action="/employeeDatebase" method="get">
    <select name="select">
        <option name="id">ID順</option>
        <option name="family_name">苗字順</option>
        <option name="birthday">誕生日順</option>
        <option name="hire_date">就職日順</option>
        <option name="position">場所順</option>
    </select>

    <select name="sort">
        <option name="asce">昇順</option>
        <option name="desc">降順</option>
    </select>
    <p><input type="submit"value="並び替え"></p>
</form>

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