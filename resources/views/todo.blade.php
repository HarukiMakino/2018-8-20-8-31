<!DOCTYPE html>
<html>
<head>
    <title>TODOリスト</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">

        $(function(){
            //追加を押したら
            $("#addTODOlist").on("click",function(){
                if(!Check())return false;
                //入力チェック
                function Check(){
                    var msg ="";
                    if($("#inputTODO").val()==""){
                        msg +="TODOが入力されていません\n";
                    }
                    if($("#inputTerm").val()==""){
                        msg +="期限が入力されていません\n";
                    }
                    if(msg==""){
                        return true;
                    }else{
                        window.alert(msg);
                        return false;
                    }
                }
                //受け取ったものを追加する
                var inputtodo = $("#inputTODO").val();
                var inputterm = $("#inputTerm").val();
                var inputpriority = $("#inputPriority").val();
                $("#TODOlist").append("<tr><th class='todo'>"+inputtodo+"</th><th class='deadline'>"
                    +inputterm+"</th><th class='yuusen'>"+inputpriority+"</th><th class='ok'><input type='checkbox' ></th></tr>");

                //7日の色チェック
                kekka = calc(inputterm);
                if(kekka < 7){
                    $("#TODOlist .deadline:last").css("color","#0ff");//色変更
                }

            });
        });
        //7日の色チェック関数
        function calc(input){
            deadline= Date.parse(input);
            var time = new Date;
            time = Date.parse(time);
            var kekka = deadline-time;
            kekka = kekka/(1000*60*60*24);
            kekka = Math.floor(kekka);
            return kekka;
        }

        //todo押された時の処理
        $(document).on('click','.todo', function(){
            //テキストをinputのvalueに入れてで置き換え
            var txt = $(this).text();
            $(this).html("<input type='text' class='todo' value='"+txt+"' />");
            //同時にinputにフォーカスをする
            $('.todo > input').focus().blur(function(){
                var inputVal = $(this).val();
                //もし空欄だったら空欄にする前の内容に戻す
                if(inputVal===''){
                    alert("入力エラー");
                    inputVal = this.defaultValue;
                };
                //編集が終わったらtextで置き換える
                $(this).parent().text(inputVal);
            });
        });

        //登録中の期限をクリックしたら編集可能にする
        $(document).on('click','.deadline', function(){
            $(this).replaceWith("<td class='termUpdate'>"
                + "<input type='date' autofocus >"+"</td>");
            $(".todoUpdate").children("input").focus();
        });
        //登録中の期限をラベルに戻す
        $(document).on('focusout','.termUpdate', function(){
            $(this).children("input").replaceWith($(this).children("input").val());
            var inputVal = $(this).text();
            //もし空欄だったら空欄にする前の内容に戻す
            if(inputVal===""){
                alert("入力エラー");
                inputVal = this.defaultValue;
            };
            //7日の色チェック
            kekka = calc(inputVal);
            if(kekka < 7){
                $(this).css("color","#0ff");
            }
            $(this).toggleClass("termUpdate deadline");
        });


        //登録中の優先度をクリックしたら編集可能にする
        $(document).on('click','.yuusen', function(){
            $(this).replaceWith("<td class='priorityUpdate'>"
                + "<select id='inputPriority'><option>低</option><option>中</option><option>高</option></select>"+"</td>");
            $(".priorityUpdate").children("select").focus();
        });

        //優先度の編集が終了したら、Labelに戻す
        $(document).on('focusout','.priorityUpdate', function(){
            $(this).children("select").replaceWith($(this).children("select").val());
            $(this).toggleClass("priorityUpdate yuusen");
        });

        //完了押したときの消す処理
        $(function(){
            $('#doneTODO').on("click", function() {
                $('#TODOlist input[type=checkbox]:checked')/*チェックした要素を取る*/.each(function() {
                    $(this).closest('tr').remove();//tr消す
                });
            });
        });

    </script>
</head>
<body>
<div class="inputform" width="600">
    <label>TODO</label>
    <input type="text" name="TODO" id="inputTODO" size="10">
    <label>期限</label>
    <input type="date" name="term" id="inputTerm" size="5">
    <label>優先度</label>
    <select id="inputPriority">
        <option>低</option>
        <option>中</option>
        <option>高</option>
    </select>
    <input type="button" value="追加" id="addTODOlist">
    <input type="button" value="完了" id="doneTODO">

</div>
<div class="todolist">
    <table width="400" border="1" id="TODOlist">
        <tr>
            <th>TODO</th>
            <th>期限</th>
            <th>優先度</th>
            <th>完了</th>
        </tr>
    </table>
</div>
</body>
</html>