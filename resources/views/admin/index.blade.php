@extends('layouts.admin')

@section('title', 'Tela de login de Sistema')

@section('conteudo')
<style>
    *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: poppins;
}

body{
  background-color: #E8EDF2;
}

div.container{
  position: absolute;
  top: 50%;
  left: 50%;
  width: 50%;
  transform: translate(-50%,-50%);

  display: flex;
  flex-direction: row;
  align-items: center;

  background-color: white;
  padding: 30px;
  box-shadow: 0 50px 50px -50px darkslategray;
}

div.container div.myform{
  width: 270px;
  margin-right: 30px;
}

div.container div.myform h2{
  color: #1c1c1e;
  margin-bottom: 20px;
}

div.container div.myform input{
  border: none;
  outline: none;
  border-radius: 0;
  width: 100%;
  border-bottom: 2px solid #1c1c1e;
  margin-bottom: 25px;
  padding: 7px 0;
  font-size: 14px;
}
div.container div.myform button{
  color: white;
  background-color: #1c1c1e;
  border: none;
  outline: none;
  border-radius: 2px;
  font-size: 14px;
  padding: 5px 12px;
  font-weight: 500;
}
div.container div.image img{
  width: 300px;
}
</style>
  <div class="container">
    <div class="myform">
      <form method="post" action="{{ route('admin.store') }}">
        <h2>Login de Administrador</h2>
        <input type="text" placeholder="Admin Name" class="login" required>
        <input type="password" placeholder="Password " class="password" required>
        <button type="submit">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="/public/img/logocleustore.png">
    </div>
  </div>
@endsection