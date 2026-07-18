<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Guía didáctica de ciencias para grado 6 sobre las propiedades, estados y cambios de la materia.">
    <title>Estados de la materia | Ciencia Tierra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="guide-page">
    <header class="topbar">
        <a class="logo" href="{{ url('/') }}" aria-label="Estados de la materia, inicio">
            <span class="logo-symbol"></span>
            <span>Estados de la materia</span>
        </a>
        <nav class="nav-menu guide-nav" aria-label="Navegación principal">
            <a class="nav-science-link nav-ficha" href="#ficha"><i aria-hidden="true"></i>Ficha</a>
            <a class="nav-science-link nav-ruta" href="#ruta"><i aria-hidden="true"></i>Ruta</a>
            <a class="nav-science-link nav-media" href="#video-pdf"><i aria-hidden="true"></i>Video y PDF</a>
            <a class="nav-science-link nav-objetivos" href="#objetivos"><i aria-hidden="true"></i>Objetivos</a>
            <a class="nav-science-link nav-tareas" href="{{ route('tareas') }}"><i aria-hidden="true"></i>Tareas</a>
            <a class="nav-science-link nav-actividades" href="{{ route('retos') }}"><i aria-hidden="true"></i>Actividades</a>
        </nav>
    </header>

    <main>
        <section class="hero-guide guide-hero-vivid">
            <div class="hero-copy">
                <span class="eyebrow">Ciencias naturales · Grado 6</span>
                <h1>¿Qué cambios experimenta la materia?</h1>
                <p>
                    Una guía didáctica para descubrir cómo cambian los materiales cuando se calientan, se enfrían,
                    reciben fuerza o se mezclan. Observa, compara y explica con ejemplos de la vida diaria.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="#ruta">Ver ruta</a>
                    <a class="btn ghost" href="{{ route('retos') }}">Abrir actividades</a>
                </div>
                <div class="hero-mini-notes" aria-label="Ideas principales">
                    <span>Observa</span>
                    <span>Experimenta</span>
                    <span>Explica</span>
                </div>
            </div>

            <div class="hero-panel">
                <div class="video-feature guide-showcase">
                    <span class="section-kicker">Pregunta de inicio</span>
                    <div class="video-stage science-window">
                        <div class="science-window-copy">
                            <span>Laboratorio visual</span>
                            <strong>Todo material puede cambiar.</strong>
                            <p>¿Qué ocurre si aplicamos temperatura, fuerza, humedad o luz?</p>
                        </div>
                        <div class="science-orbit orbit-a"></div>
                        <div class="science-orbit orbit-b"></div>
                        <div class="state-bubble bubble-solid">Sólido</div>
                        <div class="state-bubble bubble-liquid">Líquido</div>
                        <div class="state-bubble bubble-gas">Gas</div>
                        <img class="science-doodle-hero" src="{{ asset('images/science-doodles.png') }}" alt="Ilustraciones de una gota, el sol y una molécula">
                    </div>
                </div>
                <div class="unit-tags guide-unit-tags">
                    <article>
                        <strong>Materia</strong>
                        <span>Ciencias naturales</span>
                    </article>
                    <article>
                        <strong>Grado</strong>
                        <span>6</span>
                    </article>
                    <article>
                        <strong>Profesora</strong>
                        <span>Xiomara</span>
                    </article>
                    <article class="unit-wide">
                        <strong>Unidad</strong>
                        <span>Propiedades y estados de la materia</span>
                        <span>¿Cómo cambian los componentes del mundo?</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="section fact-sheet guide-fact-sheet" id="ficha" aria-labelledby="ficha-title">
            <div class="section-heading centered">
                <span class="section-kicker">Ficha de la unidad</span>
                <h2 id="ficha-title">Datos principales de la guía</h2>
                <p class="guide-section-lead">Una ruta corta para mirar un cambio, hacerse una pregunta y encontrar una explicación.</p>
            </div>
            <div class="facts-grid">
                <article>
                    <span>Título</span>
                    <strong>¿Qué cambios experimenta la materia?</strong>
                </article>
                <article>
                    <span>Recurso previo</span>
                    <strong>Actividades de exploración de grado 6</strong>
                </article>
                <article>
                    <span>EBC</span>
                    <strong>Clasifico y verifico las propiedades de la materia.</strong>
                </article>
                <article>
                    <span>Clase</span>
                    <strong>Introducción, desarrollo, socialización y tarea</strong>
                </article>
            </div>
        </section>

        <section class="section guide-concepts" aria-labelledby="conceptos-title">
            <div class="section-heading centered">
                <span class="section-kicker">Ideas para explorar</span>
                <h2 id="conceptos-title">La materia se puede mirar de muchas formas</h2>
            </div>
            <div class="concept-card-grid">
                <article class="concept-card concept-solid">
                    <div class="concept-icon cube-icon" aria-hidden="true"></div>
                    <span>Estado sólido</span>
                    <h3>Conserva su forma</h3>
                    <p>Aunque en algunos casos su forma puede cambiar, como en la plastilina o la arcilla, que son sólidos moldeables.</p>
                </article>
                <article class="concept-card concept-liquid">
                    <div class="concept-icon drop-icon" aria-hidden="true"></div>
                    <span>Estado líquido</span>
                    <h3>Puede cambiar de forma</h3>
                    <p>Se adapta a la forma de cualquier recipiente que lo contiene.</p>
                </article>
                <article class="concept-card concept-gas">
                    <div class="concept-icon cloud-icon" aria-hidden="true"></div>
                    <span>Estado gaseoso</span>
                    <h3>Forma variable</h3>
                    <p>Ocupan todo el espacio del recipiente que los contiene.</p>
                </article>
                <article class="concept-card concept-change">
                    <div class="concept-icon arrows-icon" aria-hidden="true"></div>
                    <span>Cambios</span>
                    <h3>Físicos y químicos</h3>
                    <p>La temperatura, la fuerza, la humedad o la luz pueden producir cambios.</p>
                </article>
            </div>
        </section>

        <section class="section roadmap guide-roadmap" id="ruta" aria-labelledby="ruta-title">
            <div class="section-heading centered">
                <span class="section-kicker">Ruta didáctica</span>
                <h2 id="ruta-title">Del video a la tarea final</h2>
            </div>
            <div class="roadmap-track">
                <article><span>1</span><h3>Introducción</h3><p>¿Qué factores hacen que la materia experimente algunos cambios?</p></article>
                <article><span>2</span><h3>Objetivos</h3><p>Clasificar propiedades de la materia y explicar cambios de la materia.</p></article>
                <article><span>3</span><h3>Desarrollo</h3><p>La clase usa selección, recorrido visual y arrastre de piezas.</p></article>
                <article><span>4</span><h3>Socialización</h3><p>Los estudiantes comparan respuestas y comparten lo que observaron.</p></article>
                <article><span>5</span><h3>Resumen</h3><p>Un esquema ayuda a reunir estados, factores y ejemplos.</p></article>
                <article><span>6</span><h3>Tarea</h3><p>Una experiencia en casa permite reconocer cambios en materiales cotidianos.</p></article>
            </div>
        </section>

        <section class="section media-split guide-media" id="video-pdf" aria-labelledby="media-title">
            <div class="media-column">
                <div class="section-heading">
                    <span class="section-kicker">Video</span>
                    <h2 id="media-title">Una apertura visual para iniciar la clase</h2>
                    <p class="guide-section-lead">Usa el video como punto de partida: pausa, pregunta y relaciona lo que ves con un ejemplo real.</p>
                </div>
                <div class="video-card video-card-vivid">
                    <div class="video-screen">
                        <span class="chip">Video de apoyo</span>
                        <strong>Estados de la materia</strong>
                        <p>Observa ejemplos de sólidos, líquidos y gases antes de continuar con las actividades.</p>
                        <h3 class="video-discovery-title">Cómo cambia la materia: un viaje de descubrimientos</h3>
                        <p class="video-discovery-copy">Descubramos y exploremos los cambios de la materia.</p>
                        <div class="youtube-frame">
                            <iframe src="https://www.youtube-nocookie.com/embed/su_iUGtNUBA?rel=0" title="Estados de la materia para niños" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <a class="video-action" href="https://www.youtube.com/watch?v=su_iUGtNUBA" target="_blank" rel="noreferrer">Abrir en YouTube</a>
                    </div>
                </div>
            </div>

            <aside class="pdf-card guide-pdf-card" aria-label="Guía en PDF">
                <img class="home-lab-sticker" src="{{ asset('images/home-lab-sticker.png') }}" alt="" aria-hidden="true">
                <span class="section-kicker">PDF docente</span>
                <h3>Material de apoyo</h3>
                <p>Esta guía reúne estados de la materia, ejemplos cotidianos, cambios y preguntas para la clase.</p>
                <ul>
                    <li>Estados: sólido, líquido y gas</li>
                    <li>Partículas y ejemplos cotidianos</li>
                    <li>Cambios y preguntas para dialogar</li>
                </ul>
                <div class="pdf-preview-frame">
                    <iframe src="{{ asset('documents/guia-estados-de-la-materia.pdf') }}#page=1&view=FitH" title="Vista previa de la guía de estados de la materia" loading="lazy"></iframe>
                </div>
                <a class="pdf-open-card" href="{{ asset('documents/guia-estados-de-la-materia.pdf') }}" target="_blank" rel="noreferrer"><span aria-hidden="true">PDF</span><strong>Abrir guía de actividades</strong><small>Se abre en una pestaña nueva</small></a>
            </aside>
        </section>

        <section class="section objectives guide-objectives" id="objetivos" aria-labelledby="objetivos-title">
            <div class="section-heading centered">
                <span class="section-kicker">Objetivos</span>
                <h2 id="objetivos-title">Lo que el estudiante debe lograr</h2>
            </div>
            <div class="objective-list">
                <article>1. Clasificar varias sustancias de uso diario en tres estados: sólido, líquido o gaseoso.</article>
                <article>2. Nombrar las propiedades de cada estado.</article>
                <article>3. Identificar la conexión entre la distribución de las partículas y las propiedades de las sustancias.</article>
                <article>4. Explicar con palabras sencillas cambios físicos y químicos.</article>
            </div>
        </section>
    </main>

    <footer class="guide-footer guide-footer-vivid">
        <div class="footer-brand-block">
            <a class="logo footer-logo" href="{{ url('/') }}"><span class="logo-symbol"></span><span>Estados de la materia</span></a>
            <p>Guía didáctica para grado 6, pensada para observar, experimentar y explicar.</p>
        </div>
        <nav class="footer-nav" aria-label="Enlaces del footer">
            <span>Explorar</span>
            <a href="#ficha">Ficha</a><a href="#ruta">Ruta</a><a href="#objetivos">Objetivos</a>
            <a href="{{ route('actividad2') }}">Esquema</a><a href="{{ route('tareas') }}">Tareas</a>
        </nav>
        <div class="footer-status"><span>Recuerda</span><strong>La ciencia empieza al observar</strong><p>Compara, pregunta y busca una explicación para cada cambio.</p></div>
        <small>Proyecto local editable en Laravel.</small>
    </footer>
</body>
</html>
