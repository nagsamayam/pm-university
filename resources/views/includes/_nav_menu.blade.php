<span id="sideNavOpen" class="side-nav-open">
    	<i class="material-icons">&#xE5D2;</i>
    </span>

<div id="sideNav" class="sidenav">
    <div class="sidenav-header">
        <div class="media">
            <div class="media-body media-middle">Menu</div>
            <div id="sideNavClose" class="media-right media-middle side-nav-close">
                <i class="material-icons">&#xE5CD;</i>
            </div>
        </div>
    </div>
    <div class="sidenav-body">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                       aria-expanded="true" aria-controls="collapseOne">
                        BACHELOR'S DEGREE
                        <span class="md-collapse"><i class="material-icons">&#xE313;</i></span>
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            @foreach($bachelorePosts as $key => $post)
                                <li>
                                    <a href="{{$post->path()}}">{{$post->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        MASTER'S DEGREE
                        <span class="md-collapse"><i class="material-icons">&#xE313;</i></span>
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul>
                            @foreach($masterPosts as $key => $post)
                                <li>
                                    <a href="{{$post->slug}}">{{$post->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        SPECIALIZATION
                        <span class="md-collapse"><i class="material-icons">&#xE313;</i></span>
                    </a>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="headingThree">
                    <div class="panel-body">
                        <ul>
                            @foreach($specializationPosts as $key => $post)
                                <li>
                                    <a href="{{$post->slug}}">{{$post->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        HALLS OF KNOWLEDGE
                        <span class="md-collapse"><i class="material-icons">&#xE313;</i></span>
                    </a>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="headingThree">
                    <div class="panel-body">
                        <ul>
                            @foreach($hoks as $hok)
                                <li>
                                    <a href="{{ $hok->slug }}">{{$hok->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        PLACEMENTS
                        <span class="md-collapse"><i class="material-icons">&#xE313;</i></span>
                    </a>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="headingThree">
                    <div class="panel-body">
                        <ul>
                            @foreach($placements as $placement)
                                <li>
                                    <a href="{{ $placement->slug }}">{{ ucwords(strtolower($placement->title))}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>