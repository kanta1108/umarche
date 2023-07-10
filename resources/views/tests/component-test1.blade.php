<x-test.app>
    <x-slot name="header">ヘッダーです</x-slot>
    コンポーネントスロット
    <x-test.card title="タイトル" content="コンテンツ" :msg="$msg"></x-test.card>
    <x-test.card title="タイトル" class="bg-red-300" data-role="fuga"></x-test.card>
    <x-slot name="footer">フッターです</x-slot>
</x-test.app>
