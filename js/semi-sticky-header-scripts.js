// Declare variables
const header = document.getElementsByTagName('header')[0]
const adminBar = document.getElementById('wpadminbar')
let scrollPos = 0

console.log(header)

//Fix header to top from start
header.classList.add('fixed-header')



// Determine if the adminbar is in the visible viewport
function isInViewport(e) {
  if(adminBar == null) return false
  var rect = e.getBoundingClientRect()
  var html = document.documentElement
  return (
  rect.top >= 0 &&
  rect.left >= 0 &&
  rect.bottom <= (window.innerHeight || html.clientHeight) &&
  rect.right <= (window.innerWidth || html.clientWidth)
  )
}

//if admin bar is in, push nav down
if(isInViewport(adminBar)){
  header.classList.add('push')
} else{
  header.classList.remove('push')
}

    

// Watch for scrolls
window.addEventListener('scroll', e => {

    //check if scrolled up or down
    if(scrollPos < window.scrollY && window.scrollY > 0){
        header.classList.add('hide')
    } else{
        header.classList.remove('hide')
    }
    scrollPos = window.scrollY

    //check if admin bar is on screen
    if(isInViewport(adminBar)){
        header.classList.add('push')
    } else{
        header.classList.remove('push')
    }

})