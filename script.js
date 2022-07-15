var a=document.getElementById('Temperature');
var b=document.getElementById('date');
var c=document.getElementById('time');
var f=document.getElementById('city');
var con=document.getElementById('country');

var d = new Date();
var time =d.toLocaleTimeString();
var date = d.getUTCDate();
var month = d.toLocaleString('default', { month: 'long' });  
var year = d.getUTCFullYear();
var dateStr = month + " " + date + " , " + year;


b.innerHTML=dateStr;
c.innerHTML=time;


async function getWeather(url = '') {
    const response = await fetch(url, {
      method: 'GET', 
      mode: 'cors', 
      cache: 'no-cache', 
      credentials: 'same-origin',
      headers: {
        'Content-Type': 'application/json'
    },
      redirect: 'follow',
      referrerPolicy: 'no-referrer', 
    });
    return response.json(); 
  }
getWeather('https://api.weatherapi.com/v1/current.json?key=d06795eee3024afa9dc55839221507&q=VISAKHAPATNAM%27')
    .then(data => {
        console.log(data);
        f.innerHTML=data.location.name;
        con.innerHTML=data.location.country;
      a.innerHTML=data.current.feelslike_c + " °C "; 
    });



function phProgress(progressVal,totalPercentageVal = 100) {
    var strokeVal = (3.65 * 100) /  totalPercentageVal;
	var progress = document.querySelector('.progress-circle-prog1');
    progress.style.strokeDasharray = progressVal * (strokeVal) + ' 999';
    var progress_value = document.querySelector('.prog1_value');
    progress_value.innerHTML=progressVal;
}

function tdsProgress(progressVal1,totalPercentageVal = 100) {
    var strokeVal = (3.65 * 100) /  totalPercentageVal;
	var progress1 = document.querySelector('.progress-circle-prog2');
    progress1.style.strokeDasharray = progressVal1 * (strokeVal) + ' 999';
    var progress_value1 = document.querySelector('.prog2_value');
    progress_value1.innerHTML=progressVal1;
}
function turbidityProgress(progressVal1,totalPercentageVal = 100) {
    var strokeVal = (3.65 * 100) /  totalPercentageVal;
	var progress1 = document.querySelector('.progress-circle-prog3');
    progress1.style.strokeDasharray = progressVal1 * (strokeVal) + ' 999';
    var progress_value1 = document.querySelector('.prog3_value');
    progress_value1.innerHTML=progressVal1;
}

function waterLevel(percentage)
{
    var level = document.querySelector('.meter_value');
    var levelText = document.querySelector('.prog4_value');
    level.style.width= percentage+"%";
    levelText.innerHTML=percentage+"%";
}

phProgress(50,100);
tdsProgress(75,100);
turbidityProgress(99,100);
waterLevel(50);
