var script = document.createElement('script');
script.src = "https://cdn.jsdelivr.net/npm/bubbly-bg@1.0.0/dist/bubbly-bg.js";



script.onload = function() {
    bubbly({
        colorStart: '#fff4e6',
        colorStop: '#ffe9e4',
        blur: 1,
        compose: 'source-over',
        bubbleFunc:() => `hsla(${Math.random() * 50}, 100%, 50%, .3)`
        });
};

document.head.appendChild(script);

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
                    widgetStyle[i].style.backgroundColor = 'white';
                }
            );
            widgetStyle[i].addEventListener(
                'mouseleave',
                (event) => {
                    widgetStyle[i].style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
                }
            );
        }
    }  
);

var container = document.getElementsByClassName('container');
if (container[0] != null){
    if (container[0].clientHeight < window.innerHeight) {
        container[0].style.height = window.innerHeight * 0.8 + 'px';
    }
}
