@props(['title' => 'デフォルトのタイトル', 'content' => 'デフォルトのコンテンツ', 'msg' => 'デフォルトのメッセージ'])

<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2',
    'data-role' => 'hoge',
]) }}>
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }} </div>
    <p>{{ $msg }}</p>
</div><!-- /.border-2 -->
