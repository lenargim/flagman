<?php
/*
Template name: Удаление
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
          <h2>Удаление коренных зубов: показания и виды удаления</h2>
          <div class="services-detailed__text-desc">
            Удаление зубов необходимо при их неправильном прорезывании, пародонтите или безрезультатном лечении
            осложнений кариеса. Часто удаление коренных зубов проводят при неправильном (продольном) залегании "зубов
            мудрости", которые начинают прорезываться, вызывая сильный дискомфорт, боль и смещение других зубов у
            пациентаройти в нашей клинике. Звоните уже сегодня, и запишитесь на
            первую консультацию в нашей стоматологии.
          </div>
        </div>
        <div class="services-detailed__aside">
          <div class="burning__box">
            <h4>Каких проблем можно избежать, если своевременно удалить зуб?</h4>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Распространения воспаления на другие зубы, десны и попадание инфекции в кровоток</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Увеличения кисты, гнойных воспалений, которые причиняют острую боль</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Своевременное удаление зубов мудрости, выросших в неправильном положении, позволяет избежать развития
                на них кариеса, а также предотвратить медленное и болезненное прорезывание</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="contraindications block">
          <div class="contraindications__wrap">
            <h3>Показания к удалению зубов</h3>
            <p class="contraindications__desc">
              Прежде чем удалить зуб, стоматолог-хирург выполнит визуальный осмотр ротовой полости и сделает
              рентген-снимок, чтобы определить точное положение зуба и убедиться в невозможности проведения
              зубосохраняющего лечения
            </p>
            <ul>
              <li>Острый гнойный процесс в тканях зуба и пародонта</li>
              <li>Одоногенный остеомиелит, околочелюстной абсцесс</li>
              <li>Наличие растущей корневой кисты более 7 мм., не<br>поддающейся лечению</li>
              <li>ЛСверхкомплектные единицы, которые травмируют мягкие ткани и мешают протезированию зуба</li>
              <li>Сильное разрушение зуба кариесом</li>
              <li>Сильная подвижность зубов при пародонтите</li>
              <li>Перелом корня зуба вследствие механической травмф</li>
              <li>Бесперспективность лечения расположенных у верхушек корней зубов гранулем или кист и др.</li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/remove1.jpg"
                                                            alt="Показания к удалению зубов"></div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-types">
          <div class="services-types__item">
            <div class="services-types__text">
              <h3>Простое удаление зуба</h3>
              <p>Речь о вырывании легкодоступного однокорневого зуба, не требующее проведения сложных процедур по
                вмешательству в мягкие и костные ткани. В такой ситуации стоматолог-хирург расшатывает зуб и
                вытаскивает специальными щипцами. Многие считают, что это очень простая процедура. Однако, при
                неграмотном и травматичном вырывании в дальнейшем могут возникнуть осложнения с протезированием или
                имплантацией нового зуба.</p>
            </div>
            <div class="services-types__img img">
              <img src="<?php echo IMAGES_PATH ?>/light-remove.png" alt="Простое удаление зуба">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="services-types">
          <div class="services-types__item">
            <div class="services-types__text">
              <h3>Сложное удаление зуба</h3>
              <p>На первый взгляд один зуб может ничем не отличается от другого, а способ удаление зубов будет разным.
                Только по снимку опытный стоматолог сможет это увидеть и правильно провести процедуру. Например, корни
                зубов, задевающие важные участки челюсти, нужно удалять крайне осторожно. Без специальных навыков
                можно нанести вред здоровью, если неправильно провести удаление. К сложному удалению относят чаще
                всего операции с зубом мудрости.</p>
              <p>Техника сложного удаления начинается с разреза и отделения зуба от десны. Если есть необходимость, то
                происходит выпиливание сросшейся костной ткани или сросшихся корней. Затем накладываются щипцы, и
                осуществляется расшатывание зуба до тех пор, пока не произойдет отделение его от десны. В завершение
                на десну при необходимости накладываются швы.</p>
            </div>
            <div class="services-types__img img">
              <img src="<?php echo IMAGES_PATH ?>/hard-remove.png" alt="Сложное удаление зуба">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <h2>Этапы проведения удаления зуба </h2>
        <div class="stages">
          <div class="stages__box">
            <h4>Диагностика и определение сложности удаления</h4>
            <p>С помощью рентген-снимка изучается форма и длина корней. Врач подробно объясняет вашу ситуацию и
              консультирует по сложности процедуры</p>
          </div>
          <div class="stages__box">
            <h4>Санация полости рта и обезболивание</h4>
            <p>Врач обеззараживает зону экстракции и подбирает подходящую дозу анестезии, чтобы процесс удаления зуба
              проходил для вас максимально комфортно</p>
          </div>
          <div class="stages__box">
            <h4>Непосредственная экстракция зуба</h4>
            <p> Хирург проводит процедуру удаления зуба. В случае необходимости может проводиться распиливание зуба на
              фрагменты и удаление его по частям.</p>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/prices'); ?>
    <?php get_template_part('template-parts/cite'); ?>
    <div class="block reviews">
      <div class="container">
        <h2>Вы можете ознакомиться с отзывами наших клиентов</h2>
        <div class="reviews__desc"><?php the_field('reviews-desc'); ?></div>
        <?php get_template_part('template-parts/rating'); ?>
        <div class="reviews__wrap">
          <?php global $post;
          $myposts = get_posts([
              'posts_per_page' => 2,
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
        <a href="<?php echo get_post_type_archive_link('reviews') ?>" class="reviews__more button button-white">Посмотреть
          все отзывы</a>
      </div>
    </div>
    <div class="services-detailed__doctors">
      <div class="container">
        <h2>Лечением десен занимаются наши лучшие врачи в сфере пародонтологии и хирургии</h2>
        <?php global $post;
        $myposts = get_posts([
            'posts_per_page' => -1,
            'post_type' => 'doctors',
            'tax_query' => [
                [
                    'taxonomy' => 'specialisation',
                    'field' => 'slug',
                    'terms' => 'remove',
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
    <?php get_template_part('template-parts/faq'); ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>