// setting
const userContent = [
    ['BLOG', 'https://blog.icysamon.com'],
    ['GitHub', 'https://github.com/icysamon'],
    ['Twitter', 'https://twitter.com/icysamon']
]

// init
for (let i = 0; i < userContent.length; i++) {
    const widget = document.getElementById( 'border' ).content.cloneNode(true);
    const title = document.getElementsByClassName( 'title' );
    const description = document.getElementsByClassName( 'description' );

    document.getElementById( 'container' ).appendChild(widget);
    if (title[i] && description[i]) {
        title[i].textContent = userContent[i][0];
        description[i].textContent = userContent[i][1];
    }   
}

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
                    widget[i].style.backgroundColor = 'rgba(240, 248, 255, 0.37)';
                }
            );
        }
    }  
);