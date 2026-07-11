/* ============================================================
   Bobr Studio — Main JS
   ============================================================ */
(function () {
	'use strict';

	/* ---------- Preloader ---------- */
	(function () {
		var preloader = document.getElementById('preloader');
		if (!preloader) return;
		function hide() {
			preloader.style.opacity = '0';
			preloader.style.visibility = 'hidden';
			preloader.style.pointerEvents = 'none';
		}
		// Показываем анимированный логотип-прелоадер ~1.3s, затем прячем,
		// не дожидаясь полной загрузки всех изображений страницы.
		setTimeout(hide, 1300);
	})();

	/* ---------- Mobile menu ---------- */
	var burger = document.getElementById('burger');
	var nav = document.getElementById('mainNav');

	if (burger && nav) {
		burger.addEventListener('click', function () {
			burger.classList.toggle('active');
			nav.classList.toggle('open');
			document.body.style.overflow = nav.classList.contains('open') ? 'hidden' : '';
		});

		// Dropdown toggles on mobile (click instead of hover)
		nav.querySelectorAll('.has-dropdown > a').forEach(function (toggle) {
			toggle.addEventListener('click', function (e) {
				if (window.innerWidth <= 768) {
					e.preventDefault();
					var parent = toggle.closest('.has-dropdown');
					parent.classList.toggle('open');
				}
			});
		});

		// Close mobile menu only on leaf links (not dropdown parents)
		nav.querySelectorAll('.dropdown a').forEach(function (link) {
			link.addEventListener('click', function () {
				burger.classList.remove('active');
				nav.classList.remove('open');
				document.body.style.overflow = '';
			});
		});
	}

	/* ---------- Header scroll shadow ---------- */
	var header = document.getElementById('header');
	if (header) {
		window.addEventListener('scroll', function () {
			header.classList.toggle('scrolled', window.scrollY > 10);
		});
	}

	/* ---------- Scroll to top ---------- */
	var scrollTop = document.getElementById('scrollTop');
	if (scrollTop) {
		window.addEventListener('scroll', function () {
			scrollTop.classList.toggle('visible', window.scrollY > 500);
		});
		scrollTop.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	}

	/* ============================================================
	   Multi-step Quiz / Brief
	   ============================================================ */
	var quizForm = document.getElementById('quizForm');
	if (quizForm) {
		var pages = quizForm.querySelectorAll('.quiz-page');
		var steps = quizForm.querySelectorAll('#quizSteps li');
		var progressFill = document.getElementById('quizProgressFill');
		var btnPrev = document.getElementById('quizPrev');
		var btnNext = document.getElementById('quizNext');
		var btnSubmit = document.getElementById('quizSubmit');
		var successBlock = document.getElementById('quizSuccess');
		var currentPage = 1;
		var totalPages = pages.length;

		function showPage(pageNum, skipScroll) {
			pages.forEach(function (p) {
				p.classList.remove('active');
			});
			var target = quizForm.querySelector('.quiz-page[data-page="' + pageNum + '"]');
			if (target) target.classList.add('active');

			// Update steps
			steps.forEach(function (s) {
				s.classList.remove('active');
				var stepNum = parseInt(s.getAttribute('data-step'), 10);
				if (stepNum === pageNum) {
					s.classList.add('active');
				} else if (stepNum < pageNum) {
					s.classList.add('done');
				} else {
					s.classList.remove('done');
				}
			});

			// Update progress bar
			var pct = (pageNum / totalPages) * 100;
			progressFill.style.width = pct + '%';

			// Update buttons
			btnPrev.disabled = (pageNum === 1);
			if (pageNum === totalPages) {
				btnNext.classList.add('hidden');
				btnSubmit.classList.remove('hidden');
			} else {
				btnNext.classList.remove('hidden');
				btnSubmit.classList.add('hidden');
			}

			// Scroll to top of form
			if (!skipScroll) {
				var formTop = quizForm.getBoundingClientRect().top + window.scrollY - 120;
				window.scrollTo({ top: formTop, behavior: 'smooth' });
			}
		}

		function validatePage(pageNum) {
			var page = quizForm.querySelector('.quiz-page[data-page="' + pageNum + '"]');
			var valid = true;
			var firstError = null;

			// Required radio groups
			var radioGroups = {};
			page.querySelectorAll('input[type="radio"]').forEach(function (input) {
				radioGroups[input.name] = radioGroups[input.name] || [];
				radioGroups[input.name].push(input);
			});

			Object.keys(radioGroups).forEach(function (name) {
				var checked = radioGroups[name].some(function (i) { return i.checked; });
				if (!checked) {
					valid = false;
					// highlight options
					radioGroups[name].forEach(function (i) {
						i.closest('.quiz-option').style.borderColor = '#e74c3c';
						setTimeout(function () {
							i.closest('.quiz-option').style.borderColor = '';
						}, 2000);
					});
					if (!firstError) firstError = radioGroups[name][0];
				}
			});

			// Required fields (last page)
			page.querySelectorAll('input[required], textarea[required]').forEach(function (field) {
				field.classList.remove('error');
				if (!field.value.trim()) {
					field.classList.add('error');
					valid = false;
					if (!firstError) firstError = field;
				}
			});

			if (!valid && firstError) {
				firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
			}
			return valid;
		}

		btnNext.addEventListener('click', function () {
			if (validatePage(currentPage)) {
				if (currentPage < totalPages) {
					currentPage++;
					showPage(currentPage);
				}
			}
		});

		btnPrev.addEventListener('click', function () {
			if (currentPage > 1) {
				currentPage--;
				showPage(currentPage);
			}
		});

		// Allow clicking on completed steps to go back
		steps.forEach(function (s) {
			s.addEventListener('click', function () {
				var stepNum = parseInt(s.getAttribute('data-step'), 10);
				if (stepNum < currentPage) {
					currentPage = stepNum;
					showPage(currentPage);
				}
			});
		});

		// Form submit
		quizForm.addEventListener('submit', function (e) {
			e.preventDefault();
			if (!validatePage(currentPage)) return;

			// Collect data
			var data = {};
			var formData = new FormData(quizForm);
			formData.forEach(function (value, key) {
				if (data[key]) {
					data[key] = Array.isArray(data[key]) ? data[key] : [data[key]];
					data[key].push(value);
				} else {
					data[key] = value;
				}
			});

			// Send to server
			var xhr = new XMLHttpRequest();
			xhr.open('POST', '/submit_brief.php', true);
			xhr.setRequestHeader('Content-Type', 'application/json');
			xhr.onload = function () {
				if (xhr.status >= 200 && xhr.status < 300) {
					try { var resp = JSON.parse(xhr.responseText); } catch (e) { resp = {}; }
					if (resp.success) {
						quizForm.querySelectorAll('.quiz-progress, .quiz-page, .quiz-nav').forEach(function (el) {
							el.classList.add('hidden');
						});
						successBlock.classList.remove('hidden');
						successBlock.scrollIntoView({ behavior: 'smooth', block: 'center' });
					} else {
						alert('Ошибка: ' + (resp.error || 'попробуйте позже'));
					}
				} else {
					alert('Ошибка сервера. Попробуйте позже.');
				}
			};
			xhr.onerror = function () {
				alert('Ошибка соединения. Проверьте интернет.');
			};
			xhr.send(JSON.stringify(data));
		});

		showPage(1, true);
	}

	// Method switching in brief forms (contact step)
	(function () {
		var qMethods = document.querySelectorAll('.quiz-methods');
		if (!qMethods.length) return;
		var methodConfig = {
			'Телефон':  { label: 'Номер телефона', placeholder: '+7 (___) ___-__-__' },
			'Telegram': { label: 'Ник или телефон в Telegram', placeholder: '@username' },
			'WhatsApp': { label: 'Номер WhatsApp', placeholder: '+7 (___) ___-__-__' },
			'MAX':      { label: 'Ник или телефон в MAX', placeholder: '@username или телефон' }
		};
		document.querySelectorAll('.quiz-method input[type="radio"]').forEach(function (radio) {
			radio.addEventListener('change', function () {
				if (!this.checked) return;
				var cfg = methodConfig[this.value] || methodConfig['Телефон'];
				var form = this.closest('form');
				if (!form) return;
				var label = form.querySelector('#qContactLabel');
				var input = form.querySelector('#qContact');
				if (label) label.textContent = cfg.label;
				if (input) input.placeholder = cfg.placeholder;
			});
		});
	})();

	/* ============================================================
	   Portfolio page logic (if exists)
	   ============================================================ */
	var portfolioFilter = document.getElementById('portfolioFilter');
	var portfolioGrid = document.getElementById('portfolioGrid');
	var loadMoreBtn = document.getElementById('loadMoreBtn');

	if (portfolioGrid) {
		var items = Array.from(portfolioGrid.querySelectorAll('.portfolio-item'));
		var visibleCount = 8;
		var currentFilter = 'all';

		function renderPortfolio() {
			var filtered = items.filter(function (item) {
				return currentFilter === 'all' || item.getAttribute('data-cat') === currentFilter;
			});

			filtered.forEach(function (item, idx) {
				if (idx < visibleCount) {
					item.style.display = '';
					item.classList.add('fade-in');
				} else {
					item.style.display = 'none';
				}
			});

			if (loadMoreBtn) {
				loadMoreBtn.style.display = (filtered.length > visibleCount) ? '' : 'none';
			}
		}

		if (portfolioFilter) {
			portfolioFilter.querySelectorAll('button').forEach(function (btn) {
				btn.addEventListener('click', function () {
					portfolioFilter.querySelectorAll('button').forEach(function (b) {
						b.classList.remove('active');
					});
					btn.classList.add('active');
					currentFilter = btn.getAttribute('data-filter');
					visibleCount = 8;
					renderPortfolio();
				});
			});
		}

		if (loadMoreBtn) {
			loadMoreBtn.addEventListener('click', function () {
				visibleCount += 8;
				renderPortfolio();
			});
		}

		renderPortfolio();
	}

	/* ============================================================
	   Lightbox for portfolio images
	   ============================================================ */
	document.querySelectorAll('.portfolio-item img').forEach(function (img) {
		img.addEventListener('click', function (e) {
			var link = img.closest('.portfolio-item');
			if (link && link.tagName === 'A') return; // it's a link, follow it
			e.preventDefault();
			openLightbox(img.src, img.alt);
		});
	});

	function openLightbox(src, alt) {
		var overlay = document.createElement('div');
		overlay.className = 'lightbox';
		overlay.innerHTML = '<img src="' + src + '" alt="' + (alt || '') + '"><button class="lightbox-close" aria-label="Закрыть">×</button>';
		document.body.appendChild(overlay);
		document.body.style.overflow = 'hidden';
		overlay.addEventListener('click', function () {
			overlay.remove();
			document.body.style.overflow = '';
		});
	}

})();

/* ============================================================
   Lightbox styles (injected)
   ============================================================ */
var lbStyle = document.createElement('style');
lbStyle.textContent =
	'.lightbox{position:fixed;inset:0;background:rgba(0,0,0,0.9);z-index:9999;display:flex;align-items:center;justify-content:center;padding:40px;cursor:pointer;animation:fadeSlide .3s ease}' +
	'.lightbox img{max-width:90%;max-height:90vh;border-radius:8px;box-shadow:0 0 40px rgba(0,0,0,0.5)}' +
	'.lightbox-close{position:absolute;top:20px;right:30px;width:50px;height:50px;border-radius:50%;background:#8f4f23;color:#fff;border:none;font-size:30px;cursor:pointer;display:flex;align-items:center;justify-content:center}' +
	'.lightbox-close:hover{background:#71391a}' +
	'.fade-in{animation:fadeSlide .4s ease}';
document.head.appendChild(lbStyle);

/* ============================================================
   Contact form (contacts.html)
   ============================================================ */
var contactForm = document.getElementById('contactForm');
if (contactForm) {
	contactForm.addEventListener('submit', function (e) {
		e.preventDefault();
		var data = new FormData(contactForm);
		var xhr = new XMLHttpRequest();
		xhr.open('POST', '/submit_contact.php', true);
		xhr.onload = function () {
			if (xhr.status >= 200 && xhr.status < 300) {
				contactForm.innerHTML = '<div class="quiz-success" style="display:block"><img src="/img/svg/like.svg" alt="" style="width:60px;margin:0 auto 15px"><h3 style="color:#8f4f23">Спасибо!</h3><p>Ваше сообщение отправлено. Мы свяжемся с вами в ближайшее время.</p></div>';
			} else {
				alert('Ошибка сервера. Попробуйте позже.');
			}
		};
		xhr.onerror = function () {
			alert('Ошибка соединения.');
		};
		xhr.send(data);
	});
}

/* ============================================================
   Main brief form (index.php) - conditional sections
   ============================================================ */
var mainBriefForm = document.getElementById('mainBriefForm');
if (mainBriefForm) {
	var mSteps = document.getElementById('mainQuizSteps');
	var mFill = document.getElementById('mainQuizProgressFill');
	var mProgress = document.getElementById('mainQuizProgress');
	var mNav = mainBriefForm.querySelector('.quiz-nav');
	var mPrev = document.getElementById('mainQuizPrev');
	var mNext = document.getElementById('mainQuizNext');
	var mSubmit = document.getElementById('mainQuizSubmit');
	var mSuccess = document.getElementById('mainBriefSuccess');
	var mAllPages = Array.from(mainBriefForm.querySelectorAll('.quiz-page'));
	var mServicePage = mainBriefForm.querySelector('.quiz-page[data-page="service"]');
	var mContactsPage = mainBriefForm.querySelector('.quiz-page[data-page="contacts"]');
	var mSequence = [];
	var mIndex = 0;

	function mGetService() {
		var r = mainBriefForm.querySelector('input[name="service"]:checked');
		return r ? r.value : '';
	}

	function mGetSiteType() {
		var r = mainBriefForm.querySelector('input[name="site_type"]:checked');
		return r ? r.value : '';
	}

	function mBuildSequence() {
		var service = mGetService();
		mSequence = [mServicePage];
		if (service) {
			if (service === 'Сайт') {
				var stPage = mainBriefForm.querySelector('.quiz-page[data-page="site_type"]');
				if (stPage) mSequence.push(stPage);
				var siteType = mGetSiteType();
				if (siteType) {
					mAllPages.forEach(function(p) {
						if (p.getAttribute('data-flow') === siteType) mSequence.push(p);
					});
				}
			} else {
				var flow = service;
				if (flow) {
					mAllPages.forEach(function(p) {
						if (p.getAttribute('data-flow') === flow) mSequence.push(p);
					});
				}
			}
			mSequence.push(mContactsPage);
		}
		if (mIndex > mSequence.length - 1) mIndex = mSequence.length - 1;
	}

	function mCollectData() {
		var data = {};
		mSequence.forEach(function(page) {
			page.querySelectorAll('input, textarea, select').forEach(function(el) {
				if (!el.name) return;
				if ((el.type === 'radio' || el.type === 'checkbox') && !el.checked) return;
				var v = el.value;
				if (el.type !== 'radio' && el.type !== 'checkbox' && v.trim() === '') return;
				if (data[el.name] !== undefined) {
					data[el.name] = Array.isArray(data[el.name]) ? data[el.name] : [data[el.name]];
					data[el.name].push(v);
				} else {
					data[el.name] = v;
				}
			});
		});
		return data;
	}

	function mRenderSteps() {
		mSteps.innerHTML = '';
		mSequence.forEach(function(p, i) {
			var li = document.createElement('li');
			li.setAttribute('data-step', i + 1);
			li.innerHTML = '<span class="step-num">' + (i + 1) + '</span><span class="step-label">' + (p.getAttribute('data-label') || '') + '</span>';
			if (i === mIndex) li.classList.add('active');
			else if (i < mIndex) li.classList.add('done');
			li.addEventListener('click', function() {
				if (i < mIndex) { mIndex = i; mRefresh(true); }
			});
			mSteps.appendChild(li);
		});
	}

	function mRefresh(scroll) {
		mAllPages.forEach(function(p) { p.classList.remove('active'); });
		var page = mSequence[mIndex];
		if (page) page.classList.add('active');
		mRenderSteps();
		var total = mSequence.length;
		mFill.style.width = (((mIndex + 1) / total) * 100) + '%';
		mPrev.disabled = (mIndex === 0);
		var isLast = (mIndex === total - 1) && total > 1;
		mNext.classList.toggle('hidden', isLast);
		mSubmit.classList.toggle('hidden', !isLast);
		if (scroll) {
			var top = mainBriefForm.getBoundingClientRect().top + window.scrollY - 120;
			window.scrollTo({ top: top, behavior: 'smooth' });
		}
	}

	function mValidate() {
		var page = mSequence[mIndex];
		if (!page) return true;
		var valid = true;
		var firstError = null;

		var radioGroups = {};
		page.querySelectorAll('input[type="radio"]').forEach(function(input) {
			radioGroups[input.name] = radioGroups[input.name] || [];
			radioGroups[input.name].push(input);
		});
		Object.keys(radioGroups).forEach(function(name) {
			var checked = radioGroups[name].some(function(i) { return i.checked; });
			if (!checked) {
				valid = false;
				radioGroups[name].forEach(function(i) {
					i.closest('.quiz-option').style.borderColor = '#e74c3c';
					setTimeout(function() { i.closest('.quiz-option').style.borderColor = ''; }, 2000);
				});
				if (!firstError) firstError = radioGroups[name][0];
			}
		});

		page.querySelectorAll('input[required], textarea[required]').forEach(function(field) {
			field.classList.remove('error');
			if (!field.value.trim()) {
				field.classList.add('error');
				valid = false;
				if (!firstError) firstError = field;
			}
		});

		if (!valid && firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
		return valid;
	}

	mainBriefForm.querySelectorAll('input[name="service"]').forEach(function(radio) {
		radio.addEventListener('change', function() { mBuildSequence(); mRefresh(false); });
	});

	mainBriefForm.querySelectorAll('input[name="site_type"]').forEach(function(radio) {
		radio.addEventListener('change', function() { mBuildSequence(); mRefresh(false); });
	});

	mNext.addEventListener('click', function() {
		if (!mValidate()) return;
		if (mIndex < mSequence.length - 1) { mIndex++; mRefresh(true); }
	});

	mPrev.addEventListener('click', function() {
		if (mIndex > 0) { mIndex--; mRefresh(true); }
	});

	mainBriefForm.addEventListener('submit', function(e) {
		e.preventDefault();
		if (!mValidate()) return;

		var data = mCollectData();
		data.brief_type = 'main';

		var xhr = new XMLHttpRequest();
		xhr.open('POST', '/submit_brief.php', true);
		xhr.setRequestHeader('Content-Type', 'application/json');
		xhr.onload = function() {
			if (xhr.status >= 200 && xhr.status < 300) {
				mAllPages.forEach(function(p) { p.classList.add('hidden'); p.classList.remove('active'); });
				if (mProgress) mProgress.classList.add('hidden');
				if (mNav) mNav.classList.add('hidden');
				mSuccess.classList.remove('hidden');
				mSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
			} else {
				alert('Ошибка сервера. Попробуйте позже.');
			}
		};
		xhr.onerror = function() { alert('Ошибка соединения.'); };
		xhr.send(JSON.stringify(data));
	});

	mBuildSequence();
	mRefresh(false);
}

/* ============================================================
   Custom cursor
   ============================================================ */
(function () {
	if (!window.matchMedia || !window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;
	var dot = document.getElementById('cursorDot');
	var ring = document.getElementById('cursorRing');
	if (!dot || !ring) return;

	document.body.classList.add('has-custom-cursor');

	var mx = window.innerWidth / 2, my = window.innerHeight / 2;
	var rx = mx, ry = my;
	var hoverSel = 'a, button, label, input, textarea, .quiz-option, .filter-btn, .service-card, .portfolio-item, .btn, [role="button"]';

	document.addEventListener('mousemove', function (e) {
		mx = e.clientX;
		my = e.clientY;
		dot.style.left = mx + 'px';
		dot.style.top = my + 'px';
	});

	(function loop() {
		rx += (mx - rx) * 0.18;
		ry += (my - ry) * 0.18;
		ring.style.left = rx + 'px';
		ring.style.top = ry + 'px';
		requestAnimationFrame(loop);
	})();

	function setHover(on) {
		dot.classList.toggle('is-hover', on);
		ring.classList.toggle('is-hover', on);
	}

	document.addEventListener('mouseover', function (e) {
		if (e.target.closest && e.target.closest(hoverSel)) setHover(true);
	});
	document.addEventListener('mouseout', function (e) {
		if (!e.target.closest || !e.target.closest(hoverSel)) return;
		var to = e.relatedTarget;
		if (to && to.closest && to.closest(hoverSel)) return;
		setHover(false);
	});

	document.addEventListener('mousedown', function () { ring.classList.add('is-click'); });
	document.addEventListener('mouseup', function () { ring.classList.remove('is-click'); });

	document.addEventListener('mouseleave', function () { dot.style.opacity = '0'; ring.style.opacity = '0'; });
	document.addEventListener('mouseenter', function () { dot.style.opacity = ''; ring.style.opacity = ''; });
})();

/* ============================================================
   Hero flying particles
   ============================================================ */
(function () {
	var canvas = document.getElementById('heroParticles');
	if (!canvas || !canvas.getContext) return;

	var ctx = canvas.getContext('2d');
	var hero = canvas.parentElement;
	var W = 0, H = 0;
	var particles = [];
	var mouse = { x: null, y: null };
	var LINK_DIST = 110;
	var MOUSE_DIST = 130;

	function rand(a, b) { return Math.random() * (b - a) + a; }

	function resize() {
		W = canvas.width = hero.offsetWidth;
		H = canvas.height = hero.offsetHeight;
	}

	function init() {
		particles = [];
		var count = Math.max(28, Math.min(90, Math.round(W / 18)));
		for (var i = 0; i < count; i++) {
			particles.push({
				x: rand(0, W), y: rand(0, H),
				vx: rand(-0.4, 0.4), vy: rand(-0.4, 0.4),
				r: rand(1.5, 3.5)
			});
		}
	}

	function step() {
		ctx.clearRect(0, 0, W, H);

		for (var i = 0; i < particles.length; i++) {
			var p = particles[i];
			p.x += p.vx;
			p.y += p.vy;
			if (p.x < 0 || p.x > W) p.vx *= -1;
			if (p.y < 0 || p.y > H) p.vy *= -1;
			p.x = Math.max(0, Math.min(W, p.x));
			p.y = Math.max(0, Math.min(H, p.y));

			if (mouse.x !== null) {
				var dx = p.x - mouse.x, dy = p.y - mouse.y;
				var dist = Math.sqrt(dx * dx + dy * dy);
				if (dist < MOUSE_DIST && dist > 0) {
					var force = (MOUSE_DIST - dist) / MOUSE_DIST;
					p.x += (dx / dist) * force * 3;
					p.y += (dy / dist) * force * 3;
				}
			}

			ctx.beginPath();
			ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
			ctx.fillStyle = 'rgba(143, 79, 35, 0.55)';
			ctx.fill();
		}

		for (var a = 0; a < particles.length; a++) {
			for (var b = a + 1; b < particles.length; b++) {
				var pa = particles[a], pb = particles[b];
				var ddx = pa.x - pb.x, ddy = pa.y - pb.y;
				var d = Math.sqrt(ddx * ddx + ddy * ddy);
				if (d < LINK_DIST) {
					ctx.beginPath();
					ctx.moveTo(pa.x, pa.y);
					ctx.lineTo(pb.x, pb.y);
					ctx.strokeStyle = 'rgba(143, 79, 35, ' + (0.18 * (1 - d / LINK_DIST)) + ')';
					ctx.lineWidth = 1;
					ctx.stroke();
				}
			}
		}

		requestAnimationFrame(step);
	}

	hero.addEventListener('mousemove', function (e) {
		var rect = canvas.getBoundingClientRect();
		mouse.x = e.clientX - rect.left;
		mouse.y = e.clientY - rect.top;
	});
	hero.addEventListener('mouseleave', function () { mouse.x = null; mouse.y = null; });

	function build() {
		var pw = W, ph = H;
		resize();
		if (W !== pw || H !== ph || !particles.length) init();
	}

	var rt;
	window.addEventListener('resize', function () {
		clearTimeout(rt);
		rt = setTimeout(build, 150);
	});

	// Пересобираем, когда hero получает финальный размер (после загрузки картинки/шрифтов)
	window.addEventListener('load', build);
	if (typeof ResizeObserver !== 'undefined') {
		new ResizeObserver(function () {
			clearTimeout(rt);
			rt = setTimeout(build, 100);
		}).observe(hero);
	}

	resize();
	init();
	step();
})();

/* ============================================================
   FAQ accordion
   ============================================================ */
(function () {
	var items = document.querySelectorAll('.faq-item');
	if (!items.length) return;
	items.forEach(function (item) {
		var q = item.querySelector('.faq-question');
		if (!q) return;
		q.addEventListener('click', function () {
			var isOpen = item.classList.contains('open');
			items.forEach(function (el) { el.classList.remove('open'); });
			if (!isOpen) item.classList.add('open');
		});
	});
})();

/* ============================================================
   Tariff modal (popup for price plans)
   ============================================================ */
(function () {
	var modal = document.getElementById('tariffModal');
	if (!modal) return;

	var form = document.getElementById('tariffForm');
	var planEl = document.getElementById('tariffModalPlan');
	var priceEl = document.getElementById('tariffModalPrice');
	var tariffField = document.getElementById('tariffField');
	var priceField = document.getElementById('tariffPriceField');
	var contactInput = document.getElementById('tariffContact');
	var contactLabel = document.getElementById('tariffContactLabel');
	var successBlock = document.getElementById('tariffSuccess');
	var submitBtn = form ? form.querySelector('.tariff-submit') : null;
	var lastFocused = null;

	var methodConfig = {
		'Телефон':  { label: 'Номер телефона', placeholder: '+7 (___) ___-__-__' },
		'Telegram': { label: 'Ник или телефон в Telegram', placeholder: '@username' },
		'WhatsApp': { label: 'Номер WhatsApp', placeholder: '+7 (___) ___-__-__' },
		'MAX':      { label: 'Ник или телефон в MAX', placeholder: '@username или телефон' }
	};

	function getMethod() {
		var checked = form.querySelector('input[name="method"]:checked');
		return checked ? checked.value : 'Телефон';
	}

	function applyMethod() {
		var cfg = methodConfig[getMethod()] || methodConfig['Телефон'];
		if (contactLabel) contactLabel.textContent = cfg.label;
		if (contactInput) contactInput.placeholder = cfg.placeholder;
	}

	function openModal(tariff, price) {
		if (successBlock) successBlock.classList.add('hidden');
		if (form) {
			form.querySelectorAll('.tariff-field, .tariff-submit, .tariff-consent').forEach(function (el) {
				el.classList.remove('hidden');
			});
		}
		if (planEl) planEl.textContent = tariff || '—';
		if (priceEl) priceEl.textContent = price ? '(' + price + ')' : '';
		if (tariffField) tariffField.value = tariff || '';
		if (priceField) priceField.value = price || '';
		applyMethod();
		lastFocused = document.activeElement;
		modal.classList.add('open');
		modal.setAttribute('aria-hidden', 'false');
		document.body.style.overflow = 'hidden';
		var nameInput = document.getElementById('tariffName');
		if (nameInput) setTimeout(function () { nameInput.focus(); }, 100);
	}

	function closeModal() {
		modal.classList.remove('open');
		modal.setAttribute('aria-hidden', 'true');
		document.body.style.overflow = '';
		if (lastFocused && lastFocused.focus) lastFocused.focus();
	}

	// Wire up all price-plan buttons across sites pages
	document.querySelectorAll('.price-grid .price-card .btn').forEach(function (btn) {
		btn.addEventListener('click', function (e) {
			e.preventDefault();
			var card = btn.closest('.price-card');
			var titleEl = card ? card.querySelector('.price-card-title, .price-plan') : null;
			var priceValEl = card ? card.querySelector('.price-value') : null;
			var tariff = titleEl ? titleEl.textContent.trim() : '';
			var price = priceValEl ? priceValEl.textContent.replace(/\s+/g, ' ').trim() : '';
			openModal(tariff, price);
		});
	});

	modal.querySelectorAll('[data-tariff-close]').forEach(function (el) {
		el.addEventListener('click', closeModal);
	});
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
	});

	form.addEventListener('change', function (e) {
		if (e.target && e.target.name === 'method') applyMethod();
	});

	form.addEventListener('submit', function (e) {
		e.preventDefault();
		var name = (document.getElementById('tariffName').value || '').trim();
		var contact = (contactInput.value || '').trim();
		if (!name || !contact) {
			if (!name) document.getElementById('tariffName').focus();
			else contactInput.focus();
			return;
		}

		var method = getMethod();
		var tariff = tariffField.value;
		var price = priceField.value;
		var page = form.querySelector('input[name="page"]').value;
		var pageUrl = form.querySelector('input[name="page_url"]').value;

		var message = 'Заявка на тариф «' + tariff + '»' + (price ? ' ' + price : '') +
			'. Страница: ' + page + ' (' + pageUrl + ')' +
			'. Способ связи: ' + method + ' — ' + contact;

		var payload = new FormData();
		payload.append('name', name);
		payload.append('phone', contact);
		payload.append('message', message);

		if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Отправляем...'; }

		var xhr = new XMLHttpRequest();
		xhr.open('POST', '/submit_contact.php', true);
		xhr.onload = function () {
			if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = 'Отправить заявку'; }
			var resp = {};
			try { resp = JSON.parse(xhr.responseText); } catch (err) {}
			if (xhr.status >= 200 && xhr.status < 300 && resp.success) {
				form.querySelectorAll('.tariff-field, .tariff-submit, .tariff-consent').forEach(function (el) {
					el.classList.add('hidden');
				});
				if (successBlock) successBlock.classList.remove('hidden');
				form.reset();
				setTimeout(closeModal, 2600);
			} else {
				alert('Ошибка: ' + (resp.error || 'попробуйте позже'));
			}
		};
		xhr.onerror = function () {
			if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = 'Отправить заявку'; }
			alert('Ошибка сети. Попробуйте позже.');
		};
		xhr.send(payload);
	});
})();
