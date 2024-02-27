// --------------------------------
// KVスライダー
// --------------------------------
import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'
const swiper = new Swiper('.js-kvSlide', {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 800,
  allowTouchMove: false
});

// --------------------------------
// FAQアコーディオン
// --------------------------------
// slideUp
const slideUp = (el, duration = 400) => {
  el.style.height = el.offsetHeight + 'px'
  el.offsetHeight
  el.style.transitionProperty = 'height, margin, padding'
  el.style.transitionDuration = duration + 'ms'
  el.style.transitionTimingFunction = 'ease'
  el.style.overflow = 'hidden'
  el.style.height = 0
  el.style.paddingTop = 0
  el.style.paddingBottom = 0
  el.style.marginTop = 0
  el.style.marginBottom = 0
  setTimeout(() => {
    el.style.display = 'none'
    el.style.removeProperty('height')
    el.style.removeProperty('padding-top')
    el.style.removeProperty('padding-bottom')
    el.style.removeProperty('margin-top')
    el.style.removeProperty('margin-bottom')
    el.style.removeProperty('overflow')
    el.style.removeProperty('transition-duration')
    el.style.removeProperty('transition-property')
    el.style.removeProperty('transition-timing-function')
    el.classList.remove('is-open')
  }, duration)
}
// slideDown
const slideDown = (el, duration = 400) => {
  el.classList.add('is-open')
  el.style.removeProperty('display')
  let display = window.getComputedStyle(el).display
  if (display === 'none') {
    display = 'block'
  }
  el.style.display = display
  let height = el.offsetHeight
  el.style.overflow = 'hidden'
  el.style.height = 0
  el.style.paddingTop = 0
  el.style.paddingBottom = 0
  el.style.marginTop = 0
  el.style.marginBottom = 0
  el.offsetHeight
  el.style.transitionProperty = 'height, margin, padding'
  el.style.transitionDuration = duration + 'ms'
  el.style.transitionTimingFunction = 'ease'
  el.style.height = height + 'px'
  el.style.removeProperty('padding-top')
  el.style.removeProperty('padding-bottom')
  el.style.removeProperty('margin-top')
  el.style.removeProperty('margin-bottom')
  setTimeout(() => {
    el.style.removeProperty('height')
    el.style.removeProperty('overflow')
    el.style.removeProperty('transition-duration')
    el.style.removeProperty('transition-property')
    el.style.removeProperty('transition-timing-function')
  }, duration)
}
// slideUpとslideDownを組み合わせてslideToggleを作成
const slideToggle = (el, duration = 400) => {
  if (window.getComputedStyle(el).display === 'none') {
    return slideDown(el, duration)
  } else {
    return slideUp(el, duration)
  }
}
// DOM操作
const accordionTriggers = document.querySelectorAll('.js-accordion dt')
const accordionTriggersArr = Array.prototype.slice.call(accordionTriggers)
accordionTriggersArr.forEach((trigger) => {
  trigger.addEventListener('click', () => {
    trigger.classList.toggle('is-open')
    const content = trigger.nextElementSibling
    slideToggle(content)
  })
})