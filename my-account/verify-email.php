<!DOCTYPE html>
<html lang="en" style="height:100%;">

<head>

    <!--    METADATA   -->

    <meta charset="utf-8">
    <title>Cashout- Verify Email Address</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Cashout, Currency Trading, Currency Exchange, Mobile Game, iOS, Currency Game, Trading, ForEx, Foreign Exhange, leverage, booster" />
    <meta name="description" content="Making a trade is super easy on Cashout. Everything you need to know is integrated on our minimalist interface, and your trades are executed with a push of a button..." />
    <meta name="author" content="Cashout">
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="Vida Ventures GmbH">
    <meta name="language" content="english">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    OPEN GRAPH   -->

    <meta property="og:site_name" content="Cashout">
    <meta property="og:title" content="How To Trade Currencies Using Cashout">
    <meta property="og:description" content="Cashout is the ultimate currency trading game where you battle other traders, watch your profits grow in real-time, and fight your way to the top of the global rankings. Check out how it works.">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://cashoutapp.io/app/how-to-use-cashout.html" />
    <meta property="og:image" content="http://cashoutapp.io/app/img/og-trading-with-cashout.jpg" />
    <meta property="fb:admins" content="701031422" />
    <meta property="fb:app_id" content="">


    <!--    TWITTER CARD GENERATOR  -->

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Play_Cashout">
    <meta name="twitter:creator" content="@Play_Cashout">
    <meta name="twitter:title" content="How To Trade Currencies Using Cashout">
    <meta name="twitter:description" content="Cashout is the ultimate currency trading game where you battle other traders, watch your profits grow in real-time, and fight your way to the top of the global rankings. Check out how it works.">
    <meta name="twitter:image" content="http://cashoutapp.io/app/img/og-trading-with-cashout.jpg">
    <meta name="twitter:url" content="http://cashoutapp.io/app/how-to-use-cashout.html">


    <!-- PAGE PROPERTIES -->

    <link rel="shortcut icon" href="/img/favicon.ico">
    <!--[if IE]>
        <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    -->
    <link href="/css/structure.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="http://cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js"></script>
    <script src="http://stephband.info/jquery.event.move/js/jquery.event.move.js"></script>
    <script src="http://stephband.info/jquery.event.swipe/js/jquery.event.swipe.js"></script>
    <script src="http://raw.githubusercontent.com/kswedberg/jquery-smooth-scroll/master/jquery.smooth-scroll.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/unslider.js"></script>
    <link rel="stylesheet" href="/css/unslider.css">
    <link rel="stylesheet" href="/css/unslider-dots.css">

    <!-- GOOGLE ANALYTICS -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-71104433-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- ADDTHIS SOCIAL SHARE -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56c4b1387ad3dcc3"></script>

</head>

<body>
    <script>
        $('a').smoothScroll();
    </script>

    <!--    HEADER   -->
    <!--    ˅˅˅    --->
    <div id="header" id="top-navigation-container">
        <div class="top-navigation">
            <div class="top-navigation-left">
                <a href="/index.html"><img src="/img/cashout_logo_white_horizontal.png"></a>
                <a href="/app/how-to-use-cashout.html">The App</a>
                <a href="/learn-to-trade-currencies/introduction.html">Learn to Trade</a>
            </div>
            <div class="top-navigation-right">
                <a href="https://www.facebook.com/Cashout-1641948626044517/" class="button-small button-outline-invert icon-facebook" target="_blank"></a>
                <a href="https://twitter.com/Play_Cashout" class="button-small button-outline-invert icon-twitter" target="_blank"></a>
                <a href="#" class="button-small button-outline-invert icon-appstore">Download</a>
            </div>
        </div>
    </div>

    <section class="two-cols-simple-container" id="learn-basics">
        <div class="two-cols-simple">
            <div class="two-cols-textblock">
                <div>
                    <h1>Verify Your Email Address</h1>

                    <?php

                        $error = null;
                        $response = null;
                        $confirmUrl = null;
                        try {
                            if (!isset($_REQUEST['key'])) {
                                throw new Exception('Key is not set');
                            }
                            $confirmUrl = 'http://api-v2-cashout.makers.do/users/confirm?key=' . urlencode($_REQUEST['key']);
                            $confirmBody = file_get_contents($confirmUrl);

                            if (!$confirmBody) {
                                throw new Exception('Api returned empty response');
                            }

                            $response = json_decode($confirmBody);

                            if ($response->error) {
                                throw new Exception($response->error);
                            }

                        } catch (Exception $e) {
                            $error = $e->getMessage();
                        }

                    ?>

                        <?php if($error): ?>
                            <p>Oops! Something went wrong. We were unable to verify your email address...
                                <br/> Connect to the Cashout app, go to the profile page, and click the "Resend" button to try again.</p>
                            <!--p><?php echo($error);?></p-->
                        <?php else: ?>
                            <p>Great! You have successfully verified your email address:
                                <?php echo($response->email); ?>
                            </p>
                            <?php endif;?>


                    <a href="/index.html" class="button-medium button-fill1">Home</a>
                </div>
            </div>
            <div class="two-cols-imageblock">
                <div>
                    <img src="/img/man5.png" alt="Learn to Trade Currencies - Cashout">
                </div>
            </div>
        </div>
    </section>



    <section id="footer" class="footer-container">
        <div class="footer">
            <div id="footer-left">
                <a href="https://www.facebook.com/Cashoutapp.io/" class="button facebook" target="_blank">
                    <svg viewBox="0 0 9.4 20.1">
                        <path d="M9.4 6.5L6.2 6.5 6.2 4.4C6.2 3.6 6.7 3.5 7.1 3.5L9.3 3.5 9.3 0 6.2 0C2.8 0 2 2.6 2 4.2L2 6.5 0 6.5 0 10.1 2 10.1 2 20.1 6.2 20.1 6.2 10.1 9 10.1 9.4 6.5 9.4 6.5Z" />
                    </svg>
                </a>
                <a href="https://twitter.com/Play_Cashout" class="button twitter" target="_blank">
                    <svg viewBox="0 0 23 18">
                        <path d="M23 2.1C22.2 2.5 21.2 2.7 20.3 2.8 21.3 2.3 22 1.4 22.4 0.3 21.5 0.9 20.4 1.2 19.4 1.4 18.5 0.6 17.3 0 15.9 0 13.3 0 11.2 2 11.2 4.5 11.2 4.9 11.2 5.2 11.3 5.6 7.4 5.4 3.9 3.6 1.6 0.8 1.2 1.5 1 2.3 1 3.1 1 4.7 1.8 6.1 3.1 6.9 2.3 6.9 1.6 6.7 0.9 6.3 0.9 6.3 0.9 6.4 0.9 6.4 0.9 8.6 2.6 10.4 4.7 10.8 4.3 10.9 3.9 11 3.5 11 3.2 11 2.9 11 2.6 10.9 3.2 12.7 4.9 14 7 14.1 5.4 15.3 3.3 16 1.1 16 0.7 16 0.4 16 0 16 2.1 17.2 4.6 18 7.2 18 15.9 18 20.7 11.1 20.7 5.1 20.7 4.9 20.7 4.7 20.6 4.5 21.6 3.8 22.4 3 23 2.1L23 2.1Z" />
                    </svg>
                </a>
                <!-- <a href="#" class="button download">@import "svg/apple-logo.kit" iOS Download</a>-->
                <a href="/beta/sign-up.html" class="button download">Join Beta!</a>

            </div>
            <div id="footer-right">
                <a href="/about/imprint.html" target="_blank">Imprint</a>
                <a href="/about/terms-and-conditions.html" target="_blank">Terms & Conditions</a>
                <a href="/about/privacy-policy.html" target="_blank">Privacy Policy</a>
                <a href="/media/index.html">Media</a>
                <a href="mailto:support@cashoutapp.io">Contact</a>
            </div>
        </div>
    </section>
</body>

</html>