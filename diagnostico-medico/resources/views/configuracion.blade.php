<!-- Encabezado de configuración -->
<h5 class="config-title">🛠️ Configuración del sistema</h5>

<div class="config-section">
    <ul class="config-list">
        <li><a href="{{ route('configuracion.nombre') }}">📝 Editar nombre</a></li>
        <li><a href="{{ route('configuracion.idioma') }}">🌐 Cambiar idioma</a></li>
        <li><a href="{{ route('configuracion.tema') }}">🎨 Tema visual</a></li>
    </ul>

    <ul class="config-list mt-3">
        <li><a href="{{ route('configuracion.datos') }}">📇 Actualizar datos personales</a></li>
        <li><a href="{{ route('configuracion.historial') }}">📋 Historial clínico</a></li>
        <li><a href="{{ route('configuracion.preferencias') }}">⚕️ Preferencias de diagnóstico</a></li>
    </ul>
</div>

<style>
/* Fuente moderna desde Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');

.config-title {
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.8rem;
    margin-bottom: 25px;
    letter-spacing: 1px;
    text-transform: uppercase;
    position: relative;
    animation: fadeInDown 0.8s ease;

    /* Degradado en el texto */
    background: linear-gradient(90deg, #ff6f61, #ffca28, #42a5f5, #7e57c2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.config-title::after {
    content: "";
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, #ff6f61, #42a5f5);
    animation: underlineGrow 1s ease forwards;
}

@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes underlineGrow {
    from { width: 0; }
    to { width: 60%; }
}

.config-section {
    background: linear-gradient(to bottom, #f5f7fa, #e3f2fd);
    border-radius: 12px;
    padding: 18px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    animation: fadeInUp 0.8s ease;
    max-width: 420px;
    margin: 0 auto;
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(25px); }
    to { opacity: 1; transform: translateY(0); }
}

.config-list {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}

.config-list li {
    margin-bottom: 10px;
}

.config-list a {
    display: block;
    padding: 10px 14px;
    background: #ffffff;
    border-radius: 8px;
    color: #2c3e50;
    font-weight: 500;
    text-decoration: none;
    box-shadow: 0 2px 6px rgba(0,0,0,0.06);
    transition: all 0.3s ease;
    position: relative;
}

.config-list a::after {
    content: "➜";
    position: absolute;
    right: 12px;
    opacity: 0;
    transition: opacity 0.3s ease;
    color: #1e88e5;
}

.config-list a:hover {
    background-color: #e3f2fd;
    color: #1e88e5;
    transform: translateX(4px);
}

.config-list a:hover::after {
    opacity: 1;
}

.config-list a:active {
    background-color: #bbdefb;
    color: #0d47a1;
}

/* Modo oscuro */
body.dark-mode .config-section {
    background: linear-gradient(to bottom, #1e1e1e, #2c2c2c);
    box-shadow: 0 0 12px rgba(255,255,255,0.05);
}

body.dark-mode .config-list a {
    background-color: #2c2c2c;
    color: #f0f0f0;
}

body.dark-mode .config-list a:hover {
    background-color: #333;
    color: #64b5f6;
}
</style>
