<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task_page</title>
  <style>
    body{
      background-color: royalblue;
    }
    .page {
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content:center;
      align-items:center;
    }
    .task_contents {  
      background-color: white;
      width:60vw;
      padding:10px 20px;
      border-radius:10px;
    }
    .task_top {
      display:flex;
      justify-content: space-between;
    }
    .login {
      display:flex;
      justify-content: space-between;
    }
    .task_title {
      font-size: 20px;
    }
    .login_text {
      margin-right: 10px;
    }
    .logout_botton {
      margin-top:12px;
      background-color: white;
      color:red;
      border:2px solid red;
      border-radius:5px;
      font-size: 10px;
      padding: 5px 10px;
    }

    .serach_form {
      margin-top:10px;
    }
    .search {
      margin-bottom:15px;
      display:flex;
      justify-content: space-between;
    }
    .search_tag {
      margin:0 5px;
      border:1px solid gray;
      border-radius:5px;
    }
    .search_text {
      width: 80%;
      padding:5px;
      border:1px solid gray;
      border-radius:5px;
    }
    .search_botton {
      background-color: white;
      color:violet;
      border:2px solid violet;
      border-radius:5px;
      font-size: 10px;
      padding: 5px 10px;
    }

        .todo_table {
      text-align: center;
      width: 100%;
    }
    .subtitle {
      font-size:10px;
    }
    .update {
      display:flex;
      justify-content: space-between;
    }
    .update_tag {
      padding:5px;
      border:1px solid gray;
      border-radius:5px;
    }
    .update_text {
      width:90%;
      padding:5px;
      border:1px solid gray;
      border-radius:5px;
    }
    .update_botton {
      background-color: white;
      color:orange;
      border:2px solid orange;
      border-radius:5px;
      font-size: 10px;
      padding: 5px 10px;
    }
    .delete_botton {
      background-color: white;
      color: lightgreen;
      border:2px solid lightgreen;
      border-radius:5px;
      font-size: 10px;
      padding: 5px 10px;
    }

    .back_botton {
      background-color: white;
      color:gray;
      border:2px solid gray;
      border-radius:5px;
      font-size: 10px;
      padding: 5px 10px;
    }
  </style>
</head>

<body>
<div class="page">
  <article class="task_contents">
    <section class="task_top">
      <h1 class="todo_title">タスク検索</h1>
        <div class="login">
          <p class="login_text">{{$user->name.'でログイン中'}}</p>
          <form action="/logout" method="post">
            <input class="logout_botton" type="submit" value="ログアウト">
            @csrf
          </form>
        </div>
        @if (count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif 
    </section>
    <section class="task_main">
      <div class="search_form">
        <form class="search" action="/serach" method="post">
          <input class="search_text" name ="todo" type="text">
          <select class="search_tag" name="tag" value="家事">
            <option value="家事">家事</option>
            <option value="勉強">勉強</option>
            <option value="運動">運動</option>
            <option value="食事">食事</option>
            <option value="移動">移動</option>
          </select>
          <input class="search_botton" type="submit" value="検索">
          @csrf
        </form>
      </div>

      <table class="todo_table">
        <tr class="subtitle">
          <th>作成日</th>
          <th>タスク名</th>
          <th>タグ</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        @foreach($items as $item)
        <tr>
          <td>
            {{$item -> created_at}}
          </td>
          <form class="update" action="/update/?id={{$item->id}}" method="post">
          @csrf
            <td>
              <input class="update_text" name="todo" type="text" value ="{{$item -> todo}}">
            </td>
            <td>
              <select class="update_tag" name="tag" value="{{$item -> tag}}">
                <option value="家事">家事</option>
                <option value="勉強">勉強</option>
                <option value="運動">運動</option>
                <option value="食事">食事</option>
                <option value="移動">移動</option>
              </select>
            </td>
            <td>
              <input class="update_botton" type="submit" value="更新">
            </td>
          </form>
          <td>
            <form class="delete" action="/delete/?id={{$item->id}}" method="post">
            <input class="delete_botton" type="submit" value="削除">
              @csrf
            </form>
          </td>
        </tr>
        @endforeach
      </table>

      <form action="/move_todopage" class="todo_link" method="get">
        <input class="back_botton" type="submit" value="戻る">
      </form>

    </section>
  </article>
  </div>
</body>

</html>