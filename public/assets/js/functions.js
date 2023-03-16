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
        timer: 3000,
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

function hapusBerkasLampiran(id) {
    Swal.fire({
        title: 'Hapus File ini?',
        text: 'File akan dihapus permanen.',
        showCancelButton: true,
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal',
        customClass: {
            confirmButton: 'bg-success text-white'
        },
    }).then((result) => {
        if (result.isConfirmed) {
            const elm = $('#' + id);
            elm.remove();
            $.post('/post/removePostFile/' + id, response => {
                toast('success', response.messages);
                const postId = response.result.data.post_id;
                $.post('/post/get/' + postId, response => $('#jumlahBerkasLampiran').text('(' + response.result.files.length + ')')).fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
            }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
        }
    });
}

function editPost(id) {
    const elmBerkas = '<div class="accordion" id="accordionExample"><div class="card"><div class="card-header" id="headingThree"><h2 class="mb-0"><button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">File lampiran <span id="jumlahBerkasLampiran"></span></button></h2></div><div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample"><div class="card-body"><ul class="list-group" id="fileList"></ul></div></div></div></div>';
    $('#modal-form').modal('show');
    $.post('/post/get/' + id, response => {
        const listFiles = response.result.files;
        const post = response.result.dataPost;
        $('#berkasLampiran').html(elmBerkas);
        $('#title').val(post.title);
        $('#slug').val(post.slug);
        $('#idPost').val(post.id);
        tinyMCE.activeEditor.setContent(post.content);
        $('#jumlahBerkasLampiran').text('(' + listFiles.length + ')');
        listFiles.forEach((val, i) => {
            const elmListFiles = '<li id="' + val.file_id + '" class="list-group-item d-flex justify-content-between align-items-center fade show"><div><h5 class="m-0 p-0 w-100" id="judulBerkasLampiran">' + val.title + '</h5><span class="small text-muted" id="keteranganBerkas">' + val.size + ' | ' + val.type + '</span></div><div class="btn-group" role="group" aria-label="Basic example"><a target="_blank" href="/' + val.url + '" id="downloadBerkasLampiran" class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i></a><button type="button" class="btn btn-sm btn-outline-danger" onclick="hapusBerkasLampiran(`' + val.file_id + '`);"><i class="fas fa-trash"></i></button></div></li>';
            $('#fileList').after(elmListFiles);
        });
    }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
}

function deletePost(id) {
    Swal.fire({
        title: 'Hapus Postingan ini?',
        text: 'Postingan akan dihapus.',
        showCancelButton: true,
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal',
        customClass: {
            confirmButton: 'bg-success text-white'
        },
    }).then((result) => {
        if (result.isConfirmed) {
            $.post('/post/deletePost/' + id, response => {
                toast('success', response.messages);
                $('#tableDataPost').DataTable().ajax.reload(null, false);
                $('#tableDeletedPost').DataTable().ajax.reload(null, false);
            }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
        }
    });
}

function copyToClipboard(id, base_url) {
    $.post('/post/get/' + id, response => {
        const dataPost = response.result.dataPost;
        var temp = '<input type="text" id="' + dataPost.post_id + '" value="' + base_url + '/' + dataPost.slug + '">';
        $('body').append(temp);
        $(`#${dataPost.post_id}`).select();
        document.execCommand('copy');
        $(`#${dataPost.post_id}`).remove();
        toast('info', 'Link url telah dicopy!');
    }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
}

function restorePost(id) {
    Swal.fire({
        title: 'Aktifkan Kembali?',
        text: 'Postingan ini akan diaktifkan kembali.',
        showCancelButton: true,
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal',
        customClass: {
            confirmButton: 'bg-success text-white'
        },
    }).then((result) => {
        if (result.isConfirmed) {
            $.post('/post/restoreDeleted/' + id, response => {
                toast('success', response.messages);
                $('#tableDataPost').DataTable().ajax.reload(null, false);
                $('#tableDeletedPost').DataTable().ajax.reload(null, false);
            }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
        }
    });
}

function purgeDeletePost(id) {
    Swal.fire({
        title: 'Hapus permenen?',
        text: 'Postingan ini akan dihapus secara permanen. Anda tidak akan bisa memulihkan kembali!',
        showCancelButton: true,
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal',
        customClass: {
            confirmButton: 'bg-success text-white'
        },
    }).then((result) => {
        if (result.isConfirmed) {
            $.post('/post/purgeDelete/' + id, response => {
                toast('success', response.messages);
                $('#tableDataPost').DataTable().ajax.reload(null, false);
                $('#tableDeletedPost').DataTable().ajax.reload(null, false);
            }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
        }
    });
}