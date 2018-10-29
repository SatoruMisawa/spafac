<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Space_Factory
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__links">
			<ul>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>signin">新規登録する≫</a>
				</li>
				<li>
					<a href="#">スペースオーナー登録する≫</a>
				</li>
				<li>
					<a href="#">iPhone</a>
				</li>
				<li>
					<a href="#">Android</a>
				</li>
			</ul>
		</div>
		<div class="site-footer__sitemap">
			<ul>
				<li>
					目的から探す
					<ul>
						<li><a href="#">パーティー</a></li>
						<li><a href="#">会議</a></li>
						<li><a href="#">宿泊・民泊</a></li>
						<li><a href="#">写真撮影</a></li>
						<li><a href="#">ロケ撮影</a></li>
						<li><a href="#">個展・展示会</a></li>
						<li><a href="#">演奏</a></li>
						<li><a href="#">スポーツ</a></li>
					</ul>
				</li>
				<li>
					カテゴリーから探す
					<ul>
						<li><a href="#">目的から探す</a></li>
						<li><a href="#">エリアから探す</a></li>
						<li><a href="#">人数から探す</a></li>
						<li><a href="#">会場タイプから探す</a></li>
						<li><a href="#">アメニティから探す</a></li>
						<li><a href="#">法人利用のご相談</a></li>
					</ul>
				</li>
				<li>
					スペースマーケットについて
					<ul>
						<li><a href="#">ご利用ガイド</a></li>
						<li><a href="#">スペース掲載をご希望の方へ</a></li>
						<li><a href="#">スマートフォンアプリ</a></li>
						<li><a href="#">法人向け管理サービス</a></li>
						<li><a href="#">プライバシーポリシー</a></li>
						<li><a href="#">スペースマーケット利用規約</a></li>
						<li><a href="#">ゲスト規約</a></li>
						<li><a href="#">決済の流れ</a></li>
						<li><a href="#">よくある質問</a></li>
						<li><a href="#">お問い合わせ</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="site-footer__topics">
			<dl>
				<dt>人気の貸し会議室</dt>
				<dd>東京 渋谷 新宿 池袋 品川 秋葉原 横浜 名古屋 大阪</dd>
				<dt>人気のレンタルスペース</dt>
				<dd>東京都 神奈川県 千葉県 愛知県 大阪府 京都府 福岡県</dd>
				<dt>特集・まとめ</dt>
				<dd>格安 キッチン付き 少人数 オフサイト 誕生日</dd>
			</dl>
		</div>
		<div class="site-footer__info">
			<p class="company-name">スペースファクトリー事務局</p>
			<ul class="links">
				<li><a href="#">採用情報</a></li>
				<li><a href="#">運営会社</a></li>
				<li><a href="#">約款</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>commercial-transaction-law">特定商取引法に基づく表示</a></li>
			</ul>
			<ul class="links-sns">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Instagram</a></li>
			</ul>
			<p class="address">
				〒530-0001<br>
				大阪市北区梅田2-2-2<br>
				ヒルトンプラザウエストオフィスタワー19階<br>
				サービスその他に関するお問い合わせ<br>
				info@spafac.com<br>
			</p>
		</div>
		
		<div class="site-footer__copyright">
			<p>© スペースファクトリー 2018<br>Copyright © スペースファクトリー Co., Ltd Allrights reserved.</p>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
