<x-tests.app>
  <x-slot name="header">
    ヘッダー
  </x-slot>
  テスト2
  <x-test-class-base classBaseMessage="クラスベースメッセージ" />
  <div class="mb-4"></div>
  <x-test-class-base classBaseMessage="クラスベースメッセージ" defaultMessage="初期値を変更" />
</x-tests.app>