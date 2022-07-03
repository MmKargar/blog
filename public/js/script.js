var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
var btndelete = document.querySelectorAll('.btn-delete');

 fn = function(e) { e.preventDefault() };
for ( var i = btndelete.length; i--; ) {
  btndelete[i].addEventListener('click', fn, false);
}


/* return Axios.post("/posts/{id}/delete", {
    method: "delete",
    id: id,
})
    .then(r => r.data.categories)
    .catch(e => {
        console.log(e);
    });

 */
