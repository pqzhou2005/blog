<?php

$commentPlugin = $systemPresenter->getKeyValue('comment_plugin');
$shortName = $systemPresenter->getKeyValue($commentPlugin.'_short_name');
?>
@if($commentPlugin !='')
    @if($commentPlugin == 'duoshuo')
        @include('default.comment.duoshuo')
    @elseif($commentPlugin == 'disqus')
        @include('default.comment.disqus')
    @elseif($commentPlugin == 'livere')
        @include('default.comment.livere')
    @endif
@endif