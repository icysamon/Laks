window.MathJax = {
    tex: {
      inlineMath: [['$', '$'], ['\\(', '\\)']]
    },
    svg: {
      fontCache: 'global'
    }
  };
  
  (function () {
    var script = document.createElement('script');
    script.src = 'https://www.cdn.icysamon.jp/mathjax/es5/tex-mml-chtml.js';
    script.async = true;
    document.head.appendChild(script);
  })();