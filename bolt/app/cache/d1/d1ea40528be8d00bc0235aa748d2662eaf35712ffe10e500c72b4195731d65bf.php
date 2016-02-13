<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_d83ec7e81fe6146ba009999824321dd42a5b4b715c1e81540d267395b33311e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_c24f798ea5992b9b0676f76ec6c8b6376270357fe1b628f15d6d9e362b287267"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute($_collector_, "events", array()))) ? (sprintf("%.0f ms", $this->getAttribute($_collector_, "duration", array()))) : ("n/a"));
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\" />
        <span>";
        // line 22
        if (isset($context["duration"])) { $_duration_ = $context["duration"]; } else { $_duration_ = null; }
        echo twig_escape_filter($this->env, $_duration_, "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 27
        if (isset($context["duration"])) { $_duration_ = $context["duration"]; } else { $_duration_ = null; }
        echo twig_escape_filter($this->env, $_duration_, "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/time.html.twig", 30)->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAACz0lEQVR42t2XXWhSYRjHc+pyWrC10e66qKggiGoF0Qh1SBPFDxCcX00yrG6EImFsRhAuvUjwQgZB1EUICYEkgRJGB0QmKMNGEYx1URYEg2w6amWY/YUXXH7Ms9M5RAk/PByf8/58P573ec+2Wq32V/g3xFKpdB3UQBV8JVTJvXUuxbXN+P96TODNzMzsNJvNo3UCgYCYszmmKKrPYrE4NBrNU7lcvtY8xGNjYyWtVvvEZrPZES9kQyy02+3nx8fH3xFJV5RK5RuHw2GqP8tInEgk+g0GwyN6wlZMJtPdfD6/Y0viVCo1iKHLMpM20Ov1FNqT0BWLsWhiXdImDyiQ7ybHVN1HnKibWHgNHxr5egXI6t90ej49PX0BsYKO4qWlpT1qtXqFhlhGnpHREWPaPiB2dydxL/7ZTRLMnpjg8/lcpNct4mGr1fqSK7HT6UwhfleLuFwuH1EoFBWuxDqd7jPiDzSLe+Lx+AQJYl9MKBQKZ+pb7kaxKBKJXGUgPgqCgGrQOc3S6fQEfuNvFEtisdgUA3E/kcsadE6zhYUFG9lKG2LcvMxA3EKnKUBx+bm6uqptFvcCtUql+kECWcdoNH6BQw56fltcYNTtdr/nSuzxeJbhONkujw9Fo9EYV+JkMvkAjv3txEOVSuUSytk3tqWoz2to/xwYaCcWgtPI5+dsSrGo6mn0GG2PtG6ZDYbBRb/f/5EtcSgUeos2J8HgpmURHMaQz6JglP5U6vV6P6G962Sr5HcUE/rAKXB7bm5uhenwhsPheim8BUa6HwQaSMjSv5HNZl+gstDOb5fL9X1xcTGLZ6fAMSDe6ilTBA4CO7iXyWReB4PBMo5F1WYZymkVc1nK5XKvEHsHWMA+sJ3p8VYAhkjvJ4EPRMCzYrE4XyqV5nGdBA/BLLCC46Tu8tl4kxCAAdKLE0AGzhKkZB73kqIh4PI1lQf4BB6TNn4B8KR3FN9bp4MAAAAASUVORK5CYII=\" alt=\"Timeline\"></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Timeline</h2>
    ";
        // line 42
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "events", array()))) {
            // line 43
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 51
    public function block_panelContent($context, array $blocks = array())
    {
        // line 52
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 57
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($_collector_, "duration", array())), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 61
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($_collector_, "inittime", array())), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\"> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 71
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo (($this->getAttribute($_profile_, "parent", array())) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 73
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events", array()), "__section__", array()), "duration", array()), "html", null, true);
        echo " ms
            ";
        // line 74
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "parent", array())) {
            // line 75
            echo "                - <a href=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($_profile_, "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 77
        echo "        </small>
    </h3>

    ";
        // line 80
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
        echo $context["__internal_c24f798ea5992b9b0676f76ec6c8b6376270357fe1b628f15d6d9e362b287267"]->getdisplay_timeline(("timeline_" . $_token_), $this->getAttribute($_collector_, "events", array()), $_colors_);
        echo "

    ";
        // line 82
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children", array()))) {
            // line 83
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context["events"] = $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "time"), "method"), "events", array());
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_child_, "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_events_, "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
                if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
                echo $context["__internal_c24f798ea5992b9b0676f76ec6c8b6376270357fe1b628f15d6d9e362b287267"]->getdisplay_timeline(("timeline_" . $this->getAttribute($_child_, "token", array())), $_events_, $_colors_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script>";
        // line 94
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 136
        if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
        echo twig_jsonencode_filter($_colors_);
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / ~ \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 400
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 402
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo $context["__internal_c24f798ea5992b9b0676f76ec6c8b6376270357fe1b628f15d6d9e362b287267"]->getdump_request_data($_token_, $_profile_, $this->getAttribute($_collector_, "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 404
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children", array()))) {
            // line 405
            echo "                ,
";
            // line 406
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 407
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $context["__internal_c24f798ea5992b9b0676f76ec6c8b6376270357fe1b628f15d6d9e362b287267"]->getdump_request_data($this->getAttribute($_child_, "token", array()), $_child_, $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events", array()), "__section__", array()), "origin", array()));
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo (($this->getAttribute($_loop_, "last", array())) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 410
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 442
        echo "</script>
";
    }

    // line 445
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 447
            $context["__internal_7d73bce1d49f212aa0df8a9248057614ea56593dacf3835114a7bbd0d250b8c9"] = $this;
            // line 448
            echo "                {
                    \"id\": \"";
            // line 449
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "js", null, true);
            echo "\",
                    \"left\": ";
            // line 450
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            if (isset($context["origin"])) { $_origin_ = $context["origin"]; } else { $_origin_ = null; }
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute($_events_, "__section__", array()), "origin", array()) - $_origin_)), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 452
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            echo $context["__internal_7d73bce1d49f212aa0df8a9248057614ea56593dacf3835114a7bbd0d250b8c9"]->getdump_events($_events_);
            echo "
                    ]
                }
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 458
    public function getdump_events($__events__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 460
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_events_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 461
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (("__section__" != $_name_)) {
                    // line 462
                    echo "                        {
                            \"name\": \"";
                    // line 463
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 464
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 465
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 466
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 467
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 468
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 469
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($_event_, "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 471
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_event_, "periods", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 472
                        echo "{\"start\": ";
                        if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_period_, "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_period_, "endtime", array())), "js", null, true);
                        echo "}";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo (($this->getAttribute($_loop_, "last", array())) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 474
                    echo "]
                        }";
                    // line 475
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo (($this->getAttribute($_loop_, "last", array())) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 481
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 482
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 484
            if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_colors_);
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 485
                echo "                <span data-color=\"";
                if (isset($context["color"])) { $_color_ = $context["color"]; } else { $_color_ = null; }
                echo twig_escape_filter($this->env, $_color_, "html", null, true);
                echo "\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $_category_, "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 488
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  864 => 488,  861 => 487,  848 => 485,  843 => 484,  839 => 482,  825 => 481,  798 => 475,  795 => 474,  773 => 472,  755 => 471,  750 => 469,  745 => 468,  740 => 467,  735 => 466,  730 => 465,  725 => 464,  720 => 463,  717 => 462,  714 => 461,  696 => 460,  684 => 458,  668 => 452,  661 => 450,  656 => 449,  653 => 448,  651 => 447,  636 => 445,  631 => 442,  597 => 410,  576 => 407,  558 => 406,  555 => 405,  552 => 404,  544 => 402,  538 => 400,  270 => 136,  226 => 94,  223 => 93,  220 => 92,  209 => 90,  202 => 87,  194 => 86,  191 => 85,  187 => 84,  181 => 83,  178 => 82,  170 => 80,  165 => 77,  158 => 75,  155 => 74,  150 => 73,  144 => 71,  130 => 61,  122 => 57,  115 => 52,  112 => 51,  104 => 45,  98 => 43,  95 => 42,  92 => 41,  89 => 40,  81 => 34,  78 => 33,  72 => 30,  65 => 27,  61 => 25,  58 => 24,  52 => 22,  49 => 21,  46 => 20,  42 => 19,  39 => 18,  35 => 1,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% from _self import display_timeline, dump_request_data %}*/
/* */
/* {% if colors is not defined %}*/
/*     {% set colors = {*/
/*         'default':                '#aacd4e',*/
/*         'section':                '#666',*/
/*         'event_listener':         '#3dd',*/
/*         'event_listener_loading': '#add',*/
/*         'template':               '#dd3',*/
/*         'doctrine':               '#d3d',*/
/*         'propel':                 '#f4d',*/
/*         'child_sections':         '#eed',*/
/*     } %}*/
/* {% endif %}*/
/* */
/* {% block toolbar %}*/
/*     {% set duration = collector.events|length ? '%.0f ms'|format(collector.duration) : 'n/a' %}*/
/*     {% set icon %}*/
/*         <img width="16" height="28" alt="Time" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=" />*/
/*         <span>{{ duration }}</span>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Total time</b>*/
/*             <span>{{ duration }}</span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAACz0lEQVR42t2XXWhSYRjHc+pyWrC10e66qKggiGoF0Qh1SBPFDxCcX00yrG6EImFsRhAuvUjwQgZB1EUICYEkgRJGB0QmKMNGEYx1URYEg2w6amWY/YUXXH7Ms9M5RAk/PByf8/58P573ec+2Wq32V/g3xFKpdB3UQBV8JVTJvXUuxbXN+P96TODNzMzsNJvNo3UCgYCYszmmKKrPYrE4NBrNU7lcvtY8xGNjYyWtVvvEZrPZES9kQyy02+3nx8fH3xFJV5RK5RuHw2GqP8tInEgk+g0GwyN6wlZMJtPdfD6/Y0viVCo1iKHLMpM20Ov1FNqT0BWLsWhiXdImDyiQ7ybHVN1HnKibWHgNHxr5egXI6t90ej49PX0BsYKO4qWlpT1qtXqFhlhGnpHREWPaPiB2dydxL/7ZTRLMnpjg8/lcpNct4mGr1fqSK7HT6UwhfleLuFwuH1EoFBWuxDqd7jPiDzSLe+Lx+AQJYl9MKBQKZ+pb7kaxKBKJXGUgPgqCgGrQOc3S6fQEfuNvFEtisdgUA3E/kcsadE6zhYUFG9lKG2LcvMxA3EKnKUBx+bm6uqptFvcCtUql+kECWcdoNH6BQw56fltcYNTtdr/nSuzxeJbhONkujw9Fo9EYV+JkMvkAjv3txEOVSuUSytk3tqWoz2to/xwYaCcWgtPI5+dsSrGo6mn0GG2PtG6ZDYbBRb/f/5EtcSgUeos2J8HgpmURHMaQz6JglP5U6vV6P6G962Sr5HcUE/rAKXB7bm5uhenwhsPheim8BUa6HwQaSMjSv5HNZl+gstDOb5fL9X1xcTGLZ6fAMSDe6ilTBA4CO7iXyWReB4PBMo5F1WYZymkVc1nK5XKvEHsHWMA+sJ3p8VYAhkjvJ4EPRMCzYrE4XyqV5nGdBA/BLLCC46Tu8tl4kxCAAdKLE0AGzhKkZB73kqIh4PI1lQf4BB6TNn4B8KR3FN9bp4MAAAAASUVORK5CYII=" alt="Timeline"></span>*/
/*     <strong>Timeline</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Timeline</h2>*/
/*     {% if collector.events|length %}*/
/*         {{ block('panelContent') }}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block panelContent %}*/
/*     <form id="timeline-control" action="" method="get">*/
/*         <input type="hidden" name="panel" value="time">*/
/*         <table>*/
/*             <tr>*/
/*                 <th style="width: 20%">Total time</th>*/
/*                 <td>{{ '%.0f'|format(collector.duration) }} ms</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Initialization time</th>*/
/*                 <td>{{ '%.0f'|format(collector.inittime) }} ms</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Threshold</th>*/
/*                 <td><input type="number" size="3" name="threshold" value="1" min="0"> ms</td>*/
/*             </tr>*/
/*         </table>*/
/*     </form>*/
/* */
/*     <h3>*/
/*         {{ profile.parent ? "Request" : "Main Request" }}*/
/*         <small>*/
/*             - {{ collector.events.__section__.duration }} ms*/
/*             {% if profile.parent %}*/
/*                 - <a href="{{ path('_profiler', { 'token': profile.parent.token, 'panel': 'time' }) }}">parent</a>*/
/*             {% endif %}*/
/*         </small>*/
/*     </h3>*/
/* */
/*     {{ display_timeline('timeline_' ~ token, collector.events, colors) }}*/
/* */
/*     {% if profile.children|length %}*/
/*         {% for child in profile.children %}*/
/*             {% set events = child.getcollector('time').events %}*/
/*             <h3>*/
/*                 Sub-request "<a href="{{ path('_profiler', { 'token': child.token, 'panel': 'time' }) }}">{{ child.getcollector('request').requestattributes.get('_controller') }}</a>"*/
/*                 <small> - {{ events.__section__.duration }} ms</small>*/
/*             </h3>*/
/* */
/*             {{ display_timeline('timeline_' ~ child.token, events, colors) }}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <script>{% autoescape 'js' %}//<![CDATA[*/
/*         /***/
/*          * In-memory key-value cache manager*/
/*          *//* */
/*         var cache = new function() {*/
/*             "use strict";*/
/*             var dict = {};*/
/* */
/*             this.get = function(key) {*/
/*                 return dict.hasOwnProperty(key)*/
/*                     ? dict[key]*/
/*                     : null;*/
/*                 };*/
/* */
/*             this.set = function(key, value) {*/
/*                 dict[key] = value;*/
/* */
/*                 return value;*/
/*             };*/
/*         };*/
/* */
/*         /***/
/*          * Query an element with a CSS selector.*/
/*          **/
/*          * @param string selector a CSS-selector-compatible query string.*/
/*          **/
/*          * @return DOMElement|null*/
/*          *//* */
/*         function query(selector)*/
/*         {*/
/*             "use strict";*/
/*             var key = 'SELECTOR: ' + selector;*/
/* */
/*             return cache.get(key) || cache.set(key, document.querySelector(selector));*/
/*         }*/
/* */
/*         /***/
/*          * Canvas Manager*/
/*          *//* */
/*         function CanvasManager(requests, maxRequestTime) {*/
/*             "use strict";*/
/* */
/*             var _drawingColors = {{ colors|json_encode|raw }},*/
/*                 _storagePrefix = 'timeline/',*/
/*                 _threshold = 1,*/
/*                 _requests = requests,*/
/*                 _maxRequestTime = maxRequestTime;*/
/* */
/*             /***/
/*              * Check whether this event is a child event.*/
/*              **/
/*              * @return true if it is.*/
/*              *//* */
/*             function isChildEvent(event)*/
/*             {*/
/*                 return '__section__.child' === event.name;*/
/*             }*/
/* */
/*             /***/
/*              * Check whether this event is categorized in 'section'.*/
/*              **/
/*              * @return true if it is.*/
/*              *//* */
/*             function isSectionEvent(event)*/
/*             {*/
/*                 return 'section' === event.category;*/
/*             }*/
/* */
/*             /***/
/*              * Get the width of the container.*/
/*              *//* */
/*             function getContainerWidth()*/
/*             {*/
/*                 return query('#collector-content h2').clientWidth;*/
/*             }*/
/* */
/*             /***/
/*              * Draw one canvas.*/
/*              **/
/*              * @param request   the request object*/
/*              * @param max       <subjected for removal>*/
/*              * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).*/
/*              * @param width     the width of the canvas.*/
/*              *//* */
/*             this.drawOne = function(request, max, threshold, width)*/
/*             {*/
/*                 "use strict";*/
/*                 var text,*/
/*                     ms,*/
/*                     xc,*/
/*                     drawableEvents,*/
/*                     mainEvents,*/
/*                     elementId = 'timeline_' + request.id,*/
/*                     canvasHeight = 0,*/
/*                     gapPerEvent = 38,*/
/*                     colors = _drawingColors,*/
/*                     space = 10.5,*/
/*                     ratio = (width - space * 2) / max,*/
/*                     h = space,*/
/*                     x = request.left * ratio + space, // position*/
/*                     canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),*/
/*                     ctx = canvas.getContext("2d"),*/
/*                     scaleRatio,*/
/*                     devicePixelRatio;*/
/* */
/*                 // Filter events whose total time is below the threshold.*/
/*                 drawableEvents = request.events.filter(function(event) {*/
/*                     return event.duration >= threshold;*/
/*                 });*/
/* */
/*                 canvasHeight += gapPerEvent * drawableEvents.length;*/
/* */
/*                 // For retina displays so text and boxes will be crisp*/
/*                 devicePixelRatio = window.devicePixelRatio == "undefined" ? 1 : window.devicePixelRatio;*/
/*                 scaleRatio = devicePixelRatio / 1;*/
/* */
/*                 canvas.width = width * scaleRatio;*/
/*                 canvas.height = canvasHeight * scaleRatio;*/
/* */
/*                 canvas.style.width = width + 'px';*/
/*                 canvas.style.height = canvasHeight + 'px';*/
/* */
/*                 ctx.scale(scaleRatio, scaleRatio);*/
/* */
/*                 ctx.textBaseline = "middle";*/
/*                 ctx.lineWidth = 0;*/
/* */
/*                 // For each event, draw a line.*/
/*                 ctx.strokeStyle = "#dfdfdf";*/
/* */
/*                 drawableEvents.forEach(function(event) {*/
/*                     event.periods.forEach(function(period) {*/
/*                         var timelineHeadPosition = x + period.start * ratio;*/
/* */
/*                         if (isChildEvent(event)) {*/
/*                             ctx.fillStyle = colors.child_sections;*/
/*                             ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);*/
/*                         } else if (isSectionEvent(event)) {*/
/*                             var timelineTailPosition = x + period.end * ratio;*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineHeadPosition, 0);*/
/*                             ctx.lineTo(timelineHeadPosition, canvasHeight);*/
/*                             ctx.moveTo(timelineTailPosition, 0);*/
/*                             ctx.lineTo(timelineTailPosition, canvasHeight);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/*                         }*/
/*                     });*/
/*                 });*/
/* */
/*                 // Filter for main events.*/
/*                 mainEvents = drawableEvents.filter(function(event) {*/
/*                     return !isChildEvent(event)*/
/*                 });*/
/* */
/*                 // For each main event, draw the visual presentation of timelines.*/
/*                 mainEvents.forEach(function(event) {*/
/* */
/*                     h += 8;*/
/* */
/*                     // For each sub event, ...*/
/*                     event.periods.forEach(function(period) {*/
/*                         // Set the drawing style.*/
/*                         ctx.fillStyle = colors['default'];*/
/*                         ctx.strokeStyle = colors['default'];*/
/* */
/*                         if (colors[event.name]) {*/
/*                             ctx.fillStyle = colors[event.name];*/
/*                             ctx.strokeStyle = colors[event.name];*/
/*                         } else if (colors[event.category]) {*/
/*                             ctx.fillStyle = colors[event.category];*/
/*                             ctx.strokeStyle = colors[event.category];*/
/*                         }*/
/* */
/*                         // Draw the timeline*/
/*                         var timelineHeadPosition = x + period.start * ratio;*/
/* */
/*                         if (!isSectionEvent(event)) {*/
/*                             ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);*/
/*                             ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);*/
/*                         } else {*/
/*                             var timelineTailPosition = x + period.end * ratio;*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineHeadPosition, h);*/
/*                             ctx.lineTo(timelineHeadPosition, h + 11);*/
/*                             ctx.lineTo(timelineHeadPosition + 8, h);*/
/*                             ctx.lineTo(timelineHeadPosition, h);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineTailPosition, h);*/
/*                             ctx.lineTo(timelineTailPosition, h + 11);*/
/*                             ctx.lineTo(timelineTailPosition - 8, h);*/
/*                             ctx.lineTo(timelineTailPosition, h);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineHeadPosition, h);*/
/*                             ctx.lineTo(timelineTailPosition, h);*/
/*                             ctx.lineTo(timelineTailPosition, h + 2);*/
/*                             ctx.lineTo(timelineHeadPosition, h + 2);*/
/*                             ctx.lineTo(timelineHeadPosition, h);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/*                         }*/
/*                     });*/
/* */
/*                     h += 30;*/
/* */
/*                     ctx.beginPath();*/
/*                     ctx.strokeStyle = "#dfdfdf";*/
/*                     ctx.moveTo(0, h - 10);*/
/*                     ctx.lineTo(width, h - 10);*/
/*                     ctx.closePath();*/
/*                     ctx.stroke();*/
/*                 });*/
/* */
/*                 h = space;*/
/* */
/*                 // For each event, draw the label.*/
/*                 mainEvents.forEach(function(event) {*/
/* */
/*                     ctx.fillStyle = "#444";*/
/*                     ctx.font = "12px sans-serif";*/
/*                     text = event.name;*/
/*                     ms = " ~ " + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + " ms / ~ " + event.memory + " MB";*/
/*                     if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {*/
/*                         ctx.textAlign = "end";*/
/*                         ctx.font = "10px sans-serif";*/
/*                         xc = x + event.endtime * ratio - 1;*/
/*                         ctx.fillText(ms, xc, h);*/
/* */
/*                         xc -= ctx.measureText(ms).width;*/
/*                         ctx.font = "12px sans-serif";*/
/*                         ctx.fillText(text, xc, h);*/
/*                     } else {*/
/*                         ctx.textAlign = "start";*/
/*                         ctx.font = "12px sans-serif";*/
/*                         xc = x + event.starttime * ratio + 1;*/
/*                         ctx.fillText(text, xc, h);*/
/* */
/*                         xc += ctx.measureText(text).width;*/
/*                         ctx.font = "10px sans-serif";*/
/*                         ctx.fillText(ms, xc, h);*/
/*                     }*/
/* */
/*                     h += gapPerEvent;*/
/*                 });*/
/*             };*/
/* */
/*             this.drawAll = function(width, threshold)*/
/*             {*/
/*                 "use strict";*/
/* */
/*                 width = width || getContainerWidth();*/
/*                 threshold = threshold || this.getThreshold();*/
/* */
/*                 var self = this;*/
/* */
/*                 _requests.forEach(function(request) {*/
/*                     self.drawOne(request, _maxRequestTime, threshold, width);*/
/*                 });*/
/*             };*/
/* */
/*             this.getThreshold = function() {*/
/*                 var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');*/
/* */
/*                 if (null === threshold) {*/
/*                     return _threshold;*/
/*                 }*/
/* */
/*                 _threshold = parseInt(threshold);*/
/* */
/*                 return _threshold;*/
/*             };*/
/* */
/*             this.setThreshold = function(threshold)*/
/*             {*/
/*                 _threshold = threshold;*/
/* */
/*                 Sfjs.setPreference(_storagePrefix + 'threshold', threshold);*/
/* */
/*                 return this;*/
/*             };*/
/*         }*/
/* */
/*         function canvasAutoUpdateOnResizeAndSubmit(e) {*/
/*             e.preventDefault();*/
/*             canvasManager.drawAll();*/
/*         }*/
/* */
/*         function canvasAutoUpdateOnThresholdChange(e) {*/
/*             canvasManager*/
/*                 .setThreshold(query('input[name="threshold"]').value)*/
/*                 .drawAll();*/
/*         }*/
/* */
/*         var requests_data = {*/
/*             "max": {{ "%F"|format(collector.events.__section__.endtime) }},*/
/*             "requests": [*/
/* {{ dump_request_data(token, profile, collector.events, collector.events.__section__.origin) }}*/
/* */
/* {% if profile.children|length %}*/
/*                 ,*/
/* {% for child in profile.children %}*/
/* {{ dump_request_data(child.token, child, child.getcollector('time').events, collector.events.__section__.origin) }}{{ loop.last ? '' : ',' }}*/
/* {% endfor %}*/
/* {% endif %}*/
/*             ]*/
/*         };*/
/* */
/*         var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);*/
/* */
/*         query('input[name="threshold"]').value = canvasManager.getThreshold();*/
/*         canvasManager.drawAll();*/
/* */
/*         // Update the colors of legends.*/
/*         var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');*/
/* */
/*         for (var i = 0; i < timelineLegends.length; ++i) {*/
/*             var timelineLegend = timelineLegends[i];*/
/* */
/*             timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');*/
/*         }*/
/* */
/*         // Bind event handlers*/
/*         var elementTimelineControl = query('#timeline-control'),*/
/*             elementThresholdControl = query('input[name="threshold"]');*/
/* */
/*         window.onresize = canvasAutoUpdateOnResizeAndSubmit;*/
/*         elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;*/
/* */
/*         elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;*/
/*         elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;*/
/*         elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;*/
/* */
/*         window.setTimeout(function() {*/
/*             canvasAutoUpdateOnThresholdChange(null);*/
/*         }, 50);*/
/* */
/*     //]]>{% endautoescape %}</script>*/
/* {% endblock %}*/
/* */
/* {% macro dump_request_data(token, profile, events, origin) %}*/
/* {% autoescape 'js' %}*/
/* {% from _self import dump_events %}*/
/*                 {*/
/*                     "id": "{{ token }}",*/
/*                     "left": {{ "%F"|format(events.__section__.origin - origin) }},*/
/*                     "events": [*/
/* {{ dump_events(events) }}*/
/*                     ]*/
/*                 }*/
/* {% endautoescape %}*/
/* {% endmacro %}*/
/* */
/* {% macro dump_events(events) %}*/
/* {% autoescape 'js' %}*/
/* {% for name, event in events %}*/
/* {% if '__section__' != name %}*/
/*                         {*/
/*                             "name": "{{ name }}",*/
/*                             "category": "{{ event.category }}",*/
/*                             "origin": {{ "%F"|format(event.origin) }},*/
/*                             "starttime": {{ "%F"|format(event.starttime) }},*/
/*                             "endtime": {{ "%F"|format(event.endtime) }},*/
/*                             "duration": {{ "%F"|format(event.duration) }},*/
/*                             "memory": {{ "%.1F"|format(event.memory / 1024 / 1024) }},*/
/*                             "periods": [*/
/*                                 {%- for period in event.periods -%}*/
/*                                     {"start": {{ "%F"|format(period.starttime) }}, "end": {{ "%F"|format(period.endtime) }}}{{ loop.last ? '' : ', ' }}*/
/*                                 {%- endfor -%}*/
/*                             ]*/
/*                         }{{ loop.last ? '' : ',' }}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% endautoescape %}*/
/* {% endmacro %}*/
/* */
/* {% macro display_timeline(id, events, colors) %}*/
/*     <div class="sf-profiler-timeline">*/
/*         <div class="legends">*/
/*             {% for category, color in colors %}*/
/*                 <span data-color="{{ color }}">{{ category }}</span>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <canvas width="680" height="" id="{{ id }}" class="timeline"></canvas>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
