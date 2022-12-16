<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo_page</title>
  <style>
    body{
      background-color: royalblue;
    }
    .page {
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items:center;
    }
    /* .contents {  
      background-color: white;
      width:60vw;
      padding:10px 20px;
      border-radius:10px;
    }
    .title {
      font-size: 20px;
    }
    .add {
      margin-bottom:15px;
      display:flex;
      justify-content: space-between;
    }
    .add_text {
      width: 80%;
      padding:5px;
      border:1px solid gray;
      border-radius:5px;
    }
    .add_botton {
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
    } */

    .todo_contents {  
      background-color: white;
      width:60vw;
      padding:10px 20px;
      border-radius:10px;
    }
    .todo_top {
      display:flex;
      justify-content: space-between;
    }
    .login {
      display:flex;
      justify-content: space-between;
    }
    .todo_title {
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

    .tasksearch_botton{
      background-color: white;
      color:yellowgreen;
      border:2px solid yellowgreen;
      border-radius:5px;
      font-size: 10px;
      padding: 5px 10px;
    }

    .add_form {
      margin-top:10px;
    }
    .add {
      margin-bottom:15px;
      display:flex;
      justify-content: space-between;
    }
    .add_tag {
      margin:0 5px;
      border:1px solid gray;
      border-radius:5px;
    }
    .add_text {
      width: 80%;
      padding:5px;
      border:1px solid gray;
      border-radius:5px;
    }
    .add_botton {
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

  </style>
</head>

<body>
  <!-- <div class="page">
    <div class="contents">
      <h1 class="title">Todo List</h1>
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif 
      <form class="add" action="/add" method="post">
        <input class="add_text" name ="todo" type="text">
        <input class="add_botton" type="submit" value="追加">
        @csrf
      </form>
      <table class="todo_table">
        <tr class="subtitle">
          <th>作成日</th>
          <th>タスク名</th>
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
    </div>
  </div> -->

  <div class="page">
    <article class="todo_contents">
      <section class="todo_top">
        <h1 class="todo_title">Todo List</h1>
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

      <section class="todo_main">
        <form action="/move_taskpage" class="tasksearch_link" method="get">
          <input class="tasksearch_botton" type="submit" value="タスク検索">
        </form>

        <div class="add_form">
          <form class="add" action="/add" method="post">
            <input class="add_text" name ="todo" type="text">
            <select class="add_tag" name="tag_id">
              <option value="1">家事</option>
              <option value="2">勉強</option>
              <option value="3">運動</option>
              <option value="4">食事</option>
              <option value="5">移動</option>
            </select>
            <input class="add_botton" type="submit" value="追加">
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
        @foreach($tags as $tag)
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
              <select class="update_tag" name="tag_id">
              @if($item->tag_id === $tag->id)
              <option value="{{$item->tag_id}}" selected>{{$tag->id->tag}}</option>
                @else
                <option value="{{$item->tag_id}}">{{$tag->id->tag}}</option>
                @endif
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

      </section>
  </article>
  <div>
      
  
</body>
</html>