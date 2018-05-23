@inject('systemPresenter', 'App\Presenters\SystemPresenter')

@extends('layouts.app')

@section('title', $systemPresenter->checkReturnValue('title', $article->title))

@section('description', $systemPresenter->checkReturnValue('seo_desc', $article->desc))

@section('keywords', $systemPresenter->checkReturnValue('seo_keyword', $article->keyword))

@section('style')
    <link rel="stylesheet" href="{{ asset('editor.md/css/editormd.preview.min.css') }}">
    <link rel="stylesheet" href="{{ asset('share.js/css/share.min.css') }}">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center color-black">
                {{ $article->title }}
            </h3>
            <p class=" m-t-25 color-black">
                <i class="glyphicon glyphicon-calendar"></i>{{ $article->created_at }}
                &nbsp;
                @if($article->category)
                    <i class="glyphicon glyphicon-th-list"></i>
                    <a href="{{ route('category', ['id' => $article->cate_id]) }}" target="_blank">
                        {{ $article->category->name }}
                    </a>
                @endif
            </p>
            <p class="color-black">
                <i class="glyphicon glyphicon-tags"></i>&nbsp;
                @foreach ($article->tag as $tag)
                    <a href="{{ route('tag', ['id' => $tag->id]) }}" target="_blank">
                        {{ $tag->tag_name }}
                    </a>
                    &nbsp;
                @endforeach
            </p>
        </div>


    </div>

    <div class="markdown-body editormd-html-preview" style="padding:0;">
        {!! $article->html_content !!}
    </div>

    <div id="share" class="social-share m-t-25"></div>
    <!-- 评论插件 -->
    @include('default.comment.index', [
        'commentId' => $article->id,
        'commentTitle' => $article->title,
        'commentUrl' => Request::getUri()
    ])
@endsection

@section('script')
    <script src="{{ asset('share.js/js/jquery.share.min.js') }}"></script>

    <script>
        $(function(){
            $('#share').share({sites: ['qzone', 'qq', 'weibo','wechat']});
        });
    </script>

@endsection
