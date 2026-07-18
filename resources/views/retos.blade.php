<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ruta infantil para aprender los cambios de la materia con estaciones, personajes y arrastre.">
    <title>Ruta de la materia | Ciencia Tierra</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="topbar">
        <a class="logo" href="{{ url('/') }}" aria-label="Estados de la materia inicio">
            <span class="logo-symbol"></span>
            <span>Estados de la materia</span>
        </a>
        <nav class="nav-menu" aria-label="Navegación principal">
            <a href="{{ url('/') }}">Guia</a>
            <a href="#camino">Camino</a>
            <a href="#actividad-1">Reto 1</a>
            <a href="#actividad-2">Reto 2</a>
            <a href="#actividad-3">Reto 3</a>
            <a href="{{ route('actividad2') }}">Actividad 2</a>
            <a href="{{ route('tareas') }}">Tareas</a>
        </nav>
    </header>

    <main>
        <section class="path-hero">
            <div class="path-hero-copy">
                <span class="eyebrow">Laboratorio didactico</span>
                <h1>Recorre el camino de la materia con Sofia y Luciana.</h1>
                <p>
                    Una ruta visual para ninos: cada estacion tiene un personaje, una pista y un mini reto.
                    El recorrido se completa paso a paso, como en un juego de clase.
                </p>
            </div>
            <div class="path-score" data-progress-shell>
                <span>Progreso de la ruta</span>
                <strong><span data-progress-count>0</span>/3 estaciones</strong>
                <p data-progress-note>Completa las tres actividades para abrir la salida final.</p>
                <div class="progress-bar" aria-hidden="true"><span data-progress-bar></span></div>
            </div>
        </section>

        <section class="path-scene" aria-label="Escena de la ruta">
            <div class="path-scene-art" data-mascot-stage="0">
                <img class="path-scene-image" src="{{ asset('images/path-scene.png') }}" alt="Escena colorida con un nino explorando un camino de ciencias">
                <img class="path-mascot path-mascot-static" src="{{ asset('images/path-mascot.png') }}" alt="" aria-hidden="true">
                <div class="path-scene-overlay">
                    <div class="path-trail">
                        <span class="trail-node trail-green"></span>
                        <span class="trail-node trail-yellow"></span>
                        <span class="trail-node trail-blue"></span>
                        <span class="trail-node trail-white"></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="route-board" id="camino" aria-labelledby="camino-title">
            <div class="section-heading centered">
                <span class="section-kicker">Camino de aprendizaje</span>
                <h2 id="camino-title">Avanza por estaciones como si fuera un sendero</h2>
            </div>
            <div class="route-path">
                <div class="route-spiral" aria-hidden="true"></div>
                <svg class="route-line" viewBox="0 0 1200 720" preserveAspectRatio="none" aria-hidden="true">
                    <path class="route-line-back" d="M120 90 C 280 20, 420 20, 540 140
                             S 770 340, 920 220
                             S 1110 420, 920 550
                             S 600 690, 470 560
                             S 190 530, 170 360" />
                    <path class="route-line-front" d="M120 90 C 280 20, 420 20, 540 140
                             S 770 340, 920 220
                             S 1110 420, 920 550
                             S 600 690, 470 560
                             S 190 530, 170 360" />
                </svg>
                <article class="path-node is-active" data-node="1">
                    <img class="node-decor node-decor-left" src="{{ asset('images/kids/child-scientist-1.png') }}" alt="" aria-hidden="true">
                    <span class="child-avatar child-sofia">S</span>
                    <div>
                        <strong>Estacion 1</strong>
                        <p>Selecciona la respuesta correcta.</p>
                    </div>
                    <i class="path-dot"></i>
                </article>
                <article class="path-node" data-node="2">
                    <img class="node-decor node-decor-top" src="{{ asset('images/kids/child-painter.png') }}" alt="" aria-hidden="true">
                    <span class="child-avatar child-luciana">L</span>
                    <div>
                        <strong>Estacion 2</strong>
                        <p>Explora el cambio paso a paso.</p>
                    </div>
                    <i class="path-dot"></i>
                </article>
                <article class="path-node" data-node="3">
                    <img class="node-decor node-decor-right" src="{{ asset('images/kids/child-walk.png') }}" alt="" aria-hidden="true">
                    <span class="child-avatar child-clase">3</span>
                    <div>
                        <strong>Estacion 3</strong>
                        <p>Arrastra y completa el camino.</p>
                    </div>
                    <i class="path-dot"></i>
                </article>
            </div>
        </section>

        <section class="section activity-grid" id="actividad-1">
            <article class="activity-panel quiz-panel" data-quiz data-progress-item="1">
                <div class="panel-title">
                    <span class="section-kicker">Estacion 1</span>
                    <h2>Ayuda a Sofia a elegir</h2>
                </div>
                <img class="station-kid station-kid-1" src="{{ asset('images/kids/child-scientist-1.png') }}" alt="" aria-hidden="true">
                <p>Que pasa si calentamos una gelatina?</p>
                <div class="choice-row">
                    <button type="button" class="choice" data-answer="false">Se vuelve mas dura</button>
                    <button type="button" class="choice" data-answer="true">Cambia de estado</button>
                    <button type="button" class="choice" data-answer="false">Cambia de color por arte de magia</button>
                </div>
                <div class="quiz-feedback" aria-live="polite">Elige una opcion para ver la respuesta.</div>
            </article>

            <article class="activity-panel carousel-panel" id="actividad-2" data-carousel data-progress-item="2">
                <div class="panel-title">
                    <span class="section-kicker">Estacion 2</span>
                    <h2>Camino de cambios</h2>
                </div>
                <img class="station-kid station-kid-2" src="{{ asset('images/kids/child-scientist-2.png') }}" alt="" aria-hidden="true">
                <div class="story-row">
                    <span class="story-avatar story-sofia">S</span>
                    <div class="story-bubble">
                        <strong>Luciana dice:</strong>
                        <p>Mira cada escena y aprende que factor cambia el material.</p>
                    </div>
                    <span class="story-avatar story-luciana">L</span>
                </div>
                <div class="carousel-window">
                    <article class="carousel-slide" data-slide>
                        <span>1</span>
                        <strong>Calentar</strong>
                        <p>La temperatura puede cambiar el estado o la consistencia de un material.</p>
                    </article>
                    <article class="carousel-slide" data-slide hidden>
                        <span>2</span>
                        <strong>Moldear</strong>
                        <p>La fuerza puede cambiar la forma de plastilina, masa o arcilla.</p>
                    </article>
                    <article class="carousel-slide" data-slide hidden>
                        <span>3</span>
                        <strong>Iluminar</strong>
                        <p>La intensidad de la luz puede activar elementos fluorescentes.</p>
                    </article>
                    <article class="carousel-slide" data-slide hidden>
                        <span>4</span>
                        <strong>Humedad</strong>
                        <p>El aire y la humedad pueden generar oxidacion o descomposicion.</p>
                    </article>
                </div>
                <div class="carousel-controls">
                    <button type="button" class="icon-btn" data-prev aria-label="Anterior">&#8249;</button>
                    <div class="carousel-dots" aria-label="Progreso">
                        <span class="dot is-active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <button type="button" class="icon-btn" data-next aria-label="Siguiente">&#8250;</button>
                </div>
            </article>
        </section>

        <section class="section drag-section" id="actividad-3" data-dnd data-progress-item="3" data-completion-text="Actividad completada. Relacionaste los estados y los cambios de la materia.">
            <div class="panel-title">
                <span class="section-kicker">Estacion 3</span>
                <h2>Relaciona estados y cambios de la materia</h2>
            </div>
            <img class="station-kid station-kid-3" src="{{ asset('images/kids/child-painter.png') }}" alt="" aria-hidden="true">
            <p>Arrastra cada estado o cambio a su descripción correcta. Puedes comenzar por cualquiera de las seis tarjetas.</p>
            <div class="drag-layout">
                <div class="drag-bank">
                    <button class="token" draggable="true" data-token="solido">Sólido</button>
                    <button class="token" draggable="true" data-token="liquido">Líquido</button>
                    <button class="token" draggable="true" data-token="gaseoso">Gaseoso</button>
                    <button class="token" draggable="true" data-token="condensacion" data-label="Condensación" data-fill-label="Un gas pasa a líquido al enfriarlo.">Un gas pasa a líquido al enfriarlo.</button>
                    <button class="token" draggable="true" data-token="solidificacion" data-label="Solidificación" data-fill-label="Un líquido pasa a sólido al enfriarlo.">Un líquido pasa a sólido al enfriarlo.</button>
                    <button class="token" draggable="true" data-token="vaporizacion" data-label="Vaporización" data-fill-label="Por un aumento de temperatura.">Por un aumento de temperatura.</button>
                </div>
                <div class="drop-grid">
                    <div class="dropzone" data-dropzone="solidificacion"><span>La solidificación se produce cuando:</span><small>Arrastra aqui</small></div>
                    <div class="dropzone" data-dropzone="liquido"><span>No tiene forma propia. Su volumen es fijo, pero se adapta al recipiente que lo contiene.</span><small>Arrastra aqui</small></div>
                    <div class="dropzone" data-dropzone="vaporizacion"><span>La vaporización se produce cuando:</span><small>Arrastra aqui</small></div>
                    <div class="dropzone" data-dropzone="solido"><span>Tiene forma y volumen fijos.</span><small>Arrastra aqui</small></div>
                    <div class="dropzone" data-dropzone="condensacion"><span>La condensación se produce cuando:</span><small>Arrastra aqui</small></div>
                    <div class="dropzone" data-dropzone="gaseoso"><span>No tiene forma propia. No tiene volumen fijo.</span><small>Arrastra aqui</small></div>
                </div>
            </div>
            <div class="drag-feedback" aria-live="polite">Mueve una tarjeta a la descripción correcta.</div>
        </section>

        <section class="retos-decor" aria-hidden="true">
            <img class="retos-decor-item retos-decor-chem" src="{{ asset('images/chem-sticker.png') }}" alt="">
            <img class="retos-decor-item retos-decor-science" src="{{ asset('images/science-symbols.png') }}" alt="">
            <img class="retos-decor-item retos-decor-paint" src="{{ asset('images/paint-splash.png') }}" alt="">
        </section>

        <section class="section summary-task" id="cierre">
            <article>
                <span class="section-kicker">Resumen</span>
                <h2>Mapa mental corto</h2>
                <p>Los cambios físicos alteran forma, volumen o estado. Los químicos crean nuevas sustancias o señales como gases y olor.</p>
            </article>
            <article class="kettle-task-card">
                <div class="kettle-task-copy">
                    <span class="section-kicker">Piensa en esto</span>
                    <h2>¡Piensa en esto!</h2>
                    <p>Es posible que hayas observado a tu padre, madre o tutor calentar agua en una tetera.</p>
                    <p class="kettle-question">¿Qué crees que le está sucediendo a las partículas en el líquido a medida que se calienta?</p>
                </div>
                <div class="kettle-illustration" aria-hidden="true">
                    <span class="steam steam-one"></span>
                    <span class="steam steam-two"></span>
                    <span class="steam steam-three"></span>
                    <span class="kettle-handle"></span>
                    <span class="kettle-spout"></span>
                    <span class="kettle-lid"></span>
                    <span class="kettle-body"><i></i><b></b></span>
                    <span class="kettle-flame"></span>
                </div>
            </article>
        </section>
    </main>

    <footer class="guide-footer alt">
        <div class="footer-brand-block">
            <a class="logo footer-logo" href="{{ url('/') }}">
                <span class="logo-symbol"></span>
                <span>Estados de la materia</span>
            </a>
            <p>Ruta infantil con personajes, estaciones y retos de ciencias para grado 3.</p>
        </div>
        <nav class="footer-nav" aria-label="Enlaces del footer">
            <span>Explorar</span>
            <a href="{{ url('/') }}">Guia</a>
            <a href="#actividad-1">Estacion 1</a>
            <a href="#actividad-2">Estacion 2</a>
            <a href="#actividad-3">Estacion 3</a>
            <a href="{{ route('actividad2') }}">Actividad 2</a>
            <a href="{{ route('tareas') }}">Tareas</a>
        </nav>
        <div class="footer-status">
            <span>Estado</span>
            <strong>Camino listo</strong>
            <p>La seleccion, el carrusel y el arrastre se resuelven en el navegador.</p>
        </div>
        <small class="footer-credit"><span>Diseño</span><strong>CrisFaDev</strong></small>
    </footer>
</body>
</html>
