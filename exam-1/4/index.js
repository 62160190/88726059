let inputYear = document.getElementById('year');
let inputCC = document.getElementById('cc');
let runButton = document.getElementById('run');
let output = document.getElementById('output');

function calVat(){
    let numYear = Number(inputYear.value);
    let numCC = Number(inputCC.value);
    outputHtml = '';

    if(numYear <= 1990){
        if(numCC <= 1500){
            output.innerHTML = 1250;
            return;
        }
        else if(numCC > 1500 && numCC <=2000){
            output.innerHTML = 1400;
            return;
        }
        else if(numCC > 2000){
            output.innerHTML = 2000;
            return;
        }
    }
    else if(numYear >=1991 && numYear <= 1999){
        if(numCC <= 1500){
            output.innerHTML = 1100;
            return;
        }
        else if(numCC > 1500 && numCC <=2000){
            output.innerHTML = 1300;
            return;
        }
        else if(numCC > 2000){
            output.innerHTML = 1700;
            return;
        }
    }
    else if(numYear >= 2000){
        if(numCC <= 1500){
            output.innerHTML = 1000;
            return;
        }
        else if(numCC > 1500 && numCC <=2000){
            output.innerHTML = 1200;
            return;
        }
        else if(numCC > 2000){
            output.innerHTML = 1500;
            return;
        }
    }

    output.innerHTML = outputHtml;
}

runButton.addEventListener('click', calVat);