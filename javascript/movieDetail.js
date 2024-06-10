// Date selection
const today = document.getElementById('today');
const tomorrow = document.getElementById('tomorrow');
const dayAfterTomorrow = document.getElementById('next');

// Get today's date
let todayD = new Date();

// Get tomorrow's date
let tomorrowD = new Date();
tomorrowD.setDate(todayD.getDate() + 1);

// Get the day after tomorrow's date
let dayAfterTomorrowD = new Date();
dayAfterTomorrowD.setDate(todayD.getDate() + 2);

// Set inner text for date elements
today.innerText = todayD.getDate();
tomorrow.innerText = tomorrowD.getDate();
dayAfterTomorrow.innerText = dayAfterTomorrowD.getDate();

const day1 = document.getElementById('day1');
const day2 = document.getElementById('day2');
const day3 = document.getElementById('day3');

today.addEventListener('click', () => {
    day1.classList.remove('hide');
    day2.classList.add('hide');
    day3.classList.add('hide');
    
    today.classList.add('current');
    tomorrow.classList.remove('current');
    dayAfterTomorrow.classList.remove('current');
});
tomorrow.addEventListener('click', () => {
    day2.classList.remove('hide');
    day1.classList.add('hide');
    day3.classList.add('hide');

    today.classList.remove('current');
    tomorrow.classList.add('current');
    dayAfterTomorrow.classList.remove('current');
});
dayAfterTomorrow.addEventListener('click', () => {
    day3.classList.remove('hide');
    day1.classList.add('hide');
    day2.classList.add('hide');
    
    today.classList.remove('current');
    tomorrow.classList.remove('current');
    dayAfterTomorrow.classList.add('current');
});

// seat count validation
const availableSeat = parseInt(document.getElementById('availability').innerText);
const seatInput = document.getElementById('seat');
const priceSpan = document.getElementById('price');
const initialPrice = parseInt(priceSpan.getAttribute('initial-price'));
let price = 0;

seatInput.addEventListener('input', function() {
    const seats = parseInt(this.value);
    if ( seats < 1 || seats > availableSeat) {
        price = initialPrice;
        priceSpan.innerHTML = price;
        alert("Maximum available seat count reached (" + availableSeat + ").");
        this.value = 1;
    } else {
        price = initialPrice * seats;
        priceSpan.innerHTML = price;
    }
    
});

