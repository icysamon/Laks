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
                    widget[i].style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
                }
            );
        }
    }  
);

document.addEventListener(
    'DOMContentLoaded',
    () => {
        // DOMContentLoaded
        const container = document.getElementsByClassName( 'container' );
        for (let i = 0; i < container.length; i++) {
            // set post's eventListener
            container[i].addEventListener(
                'mouseenter',
                (event) => {
                    container[i].style.backgroundColor = 'white';
                }
            );
            container[i].addEventListener(
                'mouseleave',
                (event) => {
                    container[i].style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
                }
            );
        }
    }  
);

document.addEventListener(
    'DOMContentLoaded',
    () => {
        // DOMContentLoaded
        const cat = document.getElementsByClassName( 'cat' );
        for (let i = 0; i < cat.length; i++) {
            // set post's eventListener
            cat[i].addEventListener(
                'mouseenter',
                (event) => {
                    cat[i].style.backgroundColor = 'white';
                }
            );
            cat[i].addEventListener(
                'mouseleave',
                (event) => {
                    cat[i].style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
                }
            );
        }
    }  
);