<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ホーム</title>

 <!--   <script type="text/javascript" src=“../assets/js/sample.js"></script>-->

</head>
<body>

@if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif

<h1>従業員管理</h1>
<a href="/employeeDatebase">従業員一覧</a>
<a href="/employees">従業員検索画面</a>
<a href="/update">従業員更新</a>
<!--<a href="/todo">TODOリスト</a>-->



</body>
</html>