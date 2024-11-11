// // Select all slides
// const slides = document.querySelectorAll(".carousel-item");
// var slideWidth;

// // loop through slides and set each slides translateX

// slides.forEach((slide, indx) => {
//     slide.style.transform = `translateX(${indx * 110}%)`;

//     var parent = slide.parentNode;
//     var computedStyle = getComputedStyle(slide);
//     parent.style.display = 'none';
//     slideWidth = computedStyle.getPropertyValue("width");
//     parent.style.removeProperty('display');

// });

// var slideCount = 1;

// if (slideWidth == "384px") {
//     var carouselWidth = screen.availWidth * 0.8;

//     slideWidth = slideWidth.split("p");
//     carouselWidth = Math.floor(carouselWidth);

//     slideCount = carouselWidth / parseInt(slideWidth[0]);

//     slideCount = Math.floor(slideCount);
// }

// // select next slide button
// const nextSlide = document.querySelector(".btn-next");

// // current slide counter
// let curSlide = 0;
// // maximum number of slides
// let maxSlide = slides.length - slideCount;

// // add event listener and navigation functionality
// nextSlide.addEventListener("click", function () {
//     // check if current slide is the last and reset current slide
//     if (curSlide === maxSlide) {
//         curSlide = 0;
//     } else {
//         curSlide++;
//     }

//     //   move slide by -110%
//     slides.forEach((slide, indx) => {
//         slide.style.transform = `translateX(${110 * (indx - curSlide)}%)`;
//     });
// });

// // select next slide button
// const prevSlide = document.querySelector(".btn-prev");

// // add event listener and navigation functionality
// prevSlide.addEventListener("click", function () {
//     // check if current slide is the first and reset current slide to last
//     if (curSlide === 0) {
//         curSlide = maxSlide;
//     } else {
//         curSlide--;
//     }

//     //   move slide by 110%
//     slides.forEach((slide, indx) => {
//         slide.style.transform = `translateX(${110 * (indx - curSlide)}%)`;
//     });
// });

var loader = document.getElementById("loader-wrapper");
window.addEventListener('load', () => {
    loader.style.opacity = '0';
    loader.addEventListener('transitionend', () => loader.remove());
});

// initialize the intl-tel-input plugin 

function getIp(callback) {
    fetch('https://ipinfo.io/json?token=3bec7cf10c76f5', { headers: { 'Accept': 'application/json' } })
        .then((resp) => resp.json())
        .catch(() => {
            return {
                country: 'lk',
            };
        })
        .then((resp) => callback(resp.country));
}

const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["lk", "us", "gb", "in", "de", "ae", "au", "ca", "ch", "fi", "fr", "it", "pk", "sg"],
    initialCountry: "auto",
    geoIpLookup: getIp,
    utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.3/js/utils.js",
});

const error = document.querySelector(".alert-error");
var numberVerified = [false, null];

function process(event) {
    event.preventDefault();

    const phoneNumber = phoneInput.getNumber();

    if (phoneInput.isValidNumber()) {
        toggleVerifyButton(1);
        numberVerified[0] = true;
        numberVerified[1] = phoneNumber;
    } else {
        error.style.display = "";
        error.innerHTML = `Invalid phone number.`;
        setTimeout(function () {
            error.innerHTML = "";
            error.style.display = "none";
        }, 2500);
    }
}

function toggleVerifyButton(status) {

    var btn = document.getElementById("verifyBtn");

    if (status == 1) {
        btn.classList.replace('bg-cyan-500', 'bg-green-500');
        btn.classList.replace('hover:bg-cyan-600', 'hover:bg-green-600');
        btn.innerHTML = 'Verified <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-1 w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>'
        btn.disabled = true;
    } else {
        btn.classList.replace('bg-green-500', 'bg-cyan-500');
        btn.classList.replace('hover:bg-green-600', 'hover:bg-cyan-600');
        btn.innerHTML = "Verify";
        btn.disabled = false;
    }
}

function revokeVerifyStatus(event) {

    if (numberVerified[0] && event.which != 13) {
        numberVerified[0] = false;
        numberVerified[1] = null;
        toggleVerifyButton(0);
    }
}

function revealMenu() {

    const menu = document.getElementById("menu");

    if (menu.classList.contains('scale-y-0')) {
        menu.classList.remove('scale-y-0');
        menu.classList.add('scale-y-100');
        menu.classList.remove('opacity-0');
        menu.classList.add('opacity-100');
    } else {
        menu.classList.remove('scale-y-100');
        menu.classList.add('scale-y-0');
        menu.classList.remove('opacity-100');
        menu.classList.add('opacity-0');
    }
}






function sendMessage() {

    if(numberVerified[0]){

        var button = document.getElementById("sendButton");
        button.disabled = true;
        
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var email = document.getElementById("email").value;
        var mobile = document.getElementById("phone").value;
        var description = document.getElementById("description").value;
    
        var form = new FormData();
        form.append("fname",fname);
        form.append("lname",lname);
        form.append("email",email);
        form.append("mobile",mobile);
        form.append("description",description);
    
        var r = new XMLHttpRequest();
    
        r.onreadystatechange = function(){
            if(r.readyState == 4 && r.status == 200){
                button.disabled = false;
                document.getElementById("fname").value = "";
                document.getElementById("lname").value = "";
                document.getElementById("email").value = "";
                document.getElementById("phone").value = "";
                document.getElementById("description").value = "";
                toggleVerifyButton(0);
                alert(r.responseText);
            }
        };
    
        r.open("POST","../../vendor/mail.php",true);
        r.send(form);
        
    }else{
        alert("Please verify your number first!")
    }

}