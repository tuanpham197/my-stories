<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="list bg-b-light dark:bg-b-dark" id="top" >
    <header class="header">
        <nav class="nav flex items-center justify-between">
            <div class="logo flex">
                <a href="https://rednafi.com/" accesskey="h" title="Redowan's Reflections (Alt + H)" class="text-slate-700 dark:text-white">
                    <img
                        src="https://user-images.githubusercontent.com/30027932/234704858-2cff14b0-bdf1-4393-a184-cff35eb9de81.png"
                        alt aria-label="logo" height="35">
                    Redowan's Reflections
                </a>
                <div class="logo-switches flex">
                    <button id="theme-toggle" accesskey="t" title="(Alt + T)">
                        <svg id="moon"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                        </svg>
                        <svg id="sun" xmlns="http://www.w3.org/2000/svg" width="24" height="18"
                            viewBox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5" />
                            <line x1="12" y1="1" x2="12" y2="3" />
                            <line x1="12" y1="21" x2="12" y2="23" />
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                            <line x1="1" y1="12" x2="3" y2="12" />
                            <line x1="21" y1="12" x2="23" y2="12" />
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                        </svg>
                    </button>
                </div>
            </div>
            <ul id="menu" class="flex gap-3">
                <li class="text-slate-600 dark:text-white"><a href="https://rednafi.com/zephyr/" title="zephyr"><span>zephyr</span></a></li>
                <li class="text-slate-600 dark:text-white"><a href="https://rednafi.com/archives/" title="archives"><span>archives</span></a></li>
                <li class="text-slate-600 dark:text-white"><a href="https://rednafi.com/about/" title="about"><span>about</span></a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <article class="first-entry home-info">
            <header class="entry-header">
                <h1></h1>
            </header>
            <div class="entry-content">
                <div class="text-slate-600 dark:text-white text-center text-md"><i>Hi, I'm Redowan Delowar — a wandering autodidact with a flair for ones and zeros</i>
                    <div class="bio-urls text-base">
                        <a href="tags">tags</a>
                        <span>•</span>
                        <a href="search">search</a>
                        <span>•</span>
                        <a href="index.xml">rss</a>
                    </div>
                </div>
            </div>
            <footer class="entry-footer">
                <div class="social-icons"></div>
            </footer>
        </article>
        <article class="post-entry bg-b-light-entry dark:bg-b-dark-entry mt-4 p-4">
            <header class="entry-header mb-4">
                <h2 class="text-slate-700 dark:text-white text-xl font-bold">Escaping the template pattern hellscape in Python</h2>
            </header>
            <div class="entry-content">
                <p class="text-slate-600 dark:text-t-dark text-base">Over the years, I’ve used the template pattern across multiple OO languages with varying degrees of
                    success. It was one of the first patterns I learned in the primordial hours of my software
                    engineering career, and for some reason, it just feels like the natural way to tackle many
                    real-world code-sharing problems. Yet, even before I jumped on board with the composition over
                    inheritance camp, I couldn’t help but notice how using this particular inheritance technique spawns
                    all sorts of design and maintenance headaches as the codebase starts to grow....</p>
            </div>
            <footer class="entry-footer text-slate-700 mt-4 dark:text-t-dark text-sm"><span title='2023-07-01 00:00:00 +0000 UTC'>July 1, 2023</span></footer><a
                class="entry-link" aria-label="post link to Escaping the template pattern hellscape in Python"
                href="https://rednafi.com/python/escape_template_pattern" /></a>
        </article>
        <article class="post-entry bg-b-light-entry dark:bg-b-dark-entry mt-4 p-4">
            <header class="entry-header mb-4">
                <h2 class="text-slate-700 dark:text-white text-xl font-bold">Limit goroutines with buffered channels</h2>
            </header>
            <div class="entry-content">
                <p class="text-slate-600 dark:text-t-dark text-base">I was cobbling together a long-running Go script to send webhook messages to a system when some
                    events occur. The initial script would continuously poll a Kafka topic for events and spawn new
                    goroutines to make HTTP requests to the destination. This had two problems:
                    It could create unlimited goroutines if many events arrived quickly It might overload the
                    destination system by making many concurrent requests In Python, I’d use just asyncio....</p>
            </div>
            <footer class="entry-footer text-slate-700 mt-4 dark:text-t-dark text-sm"><span title='2023-08-23 00:00:00 +0000 UTC'>August 23, 2023</span></footer><a
                class="entry-link" aria-label="post link to Limit goroutines with buffered channels"
                href="https://rednafi.com/go/limit_goroutines_with_buffered_channels" /></a>
        </article>


        <footer class="page-footer">
            <nav class="pagination"><a class="next" href="https://rednafi.com/page/2" />Next&nbsp;&nbsp;»</a></nav>
        </footer>
    </main>
    <a href="#top" class="top rounded-full flex item-center justify-center" aria-label="go to top" title="Go to Top (Alt + G)" class="top-link" id="top-link" accesskey="g">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" viewBox="0 0 12 6" fill="currentcolor">
            <path d="M12 6H0l6-6z" />
        </svg></a>

    <script>
        document.getElementById("theme-toggle").addEventListener("click", () => { 
            document.documentElement.className.includes("dark") ? (document.documentElement.classList.remove("dark"), localStorage.setItem("pref-theme", "light")) : (document.documentElement.classList.add("dark"), localStorage.setItem("pref-theme", "dark")) 
        })
    </script>
</body>
</html>