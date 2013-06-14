<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_0d924767ad5e4ace325503a5fc6ad91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  32 => 6,  30 => 5,  26 => 3,  19 => 1,  372 => 153,  367 => 152,  365 => 148,  359 => 145,  352 => 141,  349 => 140,  346 => 139,  343 => 138,  338 => 136,  334 => 134,  324 => 126,  316 => 124,  314 => 123,  311 => 122,  308 => 121,  301 => 117,  297 => 116,  293 => 114,  291 => 113,  288 => 112,  282 => 110,  280 => 109,  275 => 106,  268 => 104,  265 => 103,  263 => 102,  256 => 100,  253 => 99,  245 => 96,  238 => 95,  236 => 94,  230 => 90,  225 => 87,  214 => 85,  210 => 84,  205 => 82,  202 => 81,  200 => 80,  197 => 79,  194 => 78,  192 => 77,  189 => 76,  181 => 74,  179 => 73,  171 => 67,  162 => 61,  158 => 60,  150 => 54,  148 => 51,  142 => 48,  140 => 47,  135 => 45,  129 => 43,  126 => 42,  116 => 31,  108 => 29,  101 => 24,  98 => 23,  92 => 20,  87 => 19,  84 => 18,  78 => 155,  76 => 138,  71 => 136,  68 => 135,  54 => 36,  52 => 35,  49 => 34,  47 => 23,  42 => 12,  33 => 15,  27 => 12,  24 => 2,  137 => 62,  132 => 44,  128 => 57,  122 => 55,  120 => 32,  115 => 52,  112 => 30,  110 => 50,  106 => 48,  103 => 47,  97 => 45,  91 => 35,  88 => 42,  85 => 41,  79 => 29,  77 => 38,  73 => 137,  66 => 25,  60 => 38,  58 => 30,  55 => 29,  53 => 28,  44 => 22,  37 => 16,  31 => 14,  28 => 13,);
    }
}
