<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
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
    .contents {  
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
  <div class="page">
    <div class="contents">
      <h1 class="title">Todo List</h1>
      <form class="add" action="/add" method="post">
        <input class="add_text" type="text">
        <input class="add_botton" type="submit" value="追加">
      </form>
      <table class="todo_table">
        <tr class="subtitle">
          <th>作成日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        <tr>
          <td>
            {{$items -> created_at}}
          </td>
          <td>
            <form class="update" action="/update" method="post">
              <input class="update_text" type="text" value ="{{$items -> todo}}">
            </form>
          </td>
          <td>
            <input class="update_botton" type="submit" value="更新">
          </td>
          <td>
            <input class="delete_botton" type="submit" value="削除">
          </td>
        </tr>
      </table>
    </div>
  </div>
  
</body>
</html>