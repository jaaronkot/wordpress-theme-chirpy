 <!-- https://giscus.app/ -->
 <script type="text/javascript">
  (function () {
    const origin = 'https://giscus.app';
    const iframe = 'iframe.giscus-frame';
    const lightTheme = 'light';
    const darkTheme = 'dark_dimmed';

    let initTheme = lightTheme;
    const html = document.documentElement;

    if (
      (html.hasAttribute('data-mode') &&
        html.getAttribute('data-mode') === 'dark') ||
      (!html.hasAttribute('data-mode') &&
        window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
      initTheme = darkTheme;
    }

    let giscusAttributes = {
      src: 'https://giscus.app/client.js',
      'data-repo': 'gezhaoyou/blog-comments',
      'data-repo-id': 'MDEwOlJlcG9zaXRvcnkzMjcxNjU1NDc=',
      'data-category': 'General',
      'data-category-id': 'DIC_kwDOE4Ama84CQupv',
      'data-mapping': 'url',
      'data-reactions-enabled': '1',
      'data-emit-metadata': '0',
      'data-theme': initTheme,
      'data-input-position': 'top',
      'data-lang': 'zh-CN',
      crossorigin: 'anonymous',
      async: ''
    };

    let giscusScript = document.createElement('script');
    Object.entries(giscusAttributes).forEach(([key, value]) =>
      giscusScript.setAttribute(key, value)
    );
    document.getElementById('tail-wrapper').appendChild(giscusScript);

    addEventListener('message', (event) => {
      if (
        event.source === window &&
        event.data &&
        event.data.direction === ModeToggle.ID
      ) {
        /* global theme mode changed */
        const mode = event.data.message;
        const theme = mode === ModeToggle.DARK_MODE ? darkTheme : lightTheme;

        const message = {
          setConfig: {
            theme: theme
          }
        };

        const giscus = document.querySelector(iframe).contentWindow;
        giscus.postMessage({ giscus: message }, origin);
      }
    });
  })();
</script>