<div id="navbar" class="navbar-collapse collapse">
    @inject('navPresenter', 'App\Presenters\NavigationPresenter')
    <ul class="nav nav-pills navbar-left">
        <?php $navigations = $navPresenter->simpleNavList(); ?>
        @if ($navigations)
            @foreach ($navigations as $navigation)
                    @if (isset($category) && $category->name==$navigation->name)
                        <li class="nav-item active" role="presentation">
                    @else
                        <li class="nav-item" role="presentation">
                    @endif
                            <a href="{{ $navigation->url }}"><span>{{ $navigation->name }}</span></a>
                        </li>
            @endforeach
        @endif
    </ul>
    <form class="navbar-form navbar-right" action="{{ route('search') }}" method="get">
        <div class="input-group">
            <input type="search" class="search-field form-control" value="" name="keyword" placeholder="Search">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
</div>