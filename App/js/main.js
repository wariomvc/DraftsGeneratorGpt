var intervalId;
var running = false;
document.addEventListener(
  'DOMContentLoaded',
  function () {
    loadEvents();
  },
  false
);

function loadEvents() {
  checkEvent();
  auto_reload();
  updateButtonEvent();
}
function checkEvent() {
  let updateCheckInput = document.querySelector('#updateCheck');
  let updateButton = document.querySelector('#updateButton');
  updateCheckInput.addEventListener('click', (e) => {
    if (!e.target.checked) {
      updateButton.removeAttribute('disabled', '');
      clearInterval(intervalId);
      running = true;
    } else {
      updateButton.setAttribute('disabled', '');
      auto_reload();
    }
  });
}

function updateButtonEvent() {
  let updateButton = document.querySelector('#updateButton');
  updateButton.addEventListener('click', () => {
    window.location.reload();
  });
}
function auto_reload() {
  let updateCheckInput = document.querySelector('#updateCheck');
  if (!updateCheckInput.checked) return;
  if (running) return;
  running = true;
  let refresh_time = parseInt(document.querySelector('#refresh').value);
  if (refresh_time < 20000) refresh_time = 20000; //Ajusta el tiempo de refresco para que no sea menor a 20 segundos

  intervalId = setInterval(() => {
    window.location.reload();
  }, refresh_time);
}
