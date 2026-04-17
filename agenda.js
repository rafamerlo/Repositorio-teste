const eventos = [
    {
        titulo: "Consulta médica",
        descricao: "Mãe - Hospital São Lucas",
        horario: "10:00",
        cor: "blue"
    },
    {
        titulo: "Treino de futebol",
        descricao: "Kai - Quadra Municipal",
        horario: "16:30",
        cor: "green"
    },
    {
        titulo: "Jantar em família",
        descricao: "Todos - Em casa",
        horario: "19:00",
        cor: "orange"
    }
];

const agenda = document.getElementById("agenda");

eventos.forEach(evento => {
    agenda.innerHTML += `
        <div class="event-item">
            <span class="dot ${evento.cor}"></span>
            <div class="event-info">
                <strong>${evento.titulo}</strong>
                <p>${evento.descricao}</p>
            </div>
            <span class="time">${evento.horario}</span>
        </div>
    `;
});