const search = (input, item) => {
    if(input.value.length === 0) {
        for(let i = 0; i < item.length; i++) {
            item[i].parentNode.parentNode.style.display = ""
        }
    }

    for(let i = 0; i < item.length; i++) {
        if((item[i].innerText).includes(input.value)) {
            item[i].parentNode.parentNode.style.display = ""
        } else {
            item[i].parentNode.parentNode.style.display = "none"
        }
    }
}

// dashboard
const inputUser = document.querySelector('.user-input')
const usernames = document.querySelectorAll('.username')
inputUser.addEventListener('input', () => search(inputUser, usernames))

const inputProduct = document.querySelector('.product-input')
const productNames = document.querySelectorAll('.product-name')
inputProduct.addEventListener('input', () => search(inputProduct, productNames))

const inputOrder = document.querySelector('.order-input')
const orderNames = document.querySelectorAll('.order-name')
inputOrder.addEventListener('input', () => search(inputOrder, orderNames))

const inputMessage = document.querySelector('.message-input')
const messageNames = document.querySelectorAll('.message-name')
inputMessage.addEventListener('input', () => search(inputMessage, messageNames))

const inputLike = document.querySelector('.like-input')
const likeNames = document.querySelectorAll('.like-name')
inputLike.addEventListener('input', () => search(inputLike, likeNames))

const inputComment = document.querySelector('.comment-input')
const commentNames = document.querySelectorAll('.comment-name')
inputComment.addEventListener('input', () => search(inputComment, commentNames))
