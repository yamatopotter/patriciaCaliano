document.addEventListener("DOMContentLoaded", function() {
  var h1 = document.querySelector('.last-word-bold');
  var words = h1.textContent.split(' ');
  var lastWord = words.pop();
  h1.innerHTML = words.join(' ') + ' <span class="bold">' + lastWord + '</span>';
});