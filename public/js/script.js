let btndelete = document.querySelectorAll('.btn-delete');
let confirm_form = document.getElementById('confirm-form'); 


fn = function(e) { e.preventDefault() };
for ( var i = btndelete.length; i--; ) {
  btndelete[i].addEventListener('click', fn, false);
  btndelete[i].setAttribute('data-bs-toggle' , 'modal')
}

function deletefunc(id) {
    let action = `/posts/${id}/delete` ;
     confirm_form.setAttribute('action' , action) ;
} 

