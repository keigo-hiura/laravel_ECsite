<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
test1
    //変数を呼び出すため(:message)を加える
    <x-tests.card title="タイトル" content="コンテント" :message="$message"/>
</x-tests.app>
