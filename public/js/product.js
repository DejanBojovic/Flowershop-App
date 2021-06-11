const commentsContainer = document.querySelector('#comments-container')
const submitBtn = document.querySelector('.submit-btn')
const text = document.querySelector('#comment-body')

submitBtn.addEventListener('click', (e) => {
    if(!text.value) {
        e.preventDefault()
    }
})

document.querySelector('.cancel-button').addEventListener('click', () => {
    text.value = ''
})