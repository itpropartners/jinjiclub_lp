<h3>パスワード再設定</h1>
<p>
  以下のボタンを押下し、パスワードの手続きを行ってください。
</p>
<a href="{{ route('password.reset', ['token' => $token]) }}" class="button button-primary" target="_blank" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #000; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #ffee00; border-top: 10px solid #ffee00; border-right: 18px solid #ffee00; border-bottom: 10px solid #ffee00; border-left: 18px solid #ffee00;">再設定</a>
<p>このパスワードリセットリンクは60分で期限切れになります。</p>
