<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
<main>
	<?php
		get_template_part( './elements/fp-shibheader' );
		get_template_part( './elements/fp-welcome-mess' );
		get_template_part( 'elements/cta--jiko-lp' );
	?>


	<div class="row">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column small-12 large-8 contents --mt0 --pt0">


			<section class="contents--section contents--section__images">
				<div class="row align-middle">
					<h3 class="column small-12">信頼できるクラウドの活用</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/lp/kure/6.jpg" alt="山下江法律事務所福山支部はクラウドを活用することで豊富な経験・多数の解決事例を共有し、どこの事務所でも同一のサ―ビスを提供できます。">
					</div>
					<div class="column small-12 medium-6">
						<p>広島最大級の弁護士事務所である山下江法律事務所では、その叡智・豊富な経験・多数の解決事例を共有し、常に適切な解決を迅速に行うことが可能です。</p>
						<p>さらに、世界でも最高レベルのセキュリティで、プライバシー保護が徹底されています。</p>
					</div>
				</div>
				<div class="row align-middle">
					<h3 class="column small-12">プライバシー保護環境</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/privacy.jpg'; ?>" alt="山下江法律事務所福山支部もプライバシーポリシーや行動指針に基づいた「気軽に相談できる場」を創造しました。">
					</div>
					<div class="column small-12 medium-6">
						<p>新しくオープンした福山支部でも、山下江法律事務所の行動指針やプライバシーポリシーに基づいた「気軽に相談できる場」を創造しました。</p>
					</div>
				</div>
				<div class="row align-middle">
					<h3 class="column small-12">安心して相談できる空間</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/2.jpg'; ?>" alt="山下江法律事務所福山支部では居心地の良い空間を演出しています。">
					</div>
					<div class="column small-12 medium-6">
						<p>一時間程度の法律相談でも、知らないことや難しい用語がたくさん出てきて疲れてしまいます。気軽に、安心できる法律相談のために、安心感を与える照明やインテリア家具により、居心地の良い空間を演出しております。</p>
					</div>
				</div>
			</section>


			<section class="contents--section contents--section__images">
				<h2 id="access">福山支部へのアクセス</h2>
				<div class="row">
					<div class="column">
						<p class="text-center"><img src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/access/map--fukuyama.png" alt="山下江法律事務所福山支部までのアクセス方法"></p>
						<p class="text-center"><a class="button link-external" href="https://goo.gl/maps/BD1h4PY4Fmr" title="Googleマップで見る" target="_blank" rel="nofollow">Googleマップで見る</a>　<a href="https://www.law-yamashita.com/downloads/access/print--fukuyama.pdf" class="button" target="_blank">印刷用PDF</a></p>
						<p>〒720-0067　広島県福山市西町2-10-1　福山商工会議所ビル５階<br>TEL： 084-993-9041　FAX： 084-993-9042<br>営業時間：　平日9：00～18：00</p>
						<p><b>＜福山商工会議所ビル有料駐車場の料金＞</b><br>初めの30分無料 1時間300円<br>その後30分ごと100円</p>
					</div>
				</div>
			</section>


			<section class="contents--section contents--section__sozoku">
				<div class="contents--section contents--section__pickup">
							<h2>多数の実績とお客様の声に裏付けされた<br><strong class="underline">交通事故に強い弁護士</strong></h2>
							<h3>地元広島最大級の解決実績</h3>
							<p>平成２３年以来の当事務所での交通事故案件での実績は、<u>相談数2,749</u>件、<u>受任数1,215</u>件（2018年末現在）です。地元広島における法律事務所で、<strong class="underline">これだけ多数の相談件数、受任件数の実績があるのは当事務所のみ</strong>と思われます。当事務所における交通事故案件への取組に対するみなさまからの<b>信頼の結果</b>と自負しております。</p>
							<h3>お客様のアンケートで満足度94.6％の高評価</h3>
							<p>お客様の感謝の声の多さ。当事務所では、ご相談やご依頼が終わった後に、お客様から満足度や改善点を聞かせていただくためにアンケートを行っております。</p>
							<p>その結果、94.6%のお客様にご満足いただいていることが分かりました。お客様の声ページには、その生の声が直筆メッセージで掲載されています。</p>
							<p class="text-right"><a href="<?php echo get_page_link( '5485' ); ?>" class="button">お客様の声を見る</a></p>
							<h3>後遺障害など医学的研修会の実施</h3>
							<p>交通事故は多くの場合、身体的傷害を伴うものです。その傷害の回復（治療）をどのようにするのか、その傷害がもたらす後遺障害はどうなるのかは、<u>被害者にとって一番の問題</u>と思います。被害者のそうした悩みに答え、最高の解決を得られるようにするため、私たちは<strong class="underline">医師による医学的知識の習得・研修</strong>も行っております。</p>
							<p class="text-right"><a href="<?php echo get_page_link( '6305' ), '#jiko-training'; ?>" class="button">交通事故（医療）研修の様子</a></p>
							<h3>交通事故チームによる専門性強化</h3>
							<p>後遺障害の認定や事故の相手方の保険会社との交渉には、<u>高い専門性と経験が要求</u>されます。当事務所における<strong class="underline">広島最大級の解決事例データを集積・分析し、事務所全体で共有化し、依頼者に最も有利な解決を実現するために、弁護士５名・秘書５名（平成２７年末現在）からなる交通事故チームを結成</strong>しています。</p>
							<p class="text-right"><a href="<?php echo get_page_link( '6305' ); ?>" class="button">交通事故チームリーダー弁護士からメッセージ</a></p>
							<h3>事故直後から治療・解決までサポート</h3>
							<p><strong class="underline">交通事故に遭われた場合は、警察やご自身の加入する保険会社に連絡するとともに、直ちに弁護士に連絡</strong>していただきたいと思います。あなたは一人ではありません。私たち弁護士が、治療から解決まで寄り添います。後遺障害の認定を受ける前に弁護士に相談していただければ、認定に当たってのアドバイスを行い、場合によっては病院にも同行します。一旦認定された後遺障害を覆すのは難しい場合がありますので、その前にご相談ください。</p>
							<h3>初回相談・着手金が無料</h3>
							<p>当事務所では、被害者救済のために、<strong class="underline">交通事故に遭われた方の初回相談料は無料。着手金も無料</strong>としております（弁護士費用特約により保険会社から支払われる場合は別）。ご期待に応えられるようにするために、全力でご相談に応じます。ご依頼を受けた場合は、全力で被害者救済のために奮闘します。</p>
				</div>

				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '6298' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>交通事故の基礎知識</a></p>


			<section class="contents--section contents--section__service">
				<h2 id="front--service">取扱範囲ピックアップ</h2>
				<div class="row small-up-1 medium-up-2">
					
					<?php
						include( get_template_directory() . '/config/service.php' );
						for ( $i = 0; $i < 4; $i++ ) :
					?>
					<article class="article--category column">
						<header class="article--category_header">
							<h3 class="article--category_title"><a href="<?php echo get_page_link( $service[$i]['id'] ); ?>"><span class="article--category_icon"><?php NID_SVG::icon( $service[$i]['icon'], array(), get_the_title( $service[$i]['id'] ) . 'のアイコン' ) ?></span><?php echo get_the_title( $service[$i]['id'] ); ?></a></h3>
							<p class="article--category_desc"><?php echo $service[$i]['desc']; ?></p>
						</header>
						<div class="article--category_content">
							<ol>
							<?php
								foreach ( $service[$i]['children'] as $child ) {
									if ( ! is_array( $child ) ) {
										echo '<li><a href="', get_page_link( $child ), '">', get_the_title( $child ), '</a></li>';
									} else {
										echo '<ul>';
										foreach ( $child as $grandson ) {
											if ( ! is_array( $grandson ) ) {
												echo '<li><a href="', get_page_link( $grandson ), '">', get_the_title( $grandson ), '</a></li>';
											} else {
												echo '<ul>';
												foreach ( $grandson as $great ) {
													if ( ! is_array( $great ) ) {
														echo '<li><a href="', get_page_link( $great ), '">', get_the_title( $great ), '</a></li>';
													} else {
														echo '<ul>';
														foreach ( $grandson as $great ) {
																echo '<li><a href="', get_page_link( $great ), '">', get_the_title( $great ), '</a></li>';
														}
														echo '</ul>';
													}
												}
												echo '</ul>';
											}
										}
										echo '</ul>';
									}
								}
							?>
							</ol>
							<p class="text-center contents--section_button"><a href="<?php echo get_page_link( $service[$i]['id'] ); ?>" class="button secondary"><?php NID_SVG::icon( 'list', array() ); ?>詳しく見る</a></p>
						</div>
					</article>
					<?php
						endfor;
					?>

				</div>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '6226' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>取扱業務の一覧を見る</a></p>
			</section>


			<?php
				$args = array(
					'order' => 'DESC',
					'orderby' => 'modified',
					'posts_per_page' => 4,
					'post_status'    => 'publish'
				);
				$news = new WP_Query( $args );
				if ( $news->have_posts() ) :
			?>
			<div class="contents--section">
				<h2><a href="<?php echo get_page_link( '5749' ); ?>">最新情報<span class="badge">　></span></a></h2>
				<?php
					while ( $news->have_posts() ) : $news->the_post();
				?>
				<dl>
					<dt><span class="label secondary"><?php echo get_the_date( 'Y-m-d' ); ?></span>　<?php the_category( '　' ); ?></dt>
					<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
				</dl>
				<?php
					endwhile;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '5749' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>お知らせ一覧</a></p>
			</div>
				<?php endif; ?>


			<div class="contents--section">
				<h2 id="front--news"><a href="https://www.law-yamashita.com/topics" target="_blank">事務所の最新情報<span class="badge">　></span></a></h2>
				<?php
					$url = 'https://www.law-yamashita.com/feed';
					$url = sprintf( esc_html( "%s" ), $url );
					add_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					include_once( ABSPATH . WPINC . '/feed.php' );
					$feed = fetch_feed( $url );
					remove_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					$maxitems = 3;
					if ( ! is_wp_error( $feed ) ) {
						$maxitems = $feed->get_item_quantity( $maxitems );
						$rss_items = $feed->get_items( 0, $maxitems );
					}
					$site_title = $feed->get_title();
					$site_url = $feed->get_permalink();

					$output = '';
					date_default_timezone_set( 'Asia/Tokyo' );
					foreach ( $rss_items as $item ) {
						$f_link = esc_url( $item->get_permalink() );
						$f_date = $item->get_date( 'Y-m-d' );
						$f_title = esc_html( $item->get_title() );
						$f_category = '';
						foreach ( $item->get_categories() as $category ) {
							$f_category .= $category->get_label();
						}
						$output .= <<< EOM
<dl>
	<dt><span class="label secondary">{$f_date}</span>　<span class="label">{$f_category}</span></dt>
	<dd><a href="{$f_link}" target="_blank">{$f_title}</a></dd>
</dl>
EOM;
					}
					echo $output;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="https://www.law-yamashita.com/topics" class="button large" target="_blank"><?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧<br><br><span style="font-size:0.8em">※メインサイトへ移行します。</span></a></p>
			</div>
			
		</div>
	</div>
	<?php get_template_part( './elements/fp-special-sites' ); ?>
	<?php get_template_part( './elements/fp--access' ); ?>
</main>

<?php get_footer(); ?>
