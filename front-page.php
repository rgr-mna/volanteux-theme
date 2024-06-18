<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Les_Volanteux_-_Pop
 */

get_header();
?>

	<main id="primary" class="main-content">
	<section class="hero">
            <div class="hero__side">
                <img class="hero__image" src="<?php echo get_template_directory_uri(); ?>/assets/hero_image.png"
                    alt="Image of badminton player with graphics around.">
            </div>
            <div class="hero__side hero__content">
                <h1 class="hero__title">Club de badminton à Andenne pour <em>adultes</em> et <em>jeunes</em></h1>
                <p class="hero__description">
                    Découvrez le badminton dans notre club convivial pour toute la famille. Rejoignez nous pour des
                    parties
                    en <em>jeu libre</em>, en <em>compétition</em> ou pour suivre nos <em>séances de coaching</em>
                </p>
                <div class="hero__cta">
                    <button class="hero__btn btn">
                        Jouer avec les adultes
                        <span class="hero__btn-icon dashicons dashicons-arrow-right-alt" aria-hidden="true"></span>
                    </button>
                    <button class="hero__btn btn">
                        Jouer avec les jeunes
                        <span class="hero__btn-icon dashicons dashicons-arrow-right-alt" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </section>
        <section class="ribbon">
            <p class="ribbon__headline">On joue ?
                <br>la première séance est gratuite !
            </p>
            <p class="ribbon__subtext">Et notre assurance vous couvre, comme ça vous pouvez tout donner dès la première
                séance !</p>

            <button class="btn btn-lg">
                Je m'inscris
                <span class="dashicons dashicons-arrow-right-alt" aria-hidden="true"></span>
            </button>
        </section>
        <section class="values">
            <header class="section__header">
                <p class="section__intro">Nos valeurs</p>
                <h2 class="section__title">Pour que chacun puisse s’épanouir et cela dans les meilleures conditions</h2>
            </header>
            <div class="values__items">
                <article class="values__item">
                    <div class="values__icon-wrapper">
                        <img src="./assets/calendar-alt.svg" alt="" class="values__icon">
    
                    </div>
                    <div class="values__body">
                        <header class="values__header">Un lieu sûr</header>
                        <p class="values__content">Le club organise régulièrement des activités pour les membres mais aussi
                            pour
                            leurs proches.</p>
                    </div>
                </article>
                <article class="values__item">
                    <div class="values__icon-wrapper">
                        <img src="./assets/calendar-alt.svg" alt="" class="values__icon">
    
                    </div>
                    <div class="values__body">
                        <header class="values__header">Un lieu sûr</header>
                        <p class="values__content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, itaque!
                            Doloremque sed nostrum assumenda hic quam rem placeat, asperiores provident modi illum
                            necessitatibus eaque excepturi quae voluptas corporis fugiat iste voluptates? Sit maiores dolor
                            fugiat, dolorem rerum et perspiciatis cupiditate..</p>
                    </div>
                </article>
                <article class="values__item">
                    <div class="values__icon-wrapper">
                        <img src="./assets/calendar-alt.svg" alt="" class="values__icon">
    
                    </div>
                    <div class="values__body">
                        <header class="values__header">Un lieu sûr</header>
                        <p class="values__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor rerum
                            dolorum delectus!</p>
                    </div>
                </article>
                <article class="values__item">
                    <div class="values__icon-wrapper">
                        <img src="./assets/calendar-alt.svg" alt="" class="values__icon">
    
                    </div>
                    <div class="values__body">
                        <header class="values__header">Un lieu sûr</header>
                        <p class="values__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sequi ut
                            similique laboriosam consequatur minus quo id dolores dolore ex aut architecto officiis
                            voluptates necessitatibus, ab accusantium debitis repellendus temporibus.</p>
                    </div>
                </article>
            </div>
        </section>
        <section class="find-us">
            <p class="section__intro">Où nous trouver</p>
            <h2 class="section__title">Nos salles d’entrainements et compétition</h2>
            <div class="find-us__container">
                <div class="find-us__locations find-us__locations--left">
                    <article class="find-us__location-item">
                        <header class="find-us__location-header">Andenne</header>
                        <p class="find-us__location-name">Complexe sportif de Seilles</p>
                        <p class="find-us__location-address">Rue Ferdinand Hendschel 40, 5300 Andenne</p>
                        <p class="find-us__location-schedule">Tout les <em>lundi</em> de <em>19h30</em> à <em>22h30</em>
                        </p>
                    </article>
                    <article class="find-us__location-item">
                        <header class="find-us__location-header">Andenne</header>
                        <p class="find-us__location-name">Complexe sportif de Seilles</p>
                        <p class="find-us__location-address">Rue Ferdinand Hendschel 40, 5300 Andenne</p>
                        <p class="find-us__location-schedule">Tout les <em>lundi</em> de <em>19h30</em> à <em>22h30</em>
                        </p>
                    </article>
                </div>
                <div class="find-us__locations find-us__locations--right">
                    <div class="find-us__map"></div>
                </div>
            </div>
        </section>
        <section class="">
            <p class="section__intro">Vie du club</p>
            <h2 class="section__title">Événements et séances organisés par le club</h2>
            <div class="events">
                <article class="events__item">
                    <div class="events__date">
                        <div class="events__date-digit" id="event-date-digit">24</div>
                        <div class="events__date-month" id="event-date-month">Mai</div>
                    </div>
                    <div class="events__details">
                        <header class="events__header">
                            <p class="events__title">Tournoi de fin d’année</p>
                            <div class="events__info">
                                <p class="events__registration">Sur inscription</p>
                                <div class="events__location">
                                    <span class="events__location-icon dashicons dashicons-location"></span>
                                    <p class="events__location-name">Complexe de Seilles</p>
                                </div>
                            </div>
                        </header>
                        <div class="events__body">
                            <p>In the eighteenth century the German philosopher Immanuel Kant developed a theory of
                                knowledge in wh</p>
                        </div>
                        <button class="btn">
                            En savoir plus
                            <span class="dashicons dashicons-arrow-right-alt" aria-hidden="true"></span>
                        </button>
                    </div>
                </article>
                <article class="events__item">
                    <div class="events__date">
                        <div class="events__date-digit" id="event-date-digit">24</div>
                        <div class="events__date-month" id="event-date-month">Mai</div>
                    </div>
                    <div class="events__details">
                        <header class="events__header">
                            <p class="events__title">Tournoi de fin d’année</p>
                            <div class="events__info">
                                <p class="events__registration">Sur inscription</p>
                                <div class="events__location">
                                    <span class="events__location-icon dashicons dashicons-location"></span>
                                    <p class="events__location-name">Complexe de Seilles</p>
                                </div>
                            </div>
                        </header>
                        <div class="events__body">
                            <p>In the eighteenth century the German philosopher Immanuel Kant developed a theory of
                                knowledge in wh</p>
                        </div>
                        <button class="btn">
                            En savoir plus
                            <span class="dashicons dashicons-arrow-right-alt" aria-hidden="true"></span>
                        </button>
                    </div>
                </article>
            </div>
            <h2 class="section__title">Nos dernières actus</h2>
            <div class="news">
                <article class="news__item">
                    <header class="news__header">
                        <div class="news__meta">
                            <div class="news__category">PV Réunions /</div>
                            <div class="news__date">15.02.2024 18:32</div>
                        </div>
                        <p class="news__title">PV réunion de 15/02/2024</p>
                    </header>
                    <div class="news__body">
                        <p>On a eu plusieurs problèmes avec les salles et le matériel de badminton récemment. </p>
                    </div>
                    <a href="#" class="news__link">Lire l’article...</a>
                </article>
                <p class="news__all">Voir tous les articles</p>
            </div>
        </section>
	</main>

<?php
get_footer();
