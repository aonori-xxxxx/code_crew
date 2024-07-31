// モバイルメニュー時のバーガーメニュー
$(function () {
  $(".mobile-menu__btn").on('click', function () {
    if ($(this).hasClass('show')) {
      $(".mobile-menu,.mobile-menu__btn").removeClass('show');
    } else {
      $(".mobile-menu,.mobile-menu__btn").addClass('show');
    };
  });
});

// モバイルメニューのサブメニューを表示させる。
$(function () {
  $(".menu-item").on("click", function () {
    $(this).children(".sub-menu").slideToggle();
  });
});



// 検索時のメニュー非表示
$(function () {
  $(".search-icon").on('click', function () {
    if ($(this).hasClass('invisible')) {
      $(".search-icon,.header-sub-menu").removeClass('invisible');
    } else {
      $(".search-icon,.header-sub-menu").addClass('invisible');
    };
  });
});

// 検索時のメニュー表示
$(function () {
  $(".search-icon").on('click', function () {
    if ($(this).hasClass('visible')) {
      $(".search-input,.search__btn").removeClass('visible');
    } else {
      $(".search-input,.search__btn").addClass('visible');
    };
  });
});

$(function () {
  $(".search__btn").on('click', function () {
    if ($(this).hasClass('visible')) {
      $(".search__btn,.search-input").removeClass('visible');
      $(".search-icon,.header-nav__menu").removeClass('invisible');

    } else {
      $("search__btn.visible,.search-input").addClass('visible');
      $(".search-icon,.header-nav__menu").addClass('invisible');

    };
  });

});


// 検索時のメニュー表示モバイル
$(function () {
  $(".search-icon__mobile").on('click', function () {
    if ($(this).hasClass('invisible')) {
      $(".search-icon__mobile").removeClass('invisible');
      $(".search-mobile-box").removeClass('visible');
    } else {
      $(".search-icon__mobile").addClass('invisible');
      $(".search-mobile-box").addClass('visible');
    };
  });

});



// タブメニュー
$(function () {
  $('.sample-tab-navigation__item ').on('click', function () {
    $(".active").removeClass("active")
    let index = $('.sample-tab-navigation__item').index($(this));
    $('.sample-tab-navigation__item ').eq(index).addClass('active');
  })
});


$(function () {
  $('.sample-tab-navigation-menu__list').on('click', function () {
    $(".menu-active").removeClass("menu-active");
    $(".content-active").removeClass("content-active");
    let index = $('.sample-tab-navigation-menu__list').index($(this));

    $('.sample-tab-navigation-menu__list').eq(index).addClass('menu-active');
    $('.sample-tab-navigation-menu__content').eq(index).addClass('content-active');
  })
});


$(function () {
  $('.sample-tab-menu-list').on('click', function () {
    $(".sample-tab-menu-list").removeClass("is-active");
    $(".sample-tab-navigation-list").removeClass("is-active");
    let index = $('.sample-tab-menu-list').index($(this));
    console.log(index)
    $('.sample-tab-menu-list').eq(index).addClass('is-active');
    $('.sample-tab-navigation-list').eq(index).addClass('is-active');

  })
});


// スライダー 自動スクロール
const swiper = new Swiper('.swiper', {
  centeredSlides: true,
  loop: true,
  effect: 'coverflow',
  slidesPerView: 2, // 一度に表示する枚数
  speed: 8000, // ループの時間
  allowTouchMove: false, // スワイプ無効
  autoplay: {
    delay: 0, // 途切れなくループ
  },

});


// 文字分割画面読み込み時
document.addEventListener('DOMContentLoaded', function () {
  const els = document.querySelectorAll(".animate-char");
  const cb = function (entries, observer) {

    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const ta = new CharAnimation(entry.target)
        console.log(entries)
        console.log(entry)
        ta.toggle()
        observer.unobserve(entry.target);
      } else {
      }

    });
  }

  const io = new IntersectionObserver(cb);
  els.forEach(el => io.observe(el));

});

// 文字分割のクラス
class CharAnimation {

  constructor(el) {
    this.DOM = {};
    if (el instanceof HTMLElement) {
      this.DOM.el = el;
    } else {
      this.el = document.querySelector(el);
    }
    this.chars = this.DOM.el.innerHTML.trim().split("");
    this.DOM.el.innerHTML = this._splitText();

  }
  _splitText() {
    let concatStr = "";
    for (let c of this.chars) {
      c = c.replace(/\s+/, '&nbsp;');
      concatStr += `<span class="char">${c}</span>`;
    }
    return concatStr
  }
  toggle() {
    this.DOM.el.classList.toggle('inview')
  }
}



// 画像

document.addEventListener('DOMContentLoaded', function () {
  const els = document.querySelectorAll(".slide-cover")
  const cb = function (entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        console.log(entry)
        entry.target.classList.add("inview")
      } else {
        console.log('outview')
      }
    });
  }
  const io = new IntersectionObserver(cb);
  els.forEach(el => io.observe(el));
});