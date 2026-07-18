<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vista de tareas con cuaderno visual sobre los estados de la materia.">
    <title>Tareas | Ciencia Tierra</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="task-page">
    <header class="topbar">
        <a class="logo" href="{{ url('/') }}" aria-label="Estados de la materia inicio">
            <span class="logo-symbol"></span>
            <span>Estados de la materia</span>
        </a>
        <nav class="nav-menu" aria-label="Navegación principal">
            <a href="{{ url('/') }}">Guía</a>
            <a href="{{ route('retos') }}">Ruta</a>
            <a href="{{ route('actividad2') }}">Actividad 2</a>
            <a href="{{ route('tareas') }}">Tareas</a>
        </nav>
    </header>

    <main class="task-page-main">
        <section class="task-hero">
            <div class="task-hero-copy">
                <span class="eyebrow">Vista de tareas</span>
                <h1>Dos tareas visuales para trabajar los estados de la materia.</h1>
                <p>
                    La idea es que el nino vea una pagina tipo cuaderno, con ilustraciones grandes,
                    sin lineas para escribir y con dos tareas para hacer en casa.
                </p>
                <div class="task-tags">
                    <span>Solido</span>
                    <span>Liquido</span>
                    <span>Gaseoso</span>
                    <span>Agua</span>
                    <span>Harina</span>
                </div>
            </div>
            <aside class="task-hero-card">
                <div class="task-hero-science" aria-hidden="true"><span></span><i></i><b></b></div>
                <span>Cuaderno vivo</span>
                <strong>Tareas para la casa, con dibujos grandes y faciles.</strong>
                <p>Esta vista funciona como una hoja grande con material sencillo y un tablero de apoyo para la clase.</p>
            </aside>
        </section>

        <section class="task-notebook" aria-labelledby="tareas-title">
            <div class="task-notebook-cover">
                <div class="task-decor-layer" aria-hidden="true">
                    <img class="task-decor task-decor-chem" src="{{ asset('images/science-symbols.png') }}" alt="">
                </div>
                <div class="task-chalk-decor" aria-hidden="true">
                    <span class="chalk-star chalk-star-a">✦</span>
                    <span class="chalk-star chalk-star-b">✦</span>
                    <span class="chalk-bubble chalk-bubble-a"></span>
                    <span class="chalk-bubble chalk-bubble-b"></span>
                    <span class="chalk-formula">H₂O</span>
                </div>
                <div class="task-board-side" aria-hidden="true">
                    <img class="task-board-mascot" src="{{ asset('images/path-mascot.png') }}" alt="">
                    <svg class="task-board-arrows" viewBox="0 0 1200 760" preserveAspectRatio="none">
                        <path d="M110 330 C 280 250, 420 250, 580 320 C 720 380, 860 380, 1030 300" />
                        <path d="M120 430 C 300 360, 460 360, 620 430 C 760 490, 900 500, 1040 420" />
                    </svg>
                </div>
                <div class="task-board-strip">
                    <span class="section-kicker">Tablero de tareas</span>
                    <strong>Trabajo en casa sobre los estados de la materia</strong>
                    <p>Lee cada tarea, observa los dibujos y conversa con un adulto sobre lo que sucede.</p>
                </div>
                <div class="task-board-legend" aria-label="Ruta de las tareas">
                    <span><b>1</b> Mezcla y observa</span>
                    <i aria-hidden="true">→</i>
                    <span><b>2</b> Busca ejemplos</span>
                </div>
                <div class="task-notebook-head">
                    <span class="section-kicker">Cuaderno</span>
                    <h2 id="tareas-title">Una misión para mirar la materia en casa</h2>
                    <p>Completa las dos paradas del tablero y llega a clase con una idea para compartir.</p>
                </div>
                <div class="task-grid">
                    <article class="task-card task-card-a">
                        <div class="task-card-ribbon">Tarea 1</div>
                        <div class="task-card-head">
                            <div class="task-card-number">01</div>
                            <div>
                                <h3>En casa: mezcla agua y harina</h3>
                                <p>Pide ayuda y mezcla un poco de agua con harina para ver como cambia.</p>
                            </div>
                        </div>
                        <div class="task-card-clue"><span>Materiales</span><strong>Agua + harina</strong></div>
                        <div class="task-visual-stage task-stage-home" aria-hidden="true">
                            <div class="task-bottle task-bottle-blue"></div>
                            <div class="task-bowl task-bowl-white"></div>
                            <div class="task-bowl task-bowl-white task-bowl-flour"></div>
                            <div class="task-state-chip task-chip-a">Agua</div>
                            <div class="task-state-chip task-chip-b">Harina</div>
                            <div class="task-state-chip task-chip-c">Mezcla final</div>
                            <div class="task-home-note">Mira si queda mas espeso o cambia de forma.</div>
                        </div>
                    </article>

                    <article class="task-card task-card-b">
                        <div class="task-card-ribbon">Tarea 2</div>
                        <div class="task-card-head">
                            <div class="task-card-number">02</div>
                            <div>
                                <h3>Busca tres ejemplos en casa</h3>
                                <p>Encuentra un objeto solido, uno liquido y algo que te recuerde el gas.</p>
                            </div>
                        </div>
                        <div class="task-card-clue"><span>Busca</span><strong>Sólido + líquido + gas</strong></div>
                        <div class="task-visual-stage task-stage-states" aria-hidden="true">
                            <div class="task-state-panel task-panel-solid">
                                <span>Solido</span>
                                <strong>Hielo</strong>
                            </div>
                            <div class="task-state-panel task-panel-liquid">
                                <span>Liquido</span>
                                <strong>Agua</strong>
                            </div>
                            <div class="task-state-panel task-panel-gas">
                                <span>Gaseoso</span>
                                <strong>Vapor</strong>
                            </div>
                            <div class="task-home-note task-home-note-alt">Puedes mirar en la cocina, el baño o la nevera.</div>
                        </div>
                    </article>
                </div>

                <section class="task-talk-board" aria-labelledby="talk-title">
                    <div class="task-talk-intro">
                        <span class="section-kicker">Cierre para conversar</span>
                        <h2 id="talk-title">Piensa, dialoga y comparte</h2>
                        <p>Después de hacer las tareas, usa estas preguntas para explicar lo que descubriste sobre la materia.</p>
                    </div>
                    <div class="task-talk-steps" aria-label="Pasos para conversar">
                        <article class="task-talk-step talk-think">
                            <span>1</span>
                            <strong>Piensa</strong>
                            <p>Toma un momento para revisar tus respuestas y observaciones.</p>
                        </article>
                        <article class="task-talk-step talk-chat">
                            <span>2</span>
                            <strong>Dialoga</strong>
                            <p>Busca un compañero o un adulto y comparen sus ideas.</p>
                        </article>
                        <article class="task-talk-step talk-share">
                            <span>3</span>
                            <strong>Comparte</strong>
                            <p>Cuenta voluntariamente una idea que aprendiste.</p>
                        </article>
                    </div>
                    <div class="task-talk-questions">
                        <div class="talk-question"><b>?</b><p>&iquest;Puedes revolver un s&oacute;lido? Justifica tu respuesta.</p></div>
                        <div class="talk-question"><b>?</b><p>&iquest;Puedes retener un gas? Justifica tu respuesta.</p></div>
                    </div>
                </section>
            </div>
        </section>

        <section class="task-footer-cards">
            <article>
                <span class="section-kicker">Apoyo</span>
                <h2>Apoyo para la Tarea 1</h2>
                <p>
                    Usa un vaso con agua y un poco de harina. Primero mira cada material por separado y luego mezclalos.
                    Pide ayuda si vas a tocar el agua o limpiar la mesa.
                </p>
                <p>
                    Observa si la mezcla queda mas espesa, si cambia la forma y si ya no se ve igual que al principio.
                    Esa diferencia es la idea principal de la actividad.
                </p>
            </article>
            <article>
                <span class="section-kicker">Entrega</span>
                <h2>Entrega para la clase</h2>
                <p>
                    Lleva un dibujo corto o una foto de los materiales que encontraste en casa: un solido, un liquido
                    y algo que te recuerde el gas. Puedes explicar con una frase donde lo viste.
                </p>
                <p>
                    Al final, cuenta si el ejemplo era solido, liquido o gaseoso y por que lo elegiste.
                    Con eso queda lista la entrega oral o en cuaderno.
                </p>
            </article>
        </section>
    </main>

    <footer class="guide-footer task-footer">
        <div class="footer-brand-block">
            <a class="logo footer-logo" href="{{ url('/') }}">
                <span class="logo-symbol"></span>
                <span>Estados de la materia</span>
            </a>
            <p>Vista de tareas con estilo de cuaderno, personajes y apoyo visual para ninos.</p>
        </div>
        <nav class="footer-nav" aria-label="Enlaces del footer">
            <span>Explorar</span>
            <a href="{{ url('/') }}">Guia</a>
            <a href="{{ route('retos') }}">Ruta</a>
            <a href="{{ route('actividad2') }}">Actividad 2</a>
            <a href="{{ route('tareas') }}">Tareas</a>
        </nav>
        <div class="footer-status">
            <span>Estado</span>
            <strong>Cuaderno listo</strong>
            <p>Dos tareas listas para usar como guia o entrega en clase.</p>
        </div>
        <small class="footer-credit"><span>Diseño</span><strong>CrisFaDev</strong></small>
    </footer>
</body>
</html>
