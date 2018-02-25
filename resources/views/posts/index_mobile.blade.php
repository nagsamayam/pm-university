<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8; IE=EDGE">
    <meta charset="utf-8"/>
    <title>{{ config('app.short_name') | config('app.name') }}</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-mobile.css') }}"/>
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<!--Progress-->
<progress value="0" id="progressBar" class="flat">
    <div class="progress-container">
        <span class="progress-bar"></span>
    </div>
</progress>
<!--Progress-->
<!--Banner-->
<!-- Side Nav -->
@include('includes._nav_menu', compact(
            'bachelorePosts',
            'masterPosts',
            'specializationPosts',
            'placements',
            'hoks'
        ))
        <!-- // Side Nav -->
<section class="main-banner">
    <div class="banner-logo">
        <img src="{{ asset('images/mobile/logo.png') }}" alt="{{ config('app.name') }}"/>
    </div>
    <div class="caption">
        <h1><span>{{ config('app.name') }}</span></h1>

        <p>
                <span>A free, game-changing online university for product managers!
                    Learn all aspects of Product Management from some of the leading
                    product managers of Silicon Valley. </span>
        </p>
    </div>
</section>
<!--//Banner-->

<!--BACHELOUR'S DEGREE-->
<section class="common-section">
    <div class="container">
        <h2>BACHELOR'S DEGREE</h2>

        <p>Learn the basics of Product Management. Topics range from how to
            be a product manager, working with teams as a PM to creating
            product roadmaps that lead to truly amazing products!</p>
    </div>
    <ul class="pm-list">
        @foreach($bachelorePosts as $key => $post)
            <li>
                <a href="{{$post->path()}}">
                    <div class="media">
                        <div class="media-left"><span class="pm-list-count">{{$key += 1}}.</span></div>
                        <div class="media-body">{{$post->title}}</div>
                        <div class="media-right"><span class="r-more">READ</span></div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</section>
<!--//BACHELOUR'S DEGREE-->

<!--MASTER'S DEGREE-->
<section class="common-section">
    <div class="container">
        <h2>MASTER'S DEGREE</h2>

        <p>Already a Product Manager or think you've got the skills to go after a Master's Degree in Product
            Management? Learn advanced topics in product management.</p>
    </div>
    <ul class="pm-list">
        @foreach($masterPosts as $key => $post)
            <li>
                <a href="{{$post->slug}}">
                    <div class="media">
                        <div class="media-left"><span class="pm-list-count">{{$key += 1}}.</span></div>
                        <div class="media-body">{{$post->title}}</div>
                        <div class="media-right"><span class="r-more">READ</span></div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</section>
<!--//MASTER'S DEGREE-->

<!--SPECIALIZATION-->
<section class="common-section">
    <div class="container">
        <h2>SPECIALIZATION</h2>

        <p>Dig deeper into the discipline of product management and dive into twenty advanced product management
            courses that truly put your skills to the test!</p>
    </div>
    <ul class="specialisation-list">
        @foreach($specializationPosts as $key => $post)
            <li>
                <a href="{{$post->slug}}">
                    <div>
                        <img src="{{$post->imageUrl()}}"
                             alt="{{$post->title}}"
                             class="s-list-icon"/>
                    </div>
                    <div class="s-list-name">{{$post->title}}</div>
                </a>
            </li>
        @endforeach
    </ul>
</section>
<!--//SPECIALIZATION-->

<!--HALLS OF KNOWLEDGE-->
<section class="common-section" style="background-color: #f2f2f2;">
    <div class="container">
        <h2>HALLS OF KNOWLEDGE</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend ornare lorem. Aliquam gravida et elit
            sed vulputate</p>
    </div>
    <div class="knowledge">
        <div class="carousel-container">
            <div id="smartcityCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($hoks as $key => $hok)
                        <div class="item <?php if ($key == 0) echo 'active' ?>">
                            <a href="{{ $hok->slug }}">
                                <div class="k-list-item">
                                    <div class="list-image">
                                        <img src="{{asset($hok->imageUrl())}}"/>
                                    </div>
                                    <div class="list-desc">
                                        <div class="list-desc-details">
                                            <p>{{$hok->title}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
                <!-- Indicators -->
                <div class="text-center carousel-control">
                    <ol class="carousel-indicators">
                        <li data-target="#smartcityCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#smartcityCarousel" data-slide-to="1"></li>
                        <li data-target="#smartcityCarousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//HALLS OF KNOWLEDGE-->

<!--PLACEMENTS-->
<section class="common-section">
    <div class="container">
        <h2>PLACEMENTS</h2>

        <p>Learn how to get interviews and land jobs as a first time Product Manager, create a winning resume
            and portfolio, and build your brand as a thought leader and successful product manager. Also take
            advantage of the benefits of PM University's career placement program by submitting your resume for
            PM University contributors to find a fit for you to begin your career as a Product Manager!</p>

        <div class="placement-list">
            @foreach($placements as $placement)
                <div class="media">
                    <div class="pull-left">
                        <img src="{{asset($placement->imageUrl())}}"/>
                    </div>
                    <div class="media-body">
                        <h4 class="p-list-header">{{ $placement->title }}</h4>

                        <div class="p-list-desc">
                            {{ $placement->summary }}
                        </div>
                        <div class="p-list-link">
                            <a href="{{ $placement->slug }}">Read more &raquo;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--//PLACEMENTS-->

<!--Footer-->
@include('includes._footer')
        <!--//Footer-->

@include('includes._copy_rights')

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-scrolltofixed-min.js"></script>
<script>
    $(document).ready(function () {
        /* error message element hide on focus */
        $('body').on({
            click: function () {
                $(this).siblings('.email-input').focus();
                $(this).remove();
            }
        }, '.required-field');
        /*end*/

    });
    $(document).ready(function () {
        var getMax = function () {
            return $(document).height() - $(window).height();
        }

        var getValue = function () {
            return $(window).scrollTop();
        }

        if ('max' in document.createElement('progress')) {
            var progressBar = $('progress');

            progressBar.attr({max: getMax()});

            $(document).on('scroll', function () {
                progressBar.attr({value: getValue()});
            });

            $(window).resize(function () {
                progressBar.attr({max: getMax(), value: getValue()});
            });
        }
        else {
            var progressBar = $('.progress-bar'),
                    max = getMax(),
                    value, width;

            var getWidth = function () {
                // Calculate width in percentage
                value = getValue();
                width = (value / max) * 100;
                width = width + '%';
                return width;
            }

            var setWidth = function () {
                progressBar.css({width: getWidth()});
            }

            $(document).on('scroll', setWidth);
            $(window).on('resize', function () {
                max = getMax();
                setWidth();
            });
        }
        // Right menu
        $('body').on({
            click: function () {
                $('#sideNav').css({'width': "100%"})
            }
        }, '#sideNavOpen');
        $('body').on({
            click: function () {
                $('#sideNav').css({'width': 0})
            }
        }, '#sideNavClose');
    });
</script>
@include('includes._ga')
@yield('after_scripts')
</body>
</html>