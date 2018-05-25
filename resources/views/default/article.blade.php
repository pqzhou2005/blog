@if($articles->total()>0)
    <ol class="article-list">
        @foreach ($articles as $article)
            <li>
                <h4 class='title'>
                    <a href="{{ route('article',['id' => $article->id]) }}" target="_blank">
                        {{$article->title}}
                    </a>
                </h4>
                <p class="desc">
                   {{$article->desc}}
                </p>
                <p class="info">
                    <span>
                        {{ date('Y-m-d', strtotime($article->created_at)) }}
                    </span>
                            &nbsp;
                    @if($article->category)
                    <span>
                        <span class="label">分类</span>
                        <a href="{{ route('category', ['id' => $article->cate_id]) }}" target="_blank">
                            {{ $article->category->name }}
                        </a>
                    </span>
                    @endif
                    <span>
                        <span class="label">阅读</span>
                        {{ $article->read_count }}
                    </span>
                </p>
            </li>
            <hr/>
        @endforeach
    </ol>
    {!! $articles->links() !!}
@else
    <h3>没有找到文章！！！</h3>
@endif