<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <style>
    
  </style>
</head>
<body>
  <div class="contents">
    <h1 class="title">Todo List</h1>
    <form class="add" action="/add" method="post">
      <input class="add_text" type="text">
      <input class="add_botton" type="submit" value="追加">
    </form>
    <table class="todo">
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      <tr>
        <td>***</td>
        <td>
          <input class="update_text" type="text">
        </td>
        <td>
          <input class="update_botton" type="submit" value="追加">
        </td>
        <td>
          <input class="delete_botton" type="submit" value="追加">
        </td>
      </tr>
    </table>
  </div>
</body>
</html>