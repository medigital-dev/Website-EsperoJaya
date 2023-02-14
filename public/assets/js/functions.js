function randomString(){
    return (Math.random() + 1).toString(36).substring(4);
}

async function toast(icon, message) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
    })
    await Toast.fire({
        icon: icon,
        title: message
    })
}