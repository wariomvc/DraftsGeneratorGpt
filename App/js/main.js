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
  console.log('UpdateChecked: ', updateCheckInput.checked);
  console.log('IntervalID:', intervalId);
  if (!updateCheckInput.checked) return;
  console.log('Runinig:', running);
  if (running) return;
  running = true;
  console.log('Runnnign:', running);
  let refresh_time = parseInt(document.querySelector('#refresh').value);
  if (refresh_time < 20000) refresh_time = 20000;

  intervalId = setInterval(() => {
    window.location.reload();
    console.log('Refrescando:', intervalId);
  }, refresh_time);
  console.log('Seting: Intervalo:', intervalId);
}
