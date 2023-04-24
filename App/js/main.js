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
  updateButtonEvent();
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
  let updateButton = document.querySelector('#updateButton');
  updateButton.addEventListener('click', () => {
    window.location.reload();
  });
}
function auto_reload() {
  let refresh_time = parseInt(document.querySelector('#refresh').value);
  if (refresh_time < 20000) refresh_time = 20000;
  intervalId = setInterval(() => {
    window.location.reload();
    console.log('Refrescando');
  }, refresh_time);
}
