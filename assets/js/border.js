const border = document.getElementById( 'border' );

border.addEventListener (
    'mouseenter',
    (event) => {
        event.target.style.color = 'purple';
    }
)

var border0 = document.getElementById( 'border' ).content.cloneNode(true);
document.getElementById( 'container' ).appendChild(border0);
var border1 = document.getElementById( 'border' ).content.cloneNode(true);
document.getElementById( 'container' ).appendChild(border1);