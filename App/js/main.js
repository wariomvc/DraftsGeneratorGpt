var intervalId;
document.addEventListener(
  'DOMContentLoaded',
  function () {
    loadEvents();
  },
  false
);

function loadEvents() {
  auto_reload();
  checkEvent();
}
function checkEvent() {
  let updateCheckInput = document.querySelector('#updateCheck');
  let updateButton = document.querySelector('#updateButton');
  updateCheckInput.addEventListener('click', (e) => {
    if (!e.target.checked) {
      updateButton.removeAttribute('disabled', '');
      clearInterval(intervalId);
    } else {
      updateButton.setAttribute('disabled', '');
      auto_reload();
    }
  });
}

function updateButtonEvent() {
  updateButton.addEventListener('clic');
}
function auto_reload() {
  let refresh_time = parseInt(document.querySelector('#refresh').value);
  intervalId = setInterval(() => {
    //window.location.reload();
    console.log('Refrescando');
  }, refresh_time);
}
