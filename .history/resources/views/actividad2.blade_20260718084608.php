<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Actividad 2 con esquema arrastrable sobre los estados de la materia.">
    <title>Actividad 2 | Ciencia Tierra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="schema-page-body">
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

    <main class="schema-page">
        <section class="schema-hero">
            <div class="schema-hero-copy">
                <span class="eyebrow">Actividad 2</span>
                <h1>Completa el esquema de los cambios de la materia.</h1>
                <p>
                    Arrastra cada palabra al cuadro correcto y arma el mapa como si fuera una guía de clase.
                    La idea es que el estudiante vea los estados, los factores y los ejemplos en una sola vista.
                </p>
                <div class="schema-hints">
                    <span>Sólido</span>
                    <span>Líquido</span>
                    <span>Gaseoso</span>
                    <span>Temperatura</span>
                    <span>Fuerza</span>
                    <span>Humedad</span>
                </div>
            </div>
            <aside class="schema-hero-card">
                <span>Reto visual</span>
                <strong>Llena <span data-dnd-count>0</span>/9 cuadros y arma el mapa.</strong>
                    <p>Usa las tarjetas de la izquierda. Si una no coincide, prueba otra vez hasta completar el esquema de estados.</p>
                <div class="schema-hero-meter" aria-hidden="true">
                    <div data-dnd-bar></div>
                </div>
            </aside>
        </section>

        <section class="schema-workbench" data-dnd>
            <div class="schema-bank">
                <div class="schema-bank-head">
                    <span class="section-kicker">Banco de piezas</span>
                    <h2>Arrastra estos elementos</h2>
                    <p>Las tarjetas usan imagenes sencillas para que el esquema se llene con referencias visuales de los estados de la materia.</p>
                </div>
                <div class="schema-token-grid">
                    <button class="token schema-token token-sky" draggable="true" data-token="solido" data-label="Solido">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M18 22 32 12l14 10v18L32 50 18 40V22Z" fill="#d7f0ff"/>
                            <path d="M24 26h16v16H24z" fill="none" stroke="#fff" stroke-width="3" opacity=".8"/>
                        </svg>
                        <span class="token-label">Solido</span>
                        <small class="token-note">Hielo</small>
                    </button>
                    <button class="token schema-token token-mint" draggable="true" data-token="liquido" data-label="Liquido">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M32 7C24 18 16 27 16 37c0 9 7 17 16 17s16-8 16-17C48 27 40 18 32 7Z" fill="#53d7e6"/>
                            <path d="M23 39c3 4 10 5 18 2" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                        <span class="token-label">Liquido</span>
                        <small class="token-note">Agua</small>
                    </button>
                    <button class="token schema-token token-green" draggable="true" data-token="gas" data-label="Vapor">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M18 38c0-8 6-14 14-14 3 0 6 1 8 3 2-5 7-9 13-9 8 0 13 6 13 14 0 8-6 14-14 14H28c-6 0-10-4-10-8Z" fill="#dff7df"/>
                            <path d="M22 40h24" stroke="#fff" stroke-width="3" stroke-linecap="round" opacity=".85"/>
                        </svg>
                        <span class="token-label">Gaseoso</span>
                        <small class="token-note">Vapor</small>
                    </button>
                    <button class="token schema-token token-yellow" draggable="true" data-token="temperatura" data-label="Temperatura">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M28 14a4 4 0 0 1 8 0v22.1a12 12 0 1 1-8 0V14Z" fill="#ffd84d"/>
                            <circle cx="32" cy="48" r="7" fill="#ff8b2f"/>
                        </svg>
                        <span class="token-label">Temperatura</span>
                    </button>
                    <button class="token schema-token token-blue" draggable="true" data-token="fuerza" data-label="Fuerza">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M14 38c4-10 12-18 24-18 6 0 10 2 14 6l-7 7c-2-2-5-3-8-3-7 0-12 4-15 10l-8-2Z" fill="#cfe8ff"/>
                            <path d="M21 39c7 0 12 3 15 10" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                        <span class="token-label">Fuerza</span>
                    </button>
                    <button class="token schema-token token-coral" draggable="true" data-token="humedad" data-label="Humedad">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M18 30c0-7 6-12 14-12 6 0 11 3 13 8 7 0 13 5 13 12 0 8-6 14-14 14H26c-8 0-14-6-14-14 0-4 2-7 6-8Z" fill="#ffdfd7"/>
                            <circle cx="24" cy="40" r="4" fill="#48c7d6"/>
                            <circle cx="35" cy="44" r="4" fill="#48c7d6"/>
                        </svg>
                        <span class="token-label">Humedad</span>
                    </button>
                    <button class="token schema-token token-lime" draggable="true" data-token="gelatina" data-label="Gelatina">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M19 18h26v28H19z" fill="#e8ffbb"/>
                            <path d="M24 24h16v4H24zm0 9h16v4H24z" fill="#b9d84d"/>
                        </svg>
                        <span class="token-label">Gelatina</span>
                    </button>
                    <button class="token schema-token token-violet" draggable="true" data-token="plastilina" data-label="Plastilina">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M20 22c7-10 20-10 28 0 7 8 2 20-8 22-11 2-24-5-24-14 0-3 1-6 4-8Z" fill="#d9c5ff"/>
                            <path d="M26 33c4 2 9 2 15 0" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                        <span class="token-label">Plastilina</span>
                    </button>
                    <button class="token schema-token token-yellow" draggable="true" data-token="luz" data-label="Luz">
                        <svg viewBox="0 0 64 64" class="token-art" aria-hidden="true">
                            <path d="M32 14a12 12 0 0 0-8 20v5h16v-5a12 12 0 0 0-8-20Z" fill="#ffe46a"/>
                            <path d="M25 44h14" stroke="#fff" stroke-width="3" stroke-linecap="round"/>
                            <path d="M28 50h8" stroke="#f59e0b" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                        <span class="token-label">Luz</span>
                    </button>
                </div>
            </div>

            <div class="schema-map">
                <svg class="schema-map-lines" viewBox="0 0 1200 760" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M602 72 L602 152" />
                    <path d="M602 168 C 496 168, 460 168, 376 168" />
                    <path d="M602 168 C 708 168, 748 168, 836 168" />
                    <path d="M376 168 L376 268" />
                    <path d="M836 168 L836 268" />
                    <path d="M340 390 L340 500" />
                    <path d="M560 390 L560 500" />
                    <path d="M780 390 L780 500" />
                    <path d="M1000 390 L1000 500" />
                    <path d="M376 562 L376 650" />
                    <path d="M836 562 L836 650" />
                </svg>

                <div class="schema-floaters" aria-hidden="true">
                    <img class="schema-floater schema-floater-left" src="{{ asset('images/kids/child-scientist-1.png') }}" alt="">
                    <img class="schema-floater schema-floater-right" src="{{ asset('images/kids/child-painter.png') }}" alt="">
                </div>

                <div class="schema-title-chip">
                    <span>Esquema de aprendizaje</span>
                    <strong>Estados de la materia</strong>
                </div>

                <div class="schema-visual-strip" aria-hidden="true">
                    <article>
                        <span>Solido</span>
                        <strong>Hielo</strong>
                    </article>
                    <article>
                        <span>Liquido</span>
                        <strong>Agua</strong>
                    </article>
                    <article>
                        <span>Gaseoso</span>
                        <strong>Vapor</strong>
                    </article>
                    <article>
                        <span>Factor</span>
                        <strong>Calor</strong>
                    </article>
                </div>

                <div class="schema-status-row" aria-hidden="true">
                    <div class="schema-status-chip"><strong>9</strong><span>cuadros</span></div>
                    <div class="schema-status-chip"><strong>3</strong><span>estados</span></div>
                    <div class="schema-status-chip"><strong>4</strong><span>factores</span></div>
                    <div class="schema-status-chip"><strong>2</strong><span>ejemplos</span></div>
                </div>

                <div class="schema-columns">
                    <section class="schema-group">
                        <div class="schema-group-head">
                            <span class="schema-step">Estados</span>
                            <h3>Los estados de la materia pueden ser</h3>
                        </div>
                        <div class="dropzone schema-dropzone" data-dropzone="solido">
                            <span>Cuadro 1</span>
                            <small>Arrastra aqui</small>
                        </div>
                        <div class="dropzone schema-dropzone" data-dropzone="liquido">
                            <span>Cuadro 2</span>
                            <small>Arrastra aqui</small>
                        </div>
                        <div class="dropzone schema-dropzone" data-dropzone="gas">
                            <span>Cuadro 3</span>
                            <small>Arrastra aqui</small>
                        </div>
                    </section>

                    <section class="schema-group">
                        <div class="schema-group-head">
                            <span class="schema-step">Factores</span>
                            <h3>Se pueden generar por</h3>
                        </div>
                        <div class="schema-factor-grid">
                            <div class="dropzone schema-dropzone small-zone" data-dropzone="temperatura">
                                <span>Cuadro 4</span>
                                <small>Arrastra aqui</small>
                            </div>
                            <div class="dropzone schema-dropzone small-zone" data-dropzone="fuerza">
                                <span>Cuadro 5</span>
                                <small>Arrastra aqui</small>
                            </div>
                            <div class="dropzone schema-dropzone small-zone" data-dropzone="humedad">
                                <span>Cuadro 6</span>
                                <small>Arrastra aqui</small>
                            </div>
                            <div class="dropzone schema-dropzone small-zone" data-dropzone="luz">
                                <span>Cuadro 7</span>
                                <small>Arrastra aqui</small>
                            </div>
                        </div>
                    </section>

                    <section class="schema-group">
                        <div class="schema-group-head">
                            <span class="schema-step">Ejemplos</span>
                            <h3>ejemplos de c</h3>
                        </div>
                        <div class="dropzone schema-dropzone" data-dropzone="gelatina">
                            <span>Cuadro 8</span>
                            <small>Arrastra aqui</small>
                        </div>
                        <div class="dropzone schema-dropzone" data-dropzone="plastilina">
                            <span>Cuadro 9</span>
                            <small>Arrastra aqui</small>
                        </div>
                    </section>
                </div>

                <div class="schema-bg-decor" aria-hidden="true">
                    <img class="decor-item decor-chem" src="{{ asset('images/chem-sticker.png') }}" alt="">
                    <img class="decor-item decor-paint" src="{{ asset('images/paint-splash.png') }}" alt="">
                    <img class="decor-item decor-science" src="{{ asset('images/science-symbols.png') }}" alt="">
                </div>

                <div class="schema-feedback drag-feedback" aria-live="polite">
                    Arrastra una tarjeta al cuadro correcto para comenzar.
                </div>
            </div>
        </section>

        <section class="schema-cards">
            <article class="schema-note schema-note-green">
                <span class="section-kicker">Apoyo visual</span>
                <h2>Usa colores y figuras para guiar la vista</h2>
                <p>
                    Esta actividad tiene un estilo de cartel escolar: piezas claras, rutas simples y personajes
                    en las esquinas para que el mapa se sienta vivo.
                </p>
            </article>
            <article class="schema-note schema-note-blue">
                <span class="section-kicker">Idea de clase</span>
                <h2>Mezcla ciencia con juego</h2>
                <p>
                    Puedes cambiar los cuadros, sumar nuevas tarjetas o reemplazar los ejemplos por otros materiales
                    cuando quieras ampliar el tema.
                </p>
            </article>
        </section>

        <section class="state-detective" aria-labelledby="detective-title" data-state-detective>
            <div class="state-detective-head">
                <span class="section-kicker">Reto de observaci&oacute;n</span>
                <h2 id="detective-title">Adivina el estado</h2>
                <p>Lee las propiedades, observa las part&iacute;culas y elige el estado de la materia que corresponde en cada caso.</p>
            </div>

            <div class="detective-grid">
                <article class="detective-case detective-liquid" data-detective-case data-correct-state="liquido">
                    <div class="detective-case-copy">
                        <span class="detective-name">Caso 1 · Ana</span>
                        <h3>Una sustancia que fluye</h3>
                        <p>Ana encontr&oacute; una sustancia misteriosa con estas propiedades:</p>
                        <ul class="property-bursts">
                            <li>Se adapta a la forma del recipiente</li>
                            <li>Fluye</li>
                            <li>Tiene un volumen fijo</li>
                            <li>Se puede comprimir un poco</li>
                        </ul>
                    </div>
                    <div class="detective-clipboard">
                        <span class="clipboard-clip" aria-hidden="true"></span>
                        <div class="detective-particles particles-liquid-case" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                        </div>
                        <p>Esta es la distribuci&oacute;n de mol&eacute;culas que encontr&oacute; Ana.</p>
                    </div>
                    <div class="detective-choices" role="group" aria-label="Elige el estado de Ana">
                        <button type="button" data-state-choice="solido">S&oacute;lido</button>
                        <button type="button" data-state-choice="liquido">L&iacute;quido</button>
                        <button type="button" data-state-choice="gas">Gas</button>
                    </div>
                    <p class="detective-feedback" aria-live="polite">Elige una respuesta para descubrir el estado.</p>
                </article>

                <article class="detective-case detective-solid" data-detective-case data-correct-state="solido">
                    <div class="detective-case-copy">
                        <span class="detective-name">Caso 2 · Felipe</span>
                        <h3>Una sustancia que conserva su forma</h3>
                        <p>Felipe encontr&oacute; una sustancia misteriosa con estas propiedades:</p>
                        <ul class="property-bursts">
                            <li>R&iacute;gido</li>
                            <li>No fluye</li>
                            <li>Volumen fijo</li>
                            <li>Forma fija</li>
                        </ul>
                    </div>
                    <div class="detective-clipboard">
                        <span class="clipboard-clip" aria-hidden="true"></span>
                        <div class="detective-particles particles-solid-case" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                        </div>
                        <p>Esta es la distribuci&oacute;n de mol&eacute;culas que encontr&oacute; Felipe.</p>
                    </div>
                    <div class="detective-choices" role="group" aria-label="Elige el estado de Felipe">
                        <button type="button" data-state-choice="solido">S&oacute;lido</button>
                        <button type="button" data-state-choice="liquido">L&iacute;quido</button>
                        <button type="button" data-state-choice="gas">Gas</button>
                    </div>
                    <p class="detective-feedback" aria-live="polite">Elige una respuesta para descubrir el estado.</p>
                </article>

                <article class="detective-case detective-gas" data-detective-case data-correct-state="gas">
                    <div class="detective-case-copy">
                        <span class="detective-name">Caso 3 · Valentina</span>
                        <h3>Una sustancia que ocupa todo el espacio</h3>
                        <p>Valentina observ&oacute; una sustancia con estas propiedades:</p>
                        <ul class="property-bursts">
                            <li>No tiene forma fija</li>
                            <li>Llena el recipiente</li>
                            <li>Se puede comprimir</li>
                            <li>Se mueve r&aacute;pidamente</li>
                        </ul>
                    </div>
                    <div class="detective-clipboard">
                        <span class="clipboard-clip" aria-hidden="true"></span>
                        <div class="detective-particles particles-gas-case" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                        </div>
                        <p>Esta es la distribuci&oacute;n de mol&eacute;culas que encontr&oacute; Valentina.</p>
                    </div>
                    <div class="detective-choices" role="group" aria-label="Elige el estado de Valentina">
                        <button type="button" data-state-choice="solido">S&oacute;lido</button>
                        <button type="button" data-state-choice="liquido">L&iacute;quido</button>
                        <button type="button" data-state-choice="gas">Gas</button>
                    </div>
                    <p class="detective-feedback" aria-live="polite">Elige una respuesta para descubrir el estado.</p>
                </article>
            </div>
        </section>

        <section class="schema-observation" aria-labelledby="observacion-title">
            <div class="schema-observation-head">
                <span class="section-kicker">Después del esquema</span>
                <h2 id="observacion-title">Observa, compara y decide</h2>
                <p>Una misma sustancia puede verse diferente cuando cambia la temperatura o cuando recibe una fuerza.</p>
            </div>
            <div class="observation-grid">
                <article class="observation-card observation-ice">
                    <span class="observation-number">01</span>
                    <div class="observation-icon ice-cube" aria-hidden="true"></div>
                    <h3>Hielo y agua</h3>
                    <p>El hielo se derrite al calentarse y se convierte en agua líquida. Es un cambio de estado.</p>
                    <span class="observation-tag">Temperatura</span>
                </article>
                <article class="observation-card observation-clay">
                    <span class="observation-number">02</span>
                    <div class="observation-icon clay-shape" aria-hidden="true"></div>
                    <h3>Plastilina</h3>
                    <p>Al apretarla o moldearla cambia de forma, pero sigue siendo el mismo material.</p>
                    <span class="observation-tag">Fuerza</span>
                </article>
                <article class="observation-card observation-fruit">
                    <span class="observation-number">03</span>
                    <div class="observation-icon fruit-shape" aria-hidden="true"></div>
                    <h3>Fruta al aire</h3>
                    <p>Una fruta puede oscurecerse con el tiempo. Observa el cambio y conversa sobre su causa.</p>
                    <span class="observation-tag">Cambio químico</span>
                </article>
            </div>
            <div class="schema-observation-question">
                <span>Pregunta de cierre</span>
                <strong>¿El material cambió de forma, de estado o se transformó en una sustancia nueva?</strong>
            </div>
        </section>

        <section class="matter-review" aria-labelledby="repaso-title">
            <div class="matter-review-head">
                <span class="section-kicker">Repaso general</span>
                <h2 id="repaso-title">Repaso general</h2>
                <p>Compara la forma en que se organizan las partículas en cada estado de la materia.</p>
            </div>
            <div class="matter-review-grid">
                <article class="matter-state-card solid-state">
                    <div class="matter-state-label">Sólido</div>
                    <div class="particle-box particles-solid" aria-hidden="true">
                        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <h3>Partículas muy juntas</h3>
                    <p>Las partículas están bien comprimidas y organizadas en una estructura regular. Vibran en su posición.</p>
                    <div class="state-example-visual" aria-hidden="true">
                        <img src="{{ asset('images/state-solid-examples.png') }}" alt="">
                    </div>
                    <div class="matter-examples"><span>Ejemplos</span><strong>Libro · lonchera</strong></div>
                </article>
                <article class="matter-state-card liquid-state">
                    <div class="matter-state-label">Líquido</div>
                    <div class="particle-box particles-liquid" aria-hidden="true">
                        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <h3>Partículas cercanas</h3>
                    <p>Las partículas no siguen un patrón regular y hay poco espacio entre sí. Se deslizan y pasan entre sí.</p>
                    <div class="state-example-visual" aria-hidden="true">
                        <img src="{{ asset('images/state-liquid-examples.png') }}" alt="">
                    </div>
                    <div class="matter-examples"><span>Ejemplos</span><strong>Agua · jugo</strong></div>
                </article>
                <article class="matter-state-card gas-state">
                    <div class="matter-state-label">Gases</div>
                    <div class="particle-box particles-gas" aria-hidden="true">
                        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <h3>Partículas separadas</h3>
                    <p>Las partículas están muy espaciadas, llenan el espacio en el que se encuentran y se mueven rápidamente.</p>
                    <div class="state-example-visual" aria-hidden="true">
                        <img src="{{ asset('images/state-gas-examples.png') }}" alt="">
                    </div>
                    <div class="matter-examples"><span>Ejemplos</span><strong>Viento · vapor</strong></div>
                </article>
            </div>
            <div class="matter-review-tip"><span>Idea clave</span>Cuando aumenta la temperatura, las partículas se mueven con mayor rapidez.</div>
        </section>
    </main>

    <footer class="guide-footer schema-footer">
        <div class="footer-brand-block">
            <a class="logo footer-logo" href="{{ url('/') }}">
                <span class="logo-symbol"></span>
                <span>Estados de la materia</span>
            </a>
            <p>Actividad 2 con esquema arrastrable, personajes y apoyo visual para ninos.</p>
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
            <strong>Esquema listo</strong>
            <p>Las tarjetas se sueltan con arrastrar o con clic si prefieres usar el mouse.</p>
        </div>
        <small>Proyecto local editable en Laravel.</small>
    </footer>
</body>
</html>
