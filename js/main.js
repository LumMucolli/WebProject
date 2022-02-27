window.onload = sliderFunction();

function sliderFunction(){
    var sliderList = document.getElementsByClassName('slider-content');

    if(!sliderList[0].classList.contains('show-content')){
        sliderList[0].classList.add('show-content');
    }

    for(var slide of sliderList){
        if(!slide.classList.contains('show-content')){
            slide.classList.add('hidden-content');
        }
    }

    var index = 0;
    var slider = document.getElementsByClassName('slider')[0];

    slider.addEventListener('click',function(){
        index++;
        for(var slide of sliderList){
            if(slide.classList.contains('show-content') && index <3 ){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.nextElementSibling.classList.remove('hidden-content');
                slide.nextElementSibling.classList.add('show-content');
                break;
            } else if(slide.classList.contains('show-content') && index == 3){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.remove('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.add('show-content');
                index = 0;
                break;
            }
        }
    })
}

function regex(){

    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var inputi = document.getElementById('username').value;
    var testo = emailRegex.test(inputi);
    if(testo){
        console.log("Email eshte ne rregull");
    }else{
        console.log("Ploteso email-in mire");
        alert("Ploteso email-in mire");
    }

    var passwordRegex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;
    var password = document.getElementById('password').value;
    var testo = passwordRegex.test(password);
    if(testo){
        console.log("Passwordi eshte ne rregull");
    }else{
        console.log("Password-i duhet te permbaje se paku 8 karaktere, se paku nje shkonje te madhe, nje te vogel dhe se paku nje numer");
        alert("Password-i duhet te permbaje se paku 8 karaktere, se paku nje shkonje te madhe, nje te vogel dhe se paku nje numer");
    }

    var nameRegex = /[a-zA-Z]{2,}/;
    var name = document.getElementById('name').value;
    var testo = nameRegex.test(name);
    if(testo){
        console.log("Emri eshte ne rregull");
    }else{
        console.log("Emri duhet te permbaje me shume se 2 karaktere.");
        alert("Emri duhet te permbaje me shume se 2 karaktere");
    }

    var surnameRegex = /[a-zA-Z]{4,}/;
    var surname = document.getElementById('surname').value;
    var testo = nameRegex.test(surname);
    if(testo){
        console.log("Mbiemri eshte ne rregull");
    }else{
        console.log("Mbiemri duhet te permbaje me shume se 4 karaktere");
        alert("Mbiemri duhet te permbaje me shume se 4 karaktere");
    }

    var confirmpw = document.getElementById('confirmpw').value;
    if(confirmpw != password){
        console.log("Fjalekalimet nuk perputhen me njeri-tjetrin.");
        alert("Fjalekalimet nuk perputhen!");
    }

    var loginRegex=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var login = document.getElementById('login').value;
    var testo = loginRegex.test(login);
    if(email){
        console.log("Email eshte ne rregull");
    }else{
        console.log("Emaili duhet te permbaje me shume se 2 karaktere");
        alert("Emaili duhet te permbaje me shume se 2 karaktere");
    }

    var password1Regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;
    var password1 = document.getElementById('password1').value;
    var testo = password1Regex.test(password1);
    if(password1){
        console.log("Fjalekalimi eshte ne rregull");
    }else{
        console.log("Fjalekalimi duhet te permbaje se paku 8 karaktere, se paku nje shkonje te madhe, nje te vogel dhe se paku nje numer");
        alert("Fjalekalimi duhet te permbaje se paku 8 karaktere, se paku nje shkonje te madhe, nje te vogel dhe se paku nje numer");
    }
}

function toggleMobileMenu(menu){
    menu.classList.toggle('open');
}
