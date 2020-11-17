/* Main JS */
document.addEventListener( 'DOMContentLoaded', function(){
    let btn = document.getElementById('btn-yivic');
    if( btn ) {
        btn.onclick = function () {
            console.log('clicked');
        }
    }
}, false )