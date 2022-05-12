<?php
/*
Template name: Протез
Template post type: services
*/
?>
<?php get_template_part('template-parts/header/header'); ?>
  <main>
    <section class="page-banner">
      <div class="container">
        <div class="page-banner__wrap">
          <div class="page-banner__text">
            <h1><?php the_title() ?></h1>
            <?php if (get_field('is-sale')): ?>
              <div class="page-banner__sale">
                <?php the_field('sale'); ?>
              </div>
            <?php endif; ?>
            <div class="page-banner__desc"><?php the_content(); ?></div>
            <div class="page-banner__buttonrow">
              <div class="button button-blue open-callback" data-title="Страница <?php the_title() ?>">Записаться на
                прием
              </div>
            </div>
          </div>
        </div>
        <div class="banner__box-wrap tabletG-and-more">
          <div class="banner__box">
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#banner-1"></use>
              </svg>
              <div class="banner__box-desc">Высококвалифицированные врачи решают ваши проблемы с зубами уже более 5
                лет
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#banner-2"></use>
              </svg>
              <div class="banner__box-desc">В работе используется только лучшее оборудование и высококлассные
                материалы
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#banner-3"></use>
              </svg>
              <div class="banner__box-desc">Расположение рядом с метро - Вы всегда можете добраться без пробок и потери
                времени
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="services-detailed__wrap">
        <div class="services-detailed__text">
          <h2>Несъемное зубное<br>протезирование: Коронки</h2>
          <div class="services-detailed__text-desc">
            <p>Зубная коронка — это несъемный зубной протез в виде одиночного элемента, своего рода «колпачка»,
              который по слепкам изготавливается в зуботехнической лаборатории, а затем крепится на зуб. Таким образом
              замещается коронковая, или видимая часть зуба в случае, если она сильно повреждена, отсутствует или
              имеет серьезный эстетический дефект.</p>
            <p>Вопрос об установке коронки, как правило, встает, если коронковая часть зуба разрушена более чем на
              70%. В этом случае пломбирование не лучший вариант, поскольку это не обеспечивает оптимального
              перераспределния жевательной нагрузки. Это грозит тем, что в дальнейшем неправилное давление на зуб
              приводит к расколу и последующему удалению. Именно поэтому, в слуае значительного разрушения коронки
              зуба, рекомендуется устанавливать зубную коронку.</p>
          </div>
        </div>
        <div class="services-detailed__aside">
          <div class="burning__box">
            <h4>В каких случаях необходимо устанавливать коронку?</h4>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>В случае разрушения более 50% зуба</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Для корректировки цвета или формы зуба, в случаях, если другие методы неэффективны</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>При переломе зуба</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Когда пломбирование невозможно по медицинским показаниям</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h2>Виды коронок</h2>
            <div class="services-detailed__text-desc">
              Клиника “Флагманстом” предлагает множество вариантов коронок. Основным отличием между ними является
              материал изготовления. Именно от этого параметра в наибольшей степени зависят качество, стоимость,
              показания к применению той или иной коронки и, безусловно, эстетика.
            </div>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/protez1.png"
                                                            alt="Виды коронок"></div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h4>Металлокерамическая коронка</h4>
            <p>
              Самые распространенные изделия, которые состоят из металлического каркаса и керамической облицовки.
              Сначала отливается каркас, затем происходит нанесение слоя керамики, возможно изготовление с помощью
              компьютерного моделирования.
            <ul class="pros">
              <li>Срок службы металлокерамиеской коронки при должном уходе достигает 10 лет</li>
              <li>Высокие эстетические качества блягодаря керамическому покрытию</li>
              <li>Приемлемое сочетание цены и качества делают этот вариант коронок одним из самых популярных среди
                пациентов
              </li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/protez2.jpg"
                                                            alt="Металлокерамическая коронка"></div>
        </div>
      </div>
      <div class="container container_small">
        <div class="warning">Важным недостатком металлокерамической коронки является обточка большого объема тканей
          зуба для установки и, как следствие, необходимость удаления нерва в зубе, сокращая срок жизни корней.
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h4>Коронка из диоксида циркония</h4>
            <p>
              Коронки из диоксида циркония относятся к безметалловым конструкциям – одному из видов керамики. Цирконий
              – это серебристый сероватый металл, который получают из природного минерала циркона.
              В стоматологии сегодня для восстановления зубного ряда широко применяются именно безметалловые
              конструкции. А модели из циркония или диоксида циркония пользуются особой популярностью. Материал
              получают из природного минерала путем стабилизации иттрием и обогащения алюминием. Полученный диоксид
              циркония имеет очень высокую прочность, умеренную прозрачность и белый цвет без блеска.</p>
            <ul class="pros">
              <li>Срок службы коронки из диоксида циркония от 15 до 20 лет, что делает ее более выгодной в
                долгосрочной перспективе
              </li>
              <li>Благодаря прочности конструкции их можно сделать с очень тонкими стенками, что позволяет минимально
                обтачивать эмаль и не удалять нерв
              </li>
              <li>Идеальное прилегание - зуб выглядит и ощущается как свой</li>
              <li>Материал подходит для чувствительных людей, поскольку не вызывает аллергии</li>
              <li>Покрывается керамическим слоем, для придания естественной прозрачности эмали зуба</li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/protez3.jpg"
                                                            alt="Коронка из диоксида циркония"></div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h4>Керамическая коронка из материалов E-max</h4>
            <p>
              На сегодняшний день керамические зубные коронки — это наиболее эстетичные ортопедические конструкции,
              устанавливаемые как в зоне улыбки, так и на жевательных зубах. Керамика обладает биологической
              инертностью и индифферентностью, не воспринимается организмом как нечто чужеродное, не впитывает в себя
              посторонних запахов, пигментов и бактерий, не выделяет вредных веществ, а также является очень прочной.
              Качественно изготовленные протезы невозможно отличить от естественных зубов.</p>
            <ul class="pros">
              <li>Керамические коронки обладают самыми лучшими показателями эстетики, Что делает их отличным
                варирантом для протезирования передних зубов
              </li>
              <li>Керамические коронки при соблюдении гигиены служат десятки лет
              </li>
              <li>Зубной налет меньше прилипает к керамике по сравнению с другими зуботехническими материалами</li>
              <li>Имеет стабильный цвет и не окрашивается со временем</li>
              <li>Безметалловые коронки тонкие, что уменьшает нагрузку на зуб, при протезировании меньше стачивается
                твердых тканей и не травмируется десна
              </li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/protez4.jpg"
                                                            alt="Керамическая коронка из материалов E-max"></div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/cite'); ?>
    <div class="block">
      <div class="container container_big">
        <div class="help">
          <div class="help__text">
            <h2>Необходима помощь специалиста при решении?</h2>
            <div class="help__desc">Наши врачи проконсультируют Вас по вопросам протезирования и подберут с Вами
              подходящий вариант
            </div>
          </div>
          <div class="help__button button button-blue open-callback" data-title="Страница: Протезирование">записаться
            на прием
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <h2>Отзывы пациентов после протезирования<br>зубов в клинике “Флагманстом”</h2>
        <?php get_template_part('template-parts/rating'); ?>
      </div>
    </div>
    <div class="services-detailed__reviews">
      <div class="container">
        <div class="services-detailed__reviews-wrap">
          <?php global $post;
          $myposts = get_posts([
              'posts_per_page' => 4,
              'post_type' => 'reviews',
          ]);
          foreach ($myposts as $post) {
            setup_postdata($post);
            ?>
            <div class="reviews__item">
              <p class="reviews__item-content"><?php the_content(); ?></p>
              <div class="reviews__item-row">
                <a href="<?php the_field('review-link'); ?>" target="_blank"
                   class="reviews__item-platform reviews__item-text"><?php the_field('platform'); ?></a>
                <div class="reviews__item-name reviews__item-text"><?php the_title(); ?></div>
                <div class="reviews__item-date reviews__item-text"><?php echo get_the_date('d.m.Y'); ?></div>
                <div class="reviews__item-rating">
                  <i></i><i></i><i></i><i></i><i></i>
                </div>
              </div>
            </div>
            <?php
          }
          wp_reset_postdata();
          ?>
        </div>
        <a href="<?php echo get_post_type_archive_link('reviews') ?>" class="reviews__more button button-white">
          <span>Посмотреть отзывы</span>
          <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
        </a>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__wrap">
          <div class="services-detailed__text">
            <h2>Виды съемного протезировании</h2>
            <div class="services-detailed__text-desc">
              <p>Протезирование зубов весьма дорогое удовольствие, если речь идет о несъемных протезах или имплантах.
                Однако, съемные протезы доступны для всех категорий граждан, и в особенности для пожилых людей,
                которые желают получить качественные образцы за умеренную плату.</p>
            </div>
            <h4>Преимущества съёмного протезирования</h4>
            <ul class="pros">
              <li>Возможность восстановления функциональности зубного ряда, даже при полностью оголенных деснах</li>
              <li>Протезы подходят для людей с любыми индивидуальными особенностями строения челюстей</li>
              <li>Короткий период адаптации и подходят пациентам всех возрастов</li>
              <li>Простота в уходе</li>
            </ul>
          </div>
          <div class="services-detailed__aside">
            <div class="burning__box">
              <h4>В каких случаях преимущественно съемное протезирование?</h4>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p>В случае хронических заболеваний мягких тканей (пародонтит и пародонтоз)</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Более бюджетный вариант восстановления улыбки и жевательной функции</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p>При переломе зуба</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h2>Бюгельный протез на металлической дуге с кламмерами</h2>
            <div class="services-detailed__text-desc">
              <p>
                Бюгельное протезирование зубов — широко применяемый метод лечения в ортопедической стоматологии.
                Предназначено для восстановления зубов как на нижней, так и на верхней челюсти. Само название
                происходит
                от немецкого «bugel», что в переводе означает «дуга», то есть бюгельные — это дословно «имеющие дугу».
                В
                конструкции бюгельных зубных протезов есть металлическая или пластмассовая дуга, искусственные зубы,
                которые крепятся к базису, имитирующему десну, и фиксирующие элементы в виде крючков, замочков или
                коронок.</p>
            </div>
            <h4>Преимущества бюггельного протеза</h4>
            <ul class="pros">
              <li>Минимальное время адаптации к протезу, в сравнении с другими видами съемного протезирования</li>
              <li>Малый размер зубных протезов, обеспечивающий более комфортное ношение</li>
              <li>Долговечность протеза из-за надежного основания</li>
              <li>Они не снижают вкусовые, температурные и тактильные ощущения и не влияют на артикуляцию и дикцию
              </li>
              <li>Укрепление оставшихся зубов и протеза в одну сплошную систему</li>
              <li>Отличные эстетические качества - улыбка выглядит естественно и протез остается незаметным</li>
              <li>Легкая повседневная гигиена протеза, не требующая много времени</li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/protez2.jpg"
                                                            alt="Бюгельный протез на металлической дуге с кламмерами">
          </div>
        </div>
      </div>
      <div class="container container_small">
        <div class="warning">Все виды съемных протезов активно используются как временный вариант, но при постоянном
          ношении любой съемный протез обладает рядом недостатков - неизбежна постепенная убыль костной ткани под
          протезом.
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h2>Силиконовые или нейлоновые протезы</h2>
            <div class="services-detailed__text-desc">
              <p>
                К категории силиконовых протезов относятся мягкие ортодонтические устройства для частичного съемного
                протезирования. Они имеют полупрозрачную эластичную основу, полностью имитируют слизистую полости рта
                и форму челюсти. Данный вид протезов имеет повышенную гибкость, мягкость и эластичность. Для более
                полного понимания требуется оговориться, что структура силиконовых конструкций занимает только основу
                протеза. Искусственные зубы изготавливаются из высококачественной полимерной пластмассы, а фиксирующие
                элементы обычно изготавливаются из сплавов нержавеющих или драгоценных металлов.</p>
            </div>
            <h4>Преимущества силиконовых протезов</h4>
            <ul class="pros">
              <li>Трудно отличить их от естественных зубов; они не видны во время разговора. Их также называют
                «невидимыми» зубными протезами
              </li>
              <li>Надежная фиксация протеза, следовательно, нет необходимости использовать дополнительные материалы
                для закрепления — гели, кремы, клей для зубных протезов
              </li>
              <li>Гипоаллергенность</li>
              <li>Гибкость и легкость материала протеза сокращает период адаптации</li>
              <li>Могут использоваться до 8лет</li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/protez6.jpg"
                                                            alt="Силиконовые или нейлоновые протезы"></div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h2>Протезы на присосках</h2>
            <div class="services-detailed__text-desc">
              <p>
                Это съемная ортопедическая конструкция, которая крепится на слизистую, присасываясь к небу. На
                сегодняшний день это самый бюджетный и доступный метод восстановления целостности зубного ряда.
                При производстве используются передовые технологии, дающие возможность создать натуральную и
                комфортную для человека вставку. При длительной носке и верной подгонке она практически не ощущается
                во рту.
              </p>
            </div>
            <h4>Преимущества силиконовых протезов</h4>
            <ul class="pros">
              <li>Доступная цена</li>
              <li>Не требует обточки имеющихся зубов</li>
              <li>Подходят для решения дефектов, которые невозможно решить мостовидными протезами</li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/protez7.jpg"
                                                            alt="Протезы на присосках"></div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="protez__info">
          <div class="protez__info-text">
            <h2>Отсутсвуют все зубы?</h2>
            <div class="protez__info-desc">лучшим и более выгодным решением при отсутствии всех зубов является
              имплантация <span class="bold">“Всё на 4”</span></div>
          </div>
          <a href="#" class="protez__info-link button button-white">
            <span>подробнее</span>
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/prices'); ?>
    <div class="block">
      <div class="container container_big">
        <div class="help">
          <div class="help__text">
            <h2>Необходима помощь специалиста при решении?</h2>
            <div class="help__desc">Наши врачи проконсультируют Вас по вопросам протезирования и подберут с Вами
              подходящий вариант
            </div>
          </div>
          <div class="help__button button button-blue open-callback" data-title="Страница: Протезирование">записаться
            на прием
          </div>
        </div>
      </div>
    </div>
    <div class="services-detailed__doctors">
      <div class="container">
        <h2>Установкой виниров занимаются только высококвалифицированные стоматолог- ортопеды</h2>
        <?php global $post;
        $myposts = get_posts([
            'posts_per_page' => -1,
            'post_type' => 'doctors',
            'tax_query' => [
                [
                    'taxonomy' => 'specialisation',
                    'field' => 'slug',
                    'terms' => 'protez',
                ]
            ]
        ]);
        ?>
        <div class="services__slider">
          <div class="swiper-wrapper">
            <?php foreach ($myposts as $post) {
              setup_postdata($post);
              ?>
              <div class="swiper-slide">
                <div class="services__slider-item">
                  <?php if (get_field('lead-doc')): ?>
                    <div class="lead services__slider-lead">
                      <span>Ведущий врач</span>
                    </div>
                  <?php endif; ?>
                  <div class="services__slider-title"><?php the_title() ?></div>
                  <div class="services__slider-occupation"><?php the_field('spec'); ?></div>
                  <div class="services__slider-exp">Опыт работы: <?php the_field('exp'); ?></div>
                  <div class="services__slider-excerpt"><?php the_excerpt(); ?></div>
                  <a href="<?php the_permalink(); ?>" class="services__slider-link button button-blue">
                    <span>подробнее</span>
                    <svg>
                      <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
                    </svg>
                  </a>
                  <?php if (has_post_thumbnail()): ?>
                    <div class="services__slider-img img">
                      <img data-src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"
                           class="swiper-lazy">
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php };
            ?>
          </div>
          <div class="pagination"></div>
        </div>
        <?php wp_reset_postdata(); ?>
        <a href="/doctors" class="button button-white services-detailed__doctors-all">показать всех врачей</a>
      </div>
    </div>
    <div class="block">
      <div class="container container_big">
        <div class="callback-second">
          <div class="callback-second__text">
            <h2>Запишитесь на профессиональную гигиену и получите улыбку Вашей мечты</h2>
            <h4>Что Вас ждёт при первом посещении стоматолога-ортопеда?</h4>
            <div class="callback-second__list">
              <div class="callback-second__item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Подробная консультация врача с составлением плана лечения и индивидуальные рекомендации по гигиене полости рта.</p>
              </div>
              <div class="callback-second__item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Визуальный осмотр полости рта. Стоматолог оценит состояние ваших зубов и, при необходимости, вы получите консультацию стоматологов других направлений.</p>
              </div>
              <div class="callback-second__item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#check"></use>
                </svg>
                <p>В результате обследования стоматолог обсудит с вами его результаты и подберет план лечения, подходящий под Ваши запросы.</p>
              </div>
              <div class="callback-second__item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Вы получите подробную информацию о всех плюсах и минусах процедуры, получите полную информацию о состоянии здоровья, а также всю информацию о стоимости каждого этапа.</p>
              </div>
            </div>
          </div>
          <div action="" class="callback__form-wrap">
            <div class="callback__subtitle">Получить консультацию</div>
            <?php echo do_shortcode('[contact-form-7 id="164" title="Callback block"]') ?>
            <span class="callback__policy form__policy">Нажимая кнопку, вы даёте согласие на обработку персональных данных в соответствии с <a
                      href="/policy" target="_blank">Политикой конфиденциальности</a></span>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/faq'); ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>