const notifications = document.querySelectorAll('.notification')
setTimeout(() => {
    [...notifications].forEach(notification => {
        notification.classList.add('animate__bounceOutRight')

        setTimeout(() => {
            notification.remove()
        }, 1000)
    })
}, 3000)

feather.replace()

var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
})

var toastElList = [].slice.call(document.querySelectorAll('.toast'))
var toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl, { autohide: true })
})
toastList.forEach(toast => toast.show())
