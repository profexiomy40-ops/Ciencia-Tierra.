<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Guía didáctica de ciencias para grado 6 sobre los cambios físicos y químicos de la materia.">
    <title>Estados de la materia | Ciencia Tierra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="topbar">
        <a class="logo" href="{{ url('/') }}" aria-label="Estados de la materia inicio">
            <span class="logo-symbol"></span>
            <span>Estados de la materia</span>
        </a>
        <nav class="nav-menu" aria-label="Navegacion principal">
            <a href="#ficha">Ficha</a>
            <a href="#ruta">Ruta</a>
            <a href="#video-pdf">Video y PDF</a>
            <a href="#objetivos">Objetivos</a>
            <a href="{{ route('tareas') }}">Tareas</a>
            <a href="{{ route('retos') }}">Actividades</a>
        </nav>
    </header>

    <main>
        <section class="hero-guide">
            <div class="hero-copy">
                <span class="eyebrow">Ciencias naturales · Grado 6</span>
                <h1>¿Qué cambios experimenta la materia?</h1>
                <p>
                    Una guía didáctica inspirada en la secuencia oficial: introducción, objetivos,
                    desarrollo, socialización, resumen y tarea. Pensada para niños y fácil de leer.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="#ruta">Ver ruta</a>
                    <a class="btn ghost" href="{{ route('retos') }}">Abrir actividades</a>
                </div>
            </div>

            <div class="hero-panel">
                <div class="video-feature">
                    <span class="section-kicker">Video principal</span>
                    <div class="video-stage">
                        <div class="play-chip">Play</div>
                        <div class="speech-bubble left">El gorro de Luciana</div>
                        <div class="speech-bubble right">Cambios en la materia</div>
                    </div>
                </div>
                <div class="unit-tags">
                    <article>
                        <strong>Materia</strong>
                        <span>Ciencias naturales</span>
                    </article>
                    <article>
                        <strong>Grado</strong>
                        <span>6</span>
                    </article>
                    <article>
                        <strong>Profesor</strong>
                        <span>Xiomara</span>
                    </article>
                    <article>
                        <strong>Unidad</strong>
                        <span>¿Cómo cambian los componentes del mundo?</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="section fact-sheet" id="ficha" aria-labelledby="ficha-title">
            <div class="section-heading centered">
                <span class="section-kicker">Ficha de la unidad</span>
                <h2 id="ficha-title">Datos principales de la guía</h2>
            </div>
            <div class="facts-grid">
                <article>
                    <span>Título</span>
                    <strong>¿Qué cambios experimenta la materia?</strong>
                </article>
                <article>
                    <span>Recurso previo</span>
                    <strong>Actividad 1 y 2 de grado 5</strong>
                </article>
                <article>
                    <span> EDC </span>
                    <strong>Clasificar cambios físicos y químicos
                </article>
                <article>
                    <span>Clase</span>
                    <strong>Introducción, desarrollo y tarea</strong>
                </article>
            </div>
        </section>

        <section class="section roadmap" id="ruta" aria-labelledby="ruta-title">
            <div class="section-heading centered">
                <span class="section-kicker">Ruta didáctica</span>
                <h2 id="ruta-title">Del video a la tarea final</h2>
            </div>
            <div class="roadmap-track">
                <article>
                    <span>1</span>
                    <h3>Introducción</h3>
                    <p>Luciana y Sofía presentan un problema sencillo para activar ideas previas.</p>
                </article>
                <article>
                    <span>2</span>
                    <h3>Objetivos</h3>
                    <p>Se muestran las metas de aprendizaje y se conversa sobre cambios físicos y químicos.</p>
                </article>
                <article>
                    <span>3</span>
                    <h3>Desarrollo</h3>
                    <p>El aula entra a tres actividades didácticas con selección de respuestas y arrastre.</p>
                </article>
                <article>
                    <span>4</span>
                    <h3>Socialización</h3>
                    <p>Los niños comparten lo que observan, comparan y explican sus elecciones.</p>
                </article>
                <article>
                    <span>5</span>
                    <h3>Resumen</h3>
                    <p>La clase cierra con un mapa mental o una idea corta para recordar.</p>
                </article>
                <article>
                    <span>6</span>
                    <h3>Tarea</h3>
                    <p>Experimento en casa con agua y harina para dibujar y explicar lo que pasó.</p>
                </article>
            </div>
        </section>

        <section class="section media-split" id="video-pdf" aria-labelledby="media-title">
            <div class="media-column">
                <div class="section-heading">
                    <span class="section-kicker">Video</span>
                    <h2 id="media-title">Una apertura visual para iniciar la clase</h2>
                </div>
                <div class="video-card">
                    <div class="video-screen">
                        <span class="chip">Introducción</span>
                        <strong>El gorro luminoso de Sofía</strong>
                        <p>Un video de arranque para hablar de fuerza, luz, temperatura y cambios en materiales.</p>
                    </div>
                </div>
            </div>

            <aside class="pdf-card" aria-label="Guía en PDF">
                <span class="section-kicker">PDF docente</span>
                <h3>Material del docente</h3>
                <p>
                    La guía oficial resume objetivos, actividades 1, 2 y 3, socialización, resumen y tarea.
                </p>
                <ul>
                    <li>Objetivos de aprendizaje</li>
                    <li>Flujo de trabajo de la clase</li>
                    <li>Experimento con agua y harina</li>
                </ul>
                <a class="btn ghost" href="https://contenidosparaaprender.colombiaaprende.edu.co/G_3/S/MG/MG_S_G03_U04_L04.pdf" target="_blank" rel="noreferrer">Abrir PDF</a>
            </aside>
        </section>

        <section class="section objectives" id="objetivos" aria-labelledby="objetivos-title">
            <div class="section-heading centered">
                <span class="section-kicker">Objetivos</span>
                <h2 id="objetivos-title">Lo que el estudiante debe lograr</h2>
            </div>
            <div class="objective-list">
                <article>1. Distinguir estado inicial y estado final en un proceso.</article>
                <article>2. Describir efectos de temperatura, luz, humedad y fuerza.</article>
                <article>3. Reconocer cambios reversibles e irreversibles.</article>
                <article>4. Asociar cambios físicos con forma, volumen, movimiento y estado.</article>
                <article>5. Asociar cambios químicos con oxidación, combustión y nuevas sustancias.</article>
                <article>6. Explicar con palabras sencillas cambios físicos y químicos.</article>
                <article>7. Indagar cambios en la descomposición de residuos orgánicos.</article>
            </div>
        </section>

        <section class="section character-band" aria-label="Personajes">
            <article>
                <span class="avatar sofia"></span>
                <div>
                    <strong>Sofía</strong>
                    <p>Niña artista que observa, pregunta y responde con ejemplos simples.</p>
                </div>
            </article>
            <article>
                <span class="avatar luciana"></span>
                <div>
                    <strong>Luciana</strong>
                    <p>Explora materiales y propone experimentos para entender los cambios.</p>
                </div>
            </article>
            <article>
                <span class="avatar classroom"></span>
                <div>
                    <strong>Clase</strong>
                    <p>Todo queda listo para convertir la guía en una experiencia interactiva.</p>
                </div>
            </article>
        </section>
    </main>

    <footer class="guide-footer">
        <div class="footer-brand-block">
            <a class="logo footer-logo" href="{{ url('/') }}">
                <span class="logo-symbol"></span>
                <span>Estados de la materia</span>
            </a>
            <p>Guía didáctica para grado 6, basada en la secuencia oficial de Colombia Aprende.</p>
        </div>
        <nav class="footer-nav" aria-label="Enlaces del footer">
            <span>Explorar</span>
            <a href="#ficha">Ficha</a>
            <a href="#ruta">Ruta</a>
            <a href="{{ route('tareas') }}">Tareas</a>
            <a href="#objetivos">Objetivos</a>
            <a href="{{ route('retos') }}">Actividades</a>
        </nav>
        <div class="footer-status">
            <span>Estado</span>
            <strong>Guía lista para niños</strong>
            <p>Queda preparada para añadir animaciones, sonidos o más ejercicios.</p>
        </div>
        <small>Proyecto local editable en Laravel.</small>
    </footer>
</body>
</html>
