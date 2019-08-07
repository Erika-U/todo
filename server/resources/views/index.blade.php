<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TODO</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <script src="https://kit.fontawesome.com/85ed13b77e.js"></script>
  </head>
  <body>
    <div id="app" class="main">
      <h1>ゆる〜くTODO</h1>
      @{{ new_todo }}
      <div class="form">
        <input type="text" placeholder="すること書いてね" v-model.trim="new_todo">
        <button type="button" class="button" v-on:click="addTodo">ついか</button>
      </div>
      <table>
        <thead>
          <tr>
            <th class="todo-head">すること</th>
            <th>おわったら押す</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="todo in todos" v-bind:key="todo.id">
            <td class="todo"><i class="fas fa-paw"></i>@{{ todo.todo }}</td>
            <td><button type="button" class="button" name="button" v-on:click="deleteTodo(todo.id)">できた</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
