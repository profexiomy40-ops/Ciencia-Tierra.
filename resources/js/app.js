import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const progressState = createProgressState();
    bindQuiz(progressState);
    bindCarousel(progressState);
    bindDragAndDrop(progressState);
    bindStateDetective();
    refreshProgress(progressState);
});

function createProgressState() {
    return {
        total: 3,
        completed: new Set(),
        nodes: Array.from(document.querySelectorAll('[data-node]')),
        countEl: document.querySelector('[data-progress-count]'),
        noteEl: document.querySelector('[data-progress-note]'),
        barEl: document.querySelector('[data-progress-bar]'),
    };
}

function bindStateDetective() {
    const root = document.querySelector('[data-state-detective]');
    if (!root) return;

    root.querySelectorAll('[data-detective-case]').forEach((caseEl) => {
        const correctState = caseEl.dataset.correctState;
        const buttons = Array.from(caseEl.querySelectorAll('[data-state-choice]'));
        const feedback = caseEl.querySelector('.detective-feedback');

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                const isCorrect = button.dataset.stateChoice === correctState;
                buttons.forEach((item) => item.classList.remove('is-selected', 'is-correct', 'is-wrong'));
                button.classList.add('is-selected', isCorrect ? 'is-correct' : 'is-wrong');

                if (feedback) {
                    feedback.textContent = isCorrect
                        ? `Correcto. Corresponde al estado ${button.textContent.trim().toLowerCase()}.`
                        : 'Aun no. Revisa las propiedades y mira como estan distribuidas las particulas.';
                }
            });
        });
    });
}

function markProgress(state, item) {
    if (!item || state.completed.has(item)) return;
    state.completed.add(item);
    refreshProgress(state);
}

function refreshProgress(state) {
    const completed = state.completed.size;
    const percent = Math.round((completed / state.total) * 100);
    const nextPending = Array.from({ length: state.total }, (_, index) => String(index + 1))
        .find((item) => !state.completed.has(item));

    if (state.countEl) {
        state.countEl.textContent = String(completed);
    }

    if (state.barEl) {
        state.barEl.style.width = `${percent}%`;
    }

    if (state.noteEl) {
        if (completed === 0) {
            state.noteEl.textContent = 'Completa las tres actividades para abrir la salida final.';
        } else if (completed < state.total) {
            state.noteEl.textContent = `Vas en ${completed} de ${state.total}. Sigue por la ruta.`;
        } else {
            state.noteEl.textContent = 'Ruta completa. Ya terminaste las tres estaciones.';
        }
    }

    state.nodes.forEach((node) => {
        const nodeIndex = node.dataset.node || '';
        node.classList.toggle('is-complete', state.completed.has(nodeIndex));
        node.classList.toggle('is-active', !state.completed.has(nodeIndex) && nodeIndex === (nextPending || ''));
    });

}

function bindQuiz(state) {
    const root = document.querySelector('[data-quiz]');
    if (!root) return;

    const buttons = Array.from(root.querySelectorAll('[data-answer]'));
    const feedback = root.querySelector('.quiz-feedback');
    const progressItem = root.dataset.progressItem;

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const correct = button.dataset.answer === 'true';
            buttons.forEach((btn) => {
                btn.classList.remove('is-selected', 'is-correct', 'is-wrong');
            });
            button.classList.add('is-selected', correct ? 'is-correct' : 'is-wrong');

            if (feedback) {
                feedback.textContent = correct
                    ? 'Correcto. La temperatura puede producir un cambio de estado.'
                    : 'Todavia no. Busca la opcion que hable de un cambio de estado.';
            }

            if (correct) {
                markProgress(state, progressItem);
            }
        });
    });
}

function bindCarousel(state) {
    const root = document.querySelector('[data-carousel]');
    if (!root) return;

    const slides = Array.from(root.querySelectorAll('[data-slide]'));
    const dots = Array.from(root.querySelectorAll('.dot'));
    const prev = root.querySelector('[data-prev]');
    const next = root.querySelector('[data-next]');
    const progressItem = root.dataset.progressItem;
    let index = 0;
    let completed = false;

    const render = () => {
        slides.forEach((slide, slideIndex) => {
            slide.hidden = slideIndex !== index;
        });
        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle('is-active', dotIndex === index);
        });

        if (!completed && index === slides.length - 1) {
            completed = true;
            markProgress(state, progressItem);
        }
    };

    prev?.addEventListener('click', () => {
        index = (index - 1 + slides.length) % slides.length;
        render();
    });

    next?.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        render();
    });

    render();
}

function bindDragAndDrop(state) {
    const root = document.querySelector('[data-dnd]');
    if (!root) return;

    const tokens = Array.from(root.querySelectorAll('[data-token]'));
    const zones = Array.from(root.querySelectorAll('[data-dropzone]'));
    const feedback = root.querySelector('.drag-feedback');
    const progressItem = root.dataset.progressItem;
    const localCount = document.querySelector('[data-dnd-count]');
    const localBar = document.querySelector('[data-dnd-bar]');
    let selectedToken = null;
    let solvedCount = 0;

    const refreshLocalProgress = () => {
        if (localCount) localCount.textContent = String(solvedCount);
        if (localBar) localBar.style.width = `${Math.round((solvedCount / zones.length) * 100)}%`;
    };

    const showFeedback = (text) => {
        if (feedback) feedback.textContent = text;
    };

    tokens.forEach((token) => {
        token.addEventListener('dragstart', () => {
            selectedToken = token;
            token.classList.add('is-picked');
        });

        token.addEventListener('dragend', () => {
            token.classList.remove('is-picked');
        });

        token.addEventListener('click', () => {
            tokens.forEach((other) => other.classList.remove('is-picked'));
            selectedToken = token;
            token.classList.add('is-picked');
            showFeedback(`Seleccionaste ${token.textContent.trim()}. Ahora toca una casilla.`);
        });
    });

    zones.forEach((zone) => {
        zone.addEventListener('dragover', (event) => {
            event.preventDefault();
        });

        zone.addEventListener('drop', (event) => {
            event.preventDefault();
            const token = selectedToken || tokens.find((item) => item.classList.contains('is-picked'));
            if (!token) return;
            handleDrop(token, zone);
        });

        zone.addEventListener('click', () => {
            const token = selectedToken || tokens.find((item) => item.classList.contains('is-picked'));
            if (!token) {
                showFeedback('Primero elige una tarjeta.');
                return;
            }
            handleDrop(token, zone);
        });
    });

    function handleDrop(token, zone) {
        const groupName = {
            estados: 'Estados',
            factores: 'Factores',
            ejemplos: 'Ejemplos',
        };
        const isGroupedActivity = Boolean(zone.dataset.dropGroup);
        const match = isGroupedActivity
            ? token.dataset.group === zone.dataset.dropGroup
            : token.dataset.token === zone.dataset.dropzone;
        const sourceLabel = token.dataset.label || token.textContent.trim();
        const targetLabel = zone.querySelector('span')?.textContent.trim() || 'casilla';
        const targetGroup = groupName[zone.dataset.dropGroup] || targetLabel;

        if (zone.classList.contains('is-filled')) {
            showFeedback(`Esta casilla ya está ocupada. Elige otra casilla libre de ${targetGroup}.`);
            return;
        }

        if (!match) {
            zone.classList.add('shake');
            window.setTimeout(() => zone.classList.remove('shake'), 250);
            showFeedback(`${sourceLabel} no pertenece a ${targetGroup}. Prueba otra vez.`);
            return;
        }

        solvedCount += 1;

        zone.classList.add('is-filled');
        const label = zone.querySelector('small');
        if (label) {
            label.textContent = sourceLabel;
        }
        token.remove();
        selectedToken = null;
        refreshLocalProgress();
        showFeedback(isGroupedActivity
            ? `Bien. ${sourceLabel} pertenece al grupo ${targetGroup}.`
            : `Bien. ${sourceLabel} coincide con ${targetLabel}.`);

        if (solvedCount === zones.length) {
            root.classList.add('is-complete');
            showFeedback(root.dataset.completionText || (root.querySelector('[data-drop-group]')
                ? 'Actividad completada. Organizaste todos los estados, factores y ejemplos.'
                : 'Actividad completada. Ya emparejaste todos los materiales.'));
            markProgress(state, progressItem);
        }
    }
}
