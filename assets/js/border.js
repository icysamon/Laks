var border0 = document.getElementById( 'border' ).content.cloneNode(true);
document.getElementById( 'container' ).appendChild(border0);
var border1 = document.getElementById( 'border' ).content.cloneNode(true);
document.getElementById( 'container' ).appendChild(border1);

document.addEventListener(
    'DOMContentLoaded',
    () => {
        // DOMContentLoaded
        const widget = document.getElementsByClassName( 'widget' );
        for (let i = 0; i < widget.length; i++) {
            // set widget's eventListener
            widget[i].addEventListener(
                'mouseenter',
                (event) => {
                    widget[i].style.backgroundColor = 'white';
                }
            );
            widget[i].addEventListener(
                'mouseleave',
                (event) => {
                    widget[i].style.backgroundColor = '#f0f8ff';
                }
            );
        }
    }  
);