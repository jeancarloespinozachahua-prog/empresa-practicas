@extends('layouts.auth')

@section('content')
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    background: url('https://images.alphacoders.com/546/thumb-1920-546091.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #f0f0f0;
    overflow: hidden;
  }

  .login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    position: relative;
    z-index: 1;
  }

  .login-card {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(18px) saturate(150%);
    border-radius: 20px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.5);
    padding: 45px 35px;
    width: 100%;
    max-width: 400px;
    animation: slideUp 0.9s ease;
    border: 1px solid rgba(255,255,255,0.25);
    text-align: center;
    position: relative;
  }

  @keyframes slideUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .login-avatar {
    width: 95px;
    height: 95px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    margin-bottom: -50px;
    position: absolute;
    top: -50px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #fff;
    z-index: 3;
    transition: transform 0.4s ease;
  }

  .login-avatar:hover {
    transform: translateX(-50%) scale(1.08);
  }

  h2 {
    font-weight: bold;
    color: #4dff62ff;
    margin-top: 70px;
    margin-bottom: 25px;
    letter-spacing: 1px;
  }

  .form-group {
    position: relative;
    margin-bottom: 18px;
  }

  .form-control {
    background-color: rgba(124,77,255,0.15); /* violeta translúcido */
    border: 1px solid rgba(124,77,255,0.4);
    padding: 12px 14px;
    border-radius: 10px;
    width: 100%;
    height: 44px; /* un poco más pequeño */
    color: #fff;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(124,77,255,0.3);
  }

  .form-control::placeholder {
    color: #ddd;
  }

  .form-control:focus {
    box-shadow: 0 0 14px #7c4dff;
    border-color: #7c4dff;
    outline: none;
    transform: translateY(-2px); /* efecto flotante */
  }

  .btn-success {
    background: linear-gradient(135deg, #7c4dff, #536dfe);
    border: none;
    font-weight: bold;
    font-size: 1.05em;
    padding: 12px;
    border-radius: 12px;
    color: #fff;
    width: 100%;
    transition: all 0.3s ease;
    cursor: pointer;
    margin-top: 10px;
    box-shadow: 0 4px 14px rgba(124,77,255,0.4);
  }

  .btn-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 18px rgba(124,77,255,0.6);
  }

  .footer-note {
    font-size: 0.85em;
    color: #eee;
    margin-top: 25px;
    text-align: center;
  }

  .alert {
    background-color: rgba(255, 0, 0, 0.15);
    border: 1px solid rgba(255, 0, 0, 0.4);
    color: #ffdddd;
    border-radius: 10px;
    padding: 12px;
    margin-bottom: 20px;
    animation: fadeIn 0.6s ease;
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
</style>

<div class="login-container">
  <div class="login-card position-relative">
    {{-- Avatar --}}
    <img src="https://tse4.mm.bing.net/th/id/OIP.i7BqEaCyeS9uP5smpZWTgAHaE8?pid=Api&P=0&h=180" alt="Avatar Médico" class="login-avatar">
    <h2>🔐 Acceso al sistema</h2>

    {{-- Mensaje de error --}}
    @if(session('error'))
      <div class="alert text-center">
        {{ session('error') }}
      </div>
    @endif

    {{-- Errores de validación --}}
    @if($errors->any())
      <div class="alert">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Formulario --}}
    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <div class="form-group">
        <input type="text" name="nombre" placeholder="Nombre completo" required class="form-control">
      </div>
      <div class="form-group">
        <input type="text" name="dni" placeholder="DNI" required class="form-control">
      </div>
      <button type="submit" class="btn btn-success">🔓 Ingresar</button>
    </form>

    <div class="footer-note">
      <small>© {{ date('Y') }} Diagnóstico Médico | Todos los derechos reservados</small>
    </div>
  </div>
</div>
@endsection
