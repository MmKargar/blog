var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
var btndelete = document.querySelectorAll('.btn-delete');

 fn = function(e) { e.preventDefault() };
for ( var i = btndelete.length; i--; ) {
  btndelete[i].addEventListener('click', fn, false);
}


let idDelete = null ;
async function deletefunc() {
    return await axios.post("/posts/{id}/delete", {
        method: "delete",
        id: idDelete,
    })
}

function showModal(id) {
    idDelete = id ;  
/*     $('#myModal').modal('toggle') */
    $('#myModal').modal('show')
 /*    myModal.modal('show') */
}


    

