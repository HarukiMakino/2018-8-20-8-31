<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>社員検索画面</title>
</head>
<body>
<h1>従業員検索</h1>





苗字と名前を入力して検索を押す。<br>
<form action="/employeeSearch" method="get">
    <p>苗字：<input type="text" name="request_family_name"required></p>
    <p>名前：<input type="text" name="request_given_name"required></p>
    <p><input type="submit"value="検索"></p>
</form>

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