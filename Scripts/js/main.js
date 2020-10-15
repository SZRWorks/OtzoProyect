


// -----------------------------------
// ----------- Pie graphic -----------
// -----------             -----------
let myChart = document.getElementById('myChart').getContext('2d');

// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 13;
Chart.defaults.global.defaultFontColor = 'black';


let massPopChart = new Chart(myChart, {
    type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data: {
        labels: ['Entertainment', 'Social Contribution', 'Learning Games', 'Technical Contribution'],
        datasets: [{
            label: 'Population',
            data: [
                25,
                25,
                25,
                25
            ],
            //backgroundColor:'green',
            backgroundColor: [
                '#2cff95',
                '#ec3c5b',
                '#228fe9',
                '#9da6a1',
            ],
            borderWidth: 1,
            borderColor: '#D7D7D7',
            hoverBorderWidth: 2,
            hoverBorderColor: '#2f3342'
        }]
    },

    options: {
        title: {
            display: false,
            text: 'Points Acquired',
            position: 'bottom',
            fontSize: 15
        },
        legend: {
            display: false,
            position: 'bottom',
            labels: {
                fontColor: '#000'
            }
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                bottom: 15,
                top: 0
            }
        },
        tooltips: {
            enabled: true
        }
    }

});