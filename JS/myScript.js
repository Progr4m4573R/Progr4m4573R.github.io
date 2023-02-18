function ShowAndHide1() {
    var x = document.getElementById('staff_desc'); 
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function ShowAndHide2() {
    var x = document.getElementById('staff_desc2');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}


/*https://developer.mozilla.org/en-US/docs/Web/API/HTMLFormElement/submit_event*/
// function logSubmit(event) {
//     log.textContent = `Form Submitted! Timestamp: ${event.timeStamp}`;
//     //event.preventDefault();
//   }
  
//   const form = document.getElementById('form');
//   const log = document.getElementById('log');
//   form.addEventListener('submit', logSubmit);