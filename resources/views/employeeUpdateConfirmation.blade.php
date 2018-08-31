<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>従業員更新確認画面</title>
</head>
<body>


<h2>更新前</h2>
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
<a href="update">戻る</a>
<br>
<h2>更新内容</h2>
<!--
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
        <th>場所</th>ID
    </tr>
    <tr>
        <td><input type="text" name="request_id"></td>
        <td><input type="text" name="request_family_name"></td>
        <td><input type="text" name="request_given_name"></td>
        <td><input type="text" name="request_family_name_kana"></td>
        <td><input type="text" name="request_given_name_kana"></td>
        <td><input type="text" name="request_birthday"></td>
        <td><input type="text" name="request_division_id"></td>
        <td><input type="text" name="request_hire_date"></td>
        <td><input type="text" name="request_position"></td>id
    </tr>
</table>
-->


<form action="/rewrite" method="post">

    <p><input type="hidden" value="{{$employee->id}}" name="request_id"></p>
    <p>苗字：<input type="text" name="request_family_name"required></p>
    <p>名前：<input type="text" name="request_given_name"required></p>
    <p>苗字かな：<input type="text" name="request_family_name_kana"required></p>
    <p>名前かな：<input type="text" name="request_given_name_kana"required></p>
    <p>場所：<input type="text" name="request_position"required></p>
    <p><input type="submit"value="更新" ></p>

</form>




</body>
</html>