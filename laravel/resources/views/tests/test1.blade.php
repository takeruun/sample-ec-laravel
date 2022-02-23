<x-tests.app>
  <x-slot name="header">
    ヘッダー
  </x-slot>
  テスト１
  <x-tests.card title="タイトル" content="メッセージ" :message="$message"></x-tests.card>
  <x-tests.card title="タイトル2"></x-tests.card>
  <x-tests.card title="タイトル3" class="bg-red-300"></x-tests.card>
</x-tests.app>