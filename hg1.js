const data={
    labels: ['12:00AM', '1:00AM', '2:00AM','3:00AM','4:00AM','5:00AM','6:00AM','7:00AM','8:00AM','9:00AM','10:00AM',
    '11:00AM','12:00 Noon','1:00PM','2:00PM','3:00PM','4:00PM','5:00PM','6:00PM','7:00PM','8:00PM','10:00PM',
    '11:00PM'],

    datasets:[{
        label:"Water level",
        data:[12,19,33,27,47,30,40,23,60,80,100,200,12,45,60,34,32,70,89,90,21,22,60],
        backgroundColor:[
            'rgba(255,99,132,0.2)',
            'rgba(54,162,235,0.2)',
            'rgba(255,206,86,0.2)',
            'rgba(75,102,192,0.2)',
            'rgba(255,159,255,0.2)'
        ],
        borderColor:[
            'rgba(255,99,132,1)',
            'rgba(54,162,235,1)',
            'rgba(255,206,86,1)',
            'rgba(75,102,192,1)',
            'rgba(255,159,255,1)'
        ],
        borderWidth:1

    }]
};

const config={
    type:"line",
data,
options:{
    responsive: false,
    scales:{
        y:{
            beginAtZero:true
        }
    }
}
};

const myChart= new Chart(
    document.getElementById('myChart'),
    config
);
