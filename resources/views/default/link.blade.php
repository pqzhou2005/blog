<div class="panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">友情链接</div>

    @inject('linkPresenter', 'App\Presenters\LinkPresenter')

    <!-- List group -->
    <ul class="list-group-default">
        <?php $links = $linkPresenter->linkList() ?>

        @if ($links)
            @foreach ($links as $link)
                <li class="list-group-item-default">
                    <a href="{{ $link->url }}" target="_blank">{{ $link->name }}</a>
                </li>
            @endforeach
        @endif
    </ul>
</div>