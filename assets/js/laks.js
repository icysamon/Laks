document.addEventListener(
    'DOMContentLoaded',
    () => {
        // DOMContentLoaded
        const widgetStyle = document.getElementsByClassName( 'is-style-widget' );
        for (let i = 0; i < widgetStyle.length; i++) {
            // set post's eventListener
            widgetStyle[i].addEventListener(
                'mouseenter',
                (event) => {
                    widgetStyle[i].style.backgroundColor = '#faebd7';
                }
            );
            widgetStyle[i].addEventListener(
                'mouseleave',
                (event) => {
                    widgetStyle[i].style.backgroundColor = '#faf0e6';
                }
            );
        }
    }  
);

var container = document.getElementsByClassName('container');
if (container[0] != null){
    if (container[0].clientHeight < window.innerHeight) {
        container[0].style.height = window.innerHeight * 1.0 + 'px';
    }
}
