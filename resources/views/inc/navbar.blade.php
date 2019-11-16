{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">--}}
{{--    <a class="navbar-brand" href="/posts">{{config('app.name', 'Darkpony Ltd')}}</a>--}}
{{--    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">--}}
{{--        <div class="navbar-nav">--}}
{{--            <a class="nav-item nav-link" href="/posts">Home<span class="sr-only">(current)</span></a>--}}
{{--            <a class="nav-item nav-link" href="/posts/create">Create Post</a>--}}
{{--        </div>--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                Dropdown link--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                <a class="dropdown-item" href="#">Action</a>--}}
{{--                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </div>--}}
{{--</nav>--}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/posts">{{config('app.name', 'Darkpony Ltd')}}</a>
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/posts">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create Post</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/categories">List</a>
                    <a class="dropdown-item" href="/categories/create">Create</a>
                </div>
            </li>
        </ul>
    </div>
</nav>