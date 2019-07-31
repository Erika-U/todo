<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TODO</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div id="app">
      <h1>ゆる〜くTODO</h1>
      <input type="text" placeholder="すること書いてね">
      <button type="button" class="task_add">ついか</button>
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>すること</th>
            <th>おわったら押す</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="todo in todos" v-bind:key="todo.id">
            <td>@{{ todo.id }}</td>
            <td>@{{ todo.todo }}</td>
            <td><button type="button" name="button">できた</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
