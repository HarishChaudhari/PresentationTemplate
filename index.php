<!doctype html>
<?php ?>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>My City Dhule | माझं शहर धुळे</title>

        <meta name="description" content="A framework for easily creating beautiful presentations using HTML">
        <meta name="author" content="Hakim El Hattab">

        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="css/reveal.min.css">
        <link rel="stylesheet" href="css/theme/sky.css" id="theme">

        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/weather/css/weather-icons.min.css">
        <!-- For syntax highlighting -->
        <link rel="stylesheet" href="lib/css/zenburn.css">

        <!-- If the query includes 'print-pdf', include the PDF print sheet -->
        <script>
            if (window.location.search.match(/print-pdf/gi)) {
                var link = document.createElement('link');
                link.rel = 'stylesheet';
                link.type = 'text/css';
                link.href = 'css/print/pdf.css';
                document.getElementsByTagName('head')[0].appendChild(link);
            }
        </script>

        <!--[if lt IE 9]>
        <script src="lib/js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="reveal">
            <div class="slides"><?php
                /**
                 * Includes library files
                 */
                foreach( glob ( "slides/*.php" ) as $filename ) {
                    require_once( $filename );
                } ?>
            </div>
        </div>

        <script src="lib/js/head.min.js"></script>
        <script src="js/reveal.min.js"></script>

        <script>

            // Full list of configuration options available here:
            // https://github.com/hakimel/reveal.js#configuration
            Reveal.initialize({
                width: 1200,
                controls: true,
                progress: true,
                history: true,
                center: true,
                theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
                transition: Reveal.getQueryHash().transition || 'cube', // default/cube/page/concave/zoom/linear/fade/none
                multiplex: {
                    // Example values. To generate your own, see the socket.io server instructions.
                    secret: '13967773486226648665', // Obtained from the socket.io server. Gives this (the master) control of the presentation
                    id: 'c6dc216ec61365eb', // Obtained from socket.io server
                    url: 'revealjs.jit.su:80' // Location of socket.io server
                },
                /*math: {
                    mathjax: 'http://cdn.mathjax.org/mathjax/latest/MathJax.js',
                    config: 'TeX-AMS_HTML-full' // See http://docs.mathjax.org/en/latest/config-files.html
                },*/
                // Parallax scrolling
                // parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
                // parallaxBackgroundSize: '2100px 900px',

                // Optional libraries used to extend on reveal.js
                dependencies: [
                    {src: 'lib/js/classList.js', condition: function () {
                            return !document.body.classList;
                        }},
                    {src: 'plugin/markdown/marked.js', condition: function () {
                            return !!document.querySelector('[data-markdown]');
                        }},
                    {src: 'plugin/markdown/markdown.js', condition: function () {
                            return !!document.querySelector('[data-markdown]');
                        }},
                    {src: 'plugin/highlight/highlight.js', async: true, callback: function () {
                            hljs.initHighlightingOnLoad();
                        }},
                    {src: 'plugin/zoom-js/zoom.js', async: true, condition: function () {
                            return !!document.body.classList;
                        }},
                    /*{src: 'plugin/notes/notes.js', async: true, condition: function () {
                            return !!document.body.classList;
                        }},
                    {src: '//cdnjs.cloudflare.com/ajax/libs/socket.io/0.9.10/socket.io.min.js', async: true},
                    {src: 'plugin/multiplex/master.js', async: true},
                    // and if you want speaker notes
                    {src: 'plugin/notes-server/client.js', async: true},
                    {src: 'plugin/math/math.js', async: true}*/
                ]
            });

        </script>

    </body>
</html>
