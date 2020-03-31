const scrollToTopButton = document.getElementById('js-top');
smoothScrollCapture = (x) => {
  event.preventDefault();
  var id = event.target.getAttribute('href').split("#")[1]
  var el = document.getElementById(id);
  var x = el.getBoundingClientRect().left
  var y = el.getBoundingClientRect().top
  smoothScrollFunc(x, y)
}

smoothScrollFunc = (x, y) => {
  event.preventDefault()
  window.scrollTo({
    top: y,
    left: x,
    behavior: 'smooth'
  });
}

window.addEventListener('DOMContentLoaded', () => {
  scrollToTopButton.addEventListener('click', () => {
    smoothScrollFunc(0, 0)
  })

  var aTags = document.getElementsByTagName('A')
  var myTags = []
  for (var i = 0; i < aTags.length; i++) {
    if (aTags[i].getAttribute("href").indexOf('#') === 0) {
      aTags[i].addEventListener('click', smoothScrollCapture);
    }
  }
})

window.addEventListener('scroll', () => {
  let y = window.scrollY;
  if (y > 5) {
    scrollToTopButton.style.display = 'block'
  } else {
    scrollToTopButton.style.display = 'none'
  }
})