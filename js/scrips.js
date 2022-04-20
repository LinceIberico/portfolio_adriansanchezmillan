'use strict';



$(document).ready(function() {
    $('#btn_contact').remove();

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['PHP', 'JavaScript', 'MySQL', 'Python', 'Java', 'NoSQL'],
            datasets: [{
                label: 'Tecnologías más usadas',
                data: [16.6, 16.6, 16.6, 5, 2, 3],
                backgroundColor: [
                    'rgba(58,77,170,0.4)',
                    'rgba(255,255,0,0.4)',
                    'rgba(63,255,206,0.41)',
                    'rgba(0,125,255,0.4)',
                    'rgba(209,99,74,0.41)',
                    'rgba(63,255,74,0.41)'
                ],
                borderColor: [
                    'rgba(88,77,170,0.4)',
                    'rgba(255,255,0,0.4)',
                    'rgba(93,255,206,0.41)',
                    'rgba(30,125,255,0.4)',
                    'rgba(239,99,74,0.41)',
                    'rgba(93,255,74,0.41)'
                ],
                borderWidth: 1
            }]
        },
    });
});