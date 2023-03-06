function randomString(i = 4){
    return (Math.random() + 1).toString(36).substring(i);
}

function renameFile(filename) {
    const str = filename.split('.');
    const lastIndex = str.length - 1;
    const ext = '.' + str[lastIndex];
    return randomString(2) + ext;
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

function postStatusSwitch(postid) {
    $.post('/post/toggleActive/' + postid, response => {
        toast('success', response.messages);
    }, 'json').fail(err => Swal.fire('Ajax Error!', '<code>' + err.responseJSON.message + '</code>', 'error'));
}