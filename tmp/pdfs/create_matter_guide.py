from pathlib import Path

from reportlab.lib.colors import HexColor, white
from reportlab.lib.pagesizes import A4
from reportlab.pdfgen import canvas


OUTPUT = Path(__file__).resolve().parents[2] / "public" / "documents" / "guia-estados-de-la-materia.pdf"
WIDTH, HEIGHT = A4


def rounded_card(pdf, x, y, width, height, fill, stroke=None, radius=16):
    pdf.setFillColor(HexColor(fill))
    if stroke:
        pdf.setStrokeColor(HexColor(stroke))
        pdf.setLineWidth(1)
    else:
        pdf.setStrokeColor(HexColor(fill))
    pdf.roundRect(x, y, width, height, radius, stroke=1 if stroke else 0, fill=1)


def text(pdf, value, x, y, size=11, color="#173f34", font="Helvetica", align="left"):
    pdf.setFont(font, size)
    pdf.setFillColor(HexColor(color))
    if align == "center":
        pdf.drawCentredString(x, y, value)
    else:
        pdf.drawString(x, y, value)


def wrap(pdf, value, x, y, max_width, size=10, color="#37574d", leading=14, font="Helvetica"):
    pdf.setFont(font, size)
    pdf.setFillColor(HexColor(color))
    words = value.split()
    line = ""
    current_y = y
    for word in words:
        trial = f"{line} {word}".strip()
        if pdf.stringWidth(trial, font, size) <= max_width:
            line = trial
        else:
            pdf.drawString(x, current_y, line)
            current_y -= leading
            line = word
    if line:
        pdf.drawString(x, current_y, line)
        current_y -= leading
    return current_y


def particles(pdf, x, y, mode):
    pdf.setStrokeColor(HexColor("#2e8fb6"))
    pdf.setFillColor(HexColor("#8cdbf3"))
    if mode == "solid":
        points = [(c * 15, r * 15) for r in range(5) for c in range(5)]
    elif mode == "liquid":
        points = [(10, 12), (28, 10), (46, 14), (64, 10), (19, 29), (38, 27), (56, 31), (72, 28), (30, 47), (50, 45)]
    else:
        points = [(4, 7), (62, 5), (32, 28), (78, 41), (13, 59), (50, 68), (85, 78)]
    for dx, dy in points:
        pdf.circle(x + dx, y + dy, 5, stroke=1, fill=1)


def page_header(pdf, title, subtitle, page):
    pdf.setFillColor(HexColor("#2e7d45"))
    pdf.rect(0, HEIGHT - 88, WIDTH, 88, stroke=0, fill=1)
    pdf.setFillColor(HexColor("#90cf3f"))
    pdf.circle(WIDTH - 58, HEIGHT - 42, 24, stroke=0, fill=1)
    text(pdf, "CIENCIAS NATURALES - GRADO 6", 42, HEIGHT - 34, 9, "#eaffd4", "Helvetica-Bold")
    text(pdf, title, 42, HEIGHT - 61, 24, "#ffffff", "Helvetica-Bold")
    text(pdf, subtitle, 42, HEIGHT - 78, 10, "#e8fff0")
    text(pdf, f"Pagina {page}", WIDTH - 85, 27, 8, "#577267")


def draw_first_page(pdf):
    page_header(pdf, "Estados de la materia", "Observa como se organizan las particulas y reconoce ejemplos cercanos.", 1)
    text(pdf, "REPASO GENERAL", WIDTH / 2, HEIGHT - 125, 11, "#0b6948", "Helvetica-Bold", "center")
    text(pdf, "Solido, liquido y gas", WIDTH / 2, HEIGHT - 151, 21, "#173f34", "Helvetica-Bold", "center")

    cards = [
        (42, "SOLIDO", "#fff4d5", "solid", "Las particulas estan bien comprimidas y organizadas en un patron regular. Vibran en su lugar.", "Ejemplos: libro y lonchera"),
        (220, "LIQUIDO", "#e2f7ff", "liquid", "Las particulas estan juntas, pero no siguen un patron regular. Se deslizan y pasan entre si.", "Ejemplos: agua y jugo"),
        (398, "GAS", "#eaf9df", "gas", "Las particulas estan muy separadas, llenan el espacio y se mueven rapidamente.", "Ejemplos: viento y vapor"),
    ]

    for x, label, fill, mode, paragraph, example in cards:
        rounded_card(pdf, x, 255, 152, 302, fill, "#8fa996", 14)
        rounded_card(pdf, x + 23, 520, 106, 30, "#f5ab2a", "#a66a16", 6)
        text(pdf, label, x + 76, 530, 13, "#4c3511", "Helvetica-Bold", "center")
        particles(pdf, x + 34, 395, mode)
        text(pdf, "Distribucion de", x + 76, 365, 10, "#173f34", "Helvetica-Bold", "center")
        text(pdf, "particulas", x + 76, 352, 10, "#173f34", "Helvetica-Bold", "center")
        wrap(pdf, paragraph, x + 17, 326, 118, 9, "#365448", 12)
        text(pdf, example, x + 76, 276, 9, "#0b6948", "Helvetica-Bold", "center")

    rounded_card(pdf, 42, 156, WIDTH - 84, 64, "#0e8a68", None, 15)
    text(pdf, "Pregunta para pensar", WIDTH / 2, 195, 9, "#dffff0", "Helvetica-Bold", "center")
    text(pdf, "Que cambia cuando el hielo se derrite: la forma, el estado o la sustancia?", WIDTH / 2, 174, 12, "#ffffff", "Helvetica-Bold", "center")


def draw_second_page(pdf):
    page_header(pdf, "Cambios de la materia", "Relaciona una causa con lo que observas en los materiales.", 2)
    text(pdf, "OBSERVA, COMPARA Y EXPLICA", WIDTH / 2, HEIGHT - 125, 11, "#0b6948", "Helvetica-Bold", "center")
    text(pdf, "Cuatro formas de producir cambios", WIDTH / 2, HEIGHT - 151, 21, "#173f34", "Helvetica-Bold", "center")

    causes = [
        (42, 415, "TEMPERATURA", "El hielo se derrite y el agua puede evaporarse.", "#e1f8ff"),
        (310, 415, "FUERZA", "La plastilina cambia de forma al apretarla.", "#f1e8ff"),
        (42, 275, "HUMEDAD", "Un metal humedo puede cambiar con el tiempo.", "#eaffdf"),
        (310, 275, "LUZ", "La luz puede alterar el color de algunos materiales.", "#fff4d5"),
    ]
    for x, y, title, paragraph, fill in causes:
        rounded_card(pdf, x, y, 226, 108, fill, "#b0c9b6", 14)
        rounded_card(pdf, x + 16, y + 73, 78, 21, "#2e8d69", None, 9)
        text(pdf, title, x + 55, y + 79, 7, "#ffffff", "Helvetica-Bold", "center")
        wrap(pdf, paragraph, x + 16, y + 55, 188, 10, "#38594d", 13)

    rounded_card(pdf, 42, 122, WIDTH - 84, 112, "#fff7dd", "#d5aa55", 16)
    text(pdf, "PIENSA - DIALOGA - COMPARTE", WIDTH / 2, 207, 12, "#804912", "Helvetica-Bold", "center")
    questions = [
        "Puedes revolver un solido? Explica por que.",
        "Puedes retener un gas? Explica tu idea.",
        "Que ejemplo de liquido encontraste en casa?",
    ]
    q_y = 184
    for number, question in enumerate(questions, start=1):
        pdf.setFillColor(HexColor("#f5b333"))
        pdf.circle(73, q_y + 2, 10, stroke=0, fill=1)
        text(pdf, str(number), 73, q_y - 1, 8, "#5d3e14", "Helvetica-Bold", "center")
        text(pdf, question, 92, q_y - 2, 10, "#405b4e", "Helvetica")
        q_y -= 24


def main():
    OUTPUT.parent.mkdir(parents=True, exist_ok=True)
    pdf = canvas.Canvas(str(OUTPUT), pagesize=A4)
    pdf.setTitle("Guia: Estados de la materia")
    draw_first_page(pdf)
    pdf.showPage()
    draw_second_page(pdf)
    pdf.save()


if __name__ == "__main__":
    main()
