// =============================================
// modal
// =============================================
const modalOpen = () => {
    const modalOpenBtns = document.querySelectorAll('.js-modalOpen')
    const modalCloseBtns = document.querySelectorAll('.js-modalClose')

    // モダールを開く
    modalOpenBtns.forEach((modalOpenBtn) => {
        modalOpenBtn.addEventListener('click', () => {
            const modalTargetId = modalOpenBtn.dataset.modalTarget
            const modalTargetPanel = document.querySelector('.js-modalPanel[data-modal-id="' + modalTargetId + '"]')
            modalTargetPanel.classList.add('is-show')
            document.body.style.overflow = 'hidden'
        })
    })

    // モダールを閉じる
    modalCloseBtns.forEach((modalCloseBtn) => {
        modalCloseBtn.addEventListener('click', () => {
            const modalTargetPanel = modalCloseBtn.closest('.js-modalPanel')
            modalTargetPanel.classList.remove('is-show')
            document.body.style.overflow = 'auto'
        })
    })
}

// ----------------------------------------
// initialize
// ----------------------------------------
function initialize() {
    modalOpen()
}

initialize()
