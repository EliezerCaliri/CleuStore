@extends('layouts.template')


@section('title', 'Tela de Cadastro Do Cliente')

@section('conteudo')

<style>
    
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap');

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        body {
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: #0c0ce94d;
        }
        
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            padding: 3rem;
        }
        .form-header {
            margin-bottom: 3rem;
            display: flex;
            justify-content: space-between;
        }
        .label-button{
            margin: 10px;
            font-weight: bold;
        }
        .login-button {
            display: flex;
            align-items: center;
        }
        .login-button button {
            border: none;
            background-color: #6c63ff;
            padding: 0.4rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-button button:hover {
            background-color: #6b63fff1;
        }
        .login-button button a{
            text-decoration: none;
            font-weight: 500;
            color: #fff;
        }
        .form-header h1::after {
            content: '';
            display: block;
            width: 5rem;
            height: 0.3rem;
            background-color: #6c63ff;
            margin: 0 auto;
            position: absolute;
            border-radius: 10px;
        }
        .input-group{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 1 rem 0;
        }
        .input-box{
            display: flex;
            flex-direction: column;
            margin-bottom: 1.1rem;
        }
        .input-box input {
            margin: 0.6rem 0;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000001c;
        }
        .input-box input:hover{
            background-color: #eeeeee75;
        }
        .input-box input:focus-visible {
            outline: 1px solid #6c63ff;
        }
        .input-box label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #000000c0;
        }
        .input-box input::placeholder {
            color: #000000be;
        }
        .continue-button button {
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: #6c63ff;
            padding: 0.62rem;
            border-radius: 5px;
            cursor: pointer;
        }
        .continue-button button:hover {
            background-color: #6b63fff1;
        }
        .continue-button button a{
            text-decoration: none;
            font-size: 0.93rem;
            font-weight: 500;
            color: #fff;
        }
</style>


 <div class="container">
        <div class="form">
            <form action="{{ route('login.store')}}" method="post">
                @csrf
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <label for="label-button" class="label-button">Faça Login </label>
                        <button> <a href="{{ route('usuario.logar')}}"> Entrar</a></button>
                    </div>
                </div>
                
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname"> Primeiro Nome</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Digite seu primeiro nome" required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="input-box">
                        <label for="lastname"> Sobrenome</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Digite seu ultimo nome"required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="input-box">
                        <label for="email"> Email</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu email"required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
onchange="try{setCustomValidity('')}catch(e){}">
                    </div>
                    
                    <div class="input-box">
                        <label for="number"> Numero de Telefone</label>
                        <input type="tel" id="number" name="number" placeholder="Digite seu numero" required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="input-box">
                        <label for="password"> Senha</label>
                        <input type="password" id="password" name="password" placeholder="Digite sua senha"required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="input-box">
                        <label for="Confirmpassword"> Confirme sua Senha</label>
                        <input type="password" id="Confirmpassword" name="Confirmpassword" placeholder="Digite sua senha"required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                </div>
                <div class="continue-button">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>

        </div> 
 </div>
@endsection