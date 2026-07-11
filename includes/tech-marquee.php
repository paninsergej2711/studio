<!-- Технологии - бегущая строка -->
<section class="tech-marquee section-dark" style="padding-bottom:90px">
	<div class="container">
		<div class="section-title-wrap"><h4 class="section-title">Технологии с которыми мы работаем</h4></div>
	</div>
	<div class="marquee-wrap">
		<div class="marquee-track" id="marqueeTrack">
			<div class="marquee-item"><img loading="lazy" src="/img/vector/wordpress.svg" alt="WordPress"><span>WordPress</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/laravel.svg" alt="Laravel"><span>Laravel</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/php.svg" alt="PHP"><span>PHP</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/python.svg" alt="Python"><span>Python</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/react.svg" alt="React"><span>React</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/angular.svg" alt="Angular"><span>Angular</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/vuejs.svg" alt="Vue.js"><span>Vue.js</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/nodejs.svg" alt="Node.js"><span>Node.js</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/next-js.svg" alt="Next.js"><span>Next.js</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/mysql.svg" alt="MySQL"><span>MySQL</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/mongodb.svg" alt="MongoDB"><span>MongoDB</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/postgresql.svg" alt="PostgreSQL"><span>PostgreSQL</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/docker.svg" alt="Docker"><span>Docker</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/git-bash.svg" alt="Git"><span>Git</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/figma.svg" alt="Figma"><span>Figma</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/html.svg" alt="HTML5"><span>HTML5</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/css.svg" alt="CSS3"><span>CSS3</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/bootstrap.svg" alt="Bootstrap"><span>Bootstrap</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/jquery.svg" alt="jQuery"><span>jQuery</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/bitrix.svg" alt="1С-Битрикс"><span>Битрикс</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/opencart.svg" alt="OpenCart"><span>OpenCart</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/shopify.svg" alt="Shopify"><span>Shopify</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/symfony.svg" alt="Symfony"><span>Symfony</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/yii.svg" alt="Yii"><span>Yii</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/go.svg" alt="Go"><span>Go</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/kotlin.svg" alt="Kotlin"><span>Kotlin</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/swift.svg" alt="Swift"><span>Swift</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/modx.svg" alt="MODX"><span>MODX</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/joomla.svg" alt="Joomla"><span>Joomla</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/c++.svg" alt="C++"><span>C++</span></div>
			<div class="marquee-item"><img loading="lazy" src="/img/vector/c--4.svg" alt="C#"><span>C#</span></div>
		</div>
	</div>
	<?php if (!isset($noWave)): ?>
	<div class="wave-divider wave-light" aria-hidden="true">
		<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
	</div>
	<?php endif; ?>
</section>
<script>
(function(){
	var track = document.getElementById('marqueeTrack');
	if (track && !track.hasAttribute('data-cloned')) {
		track.setAttribute('data-cloned', '1');
		track.innerHTML += track.innerHTML;
	}
})();
</script>
