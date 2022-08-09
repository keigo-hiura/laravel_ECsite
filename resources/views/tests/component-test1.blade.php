<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
test1
    //変数を呼び出すため(:message)を加える
    <x-tests.card title="タイトル1" content="コンテント" :message="$message"/>
    <x-tests.card title="タイトル2"/>
</x-tests.app>
